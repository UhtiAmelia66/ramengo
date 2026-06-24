<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AdminMejaController extends Controller
{
    public function index(): View
    {
        $mejas = Meja::orderBy('id')->get()->map(function (Meja $meja) {
            $meja->qr_url = route('table.scan', $meja->id);
            $meja->qr_code = QrCode::format('svg')
                ->size(72)
                ->margin(1)
                ->generate($meja->qr_url);

            return $meja;
        });

        return view('admin.meja.index', compact('mejas'));
    }

    public function store(): RedirectResponse
    {
        $nextNumber = Meja::count() + 1;

        do {
            $nomorMeja = 'Meja '.str_pad((string) $nextNumber, 2, '0', STR_PAD_LEFT);
            $nextNumber++;
        } while (Meja::where('nomor_meja', $nomorMeja)->exists());

        Meja::create([
            'nomor_meja' => $nomorMeja,
            'status' => 'tersedia',
        ]);

        return redirect()
            ->route('admin.meja.index')
            ->with('success', $nomorMeja.' berhasil ditambahkan.');
    }

    public function destroy(Meja $meja): RedirectResponse
    {
        $nomorMeja = $meja->nomor_meja;

        $meja->delete();

        return redirect()
            ->route('admin.meja.index')
            ->with('success', $nomorMeja.' berhasil dihapus.');
    }

    public function cetak(): View
    {
        $mejas = Meja::orderBy('id')->get()->map(function (Meja $meja) {
            $url = route('table.scan', $meja->id);

            $meja->qr_url = $url;
            $meja->qr_code = QrCode::format('svg')
                ->size(180)
                ->margin(1)
                ->generate($url);

            return $meja;
        });

        return view('admin.meja.cetak', compact('mejas'));
    }
}
