<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\View\View;

class KitchenController extends Controller
{
    // Pesanan Masuk
    public function index(): View
    {
        $orders = Order::where('status_pesanan', 'pending')
            ->latest()
            ->get();

        return view('kitchen.index', compact('orders'));
    }

    // Sedang Dimasak
   public function cooking()
{
    $orders = Order::whereIn('status_pesanan', [
        'dimasak',
        'siap_diambil'
    ])
    ->latest()
    ->get();

    return view('kitchen.cooking', compact('orders'));
}

    // Riwayat
    public function history(): View
    {
        $orders = Order::where('status_pesanan', 'selesai')
            ->latest()
            ->get();

        return view('kitchen.history', compact('orders'));
    }
}