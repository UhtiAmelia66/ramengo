<?php

namespace App\Http\Controllers;

use App\Models\WebsiteContent;
use Illuminate\Http\Request;

class WebsiteContentController extends Controller
{
    public function index()
    {
        $contents = WebsiteContent::all();

        return view(
            'admin.content',
            compact('contents')
        );
    }


    public function update(
        Request $request,
        $id
    )
    {
        $content =
            WebsiteContent::findOrFail($id);

        $content->update([

            'judul' => $request->judul,
            'isi' => $request->isi

        ]);

        return redirect()
            ->route('content.index')
            ->with(
                'success',
                'Konten berhasil disimpan ✅'
            );
    }


    public function store(Request $request)
    {
        WebsiteContent::create([

            'halaman' => $request->halaman,
            'judul' => $request->judul,
            'isi' => $request->isi

        ]);

        return redirect()
            ->route('content.index')
            ->with(
                'success',
                'Konten berhasil ditambahkan ✅'
            );
    }


    public function delete($id)
    {
        $content =
            WebsiteContent::findOrFail($id);

        $content->delete();

        return redirect()
            ->route('content.index')
            ->with(
                'success',
                'Konten berhasil dihapus 🗑️'
            );
    }
}