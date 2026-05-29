<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Order;

class AdminController extends Controller
{
    public function index()
    {
        $totalMenu = Menu::count();
        $totalOrder = Order::count();

        $pesananSelesai = Order::where(
            'status',
            'siap diambil'
        )->count();

        $totalPendapatan = Order::where(
            'status',
            'siap diambil'
        )->sum('total_harga');

        return view(
            'admin.index',
            compact(
                'totalMenu',
                'totalOrder',
                'pesananSelesai',
                'totalPendapatan'
            )
        );
    }

    public function report()
    {
        return view('admin.report');
    }
}