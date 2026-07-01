<?php

namespace App\Http\Controllers;

use App\Models\WebsiteContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class WebsiteContentController extends Controller
{
    public function index()
    {
        $contents = WebsiteContent::latest()->get();

        return view('admin.content', compact('contents'));
    }

    public function edit($id)
    {
        $content = WebsiteContent::findOrFail($id);

        return view('admin.content.edit', compact('content'));
    }

    public function update(Request $request, $id)
    {
        $content = WebsiteContent::findOrFail($id);

        $validated = $request->validate([
            'halaman' => ['nullable', 'in:promo,event,about,contact'],
            'judul' => ['required', 'string', 'max:255'],
            'isi' => ['required', 'string'],
            'poster' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $data = [
            'halaman' => $validated['halaman'] ?? $content->halaman,
            'judul' => $validated['judul'],
            'isi' => $validated['isi'],
            'is_active' => $request->boolean('is_active', true),
        ];

        if ($request->hasFile('poster')) {
            $data['poster_path'] = $this->uploadPosterToSupabase($request->file('poster'));
        }

        $content->update($data);

        return redirect()
            ->route('content.index')
            ->with('success', 'Konten berhasil disimpan ✅');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'halaman' => ['required', 'in:promo,event,about,contact'],
            'judul' => ['required', 'string', 'max:255'],
            'isi' => ['required', 'string'],
            'poster' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
        ]);

        $posterPath = null;

        if ($request->hasFile('poster')) {
            $posterPath = $this->uploadPosterToSupabase($request->file('poster'));
        }

        WebsiteContent::create([
            'halaman' => $validated['halaman'],
            'judul' => $validated['judul'],
            'isi' => $validated['isi'],
            'poster_path' => $posterPath,
            'is_active' => true,
        ]);

        return redirect()
            ->route('content.index')
            ->with('success', 'Konten berhasil ditambahkan ✅');
    }

    public function delete($id)
    {
        $content = WebsiteContent::findOrFail($id);

        $content->delete();

        return redirect()
            ->route('content.index')
            ->with('success', 'Konten berhasil dihapus 🗑️');
    }

    private function uploadPosterToSupabase($file): string
    {
        $supabaseUrl = rtrim((string) config('services.supabase.url'), '/');
        $serviceRoleKey = (string) config('services.supabase.service_role_key');
        $bucket = (string) config('services.supabase.storage_bucket');

        if ($supabaseUrl === '' || $serviceRoleKey === '' || $bucket === '') {
            abort(500, 'Supabase Storage belum dikonfigurasi. Cek SUPABASE_URL, SUPABASE_SERVICE_ROLE_KEY, dan SUPABASE_STORAGE_BUCKET.');
        }

        $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = strtolower($file->getClientOriginalExtension() ?: 'jpg');
        $safeName = Str::slug($originalName);

        if ($safeName === '') {
            $safeName = 'poster';
        }

        $path = 'promo-event/'.Str::uuid().'-'.$safeName.'.'.$extension;
        $mimeType = $file->getMimeType() ?: 'application/octet-stream';

        $response = Http::withHeaders([
            'apikey' => $serviceRoleKey,
            'Authorization' => 'Bearer '.$serviceRoleKey,
            'Content-Type' => $mimeType,
            'x-upsert' => 'true',
        ])
            ->withBody(
                file_get_contents($file->getRealPath()),
                $mimeType
            )
            ->post($supabaseUrl.'/storage/v1/object/'.$bucket.'/'.$path);

        if ($response->failed()) {
            abort(500, 'Upload poster ke Supabase gagal: '.$response->body());
        }

        return $supabaseUrl.'/storage/v1/object/public/'.$bucket.'/'.$path;
    }
}