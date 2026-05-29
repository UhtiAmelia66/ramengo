<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\WebsiteContent;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer.home');
    }

    public function menu()
    {
        $menus = Menu::all();

        return view(
            'customer.menu',
            compact('menus')
        );
    }

    public function about()
    {
        $content = WebsiteContent::where(
            'halaman',
            'about'
        )->first();

        return view(
            'customer.about',
            compact('content')
        );
    }

    public function promo()
    {
        $content = WebsiteContent::where(
            'halaman',
            'promo'
        )->first();

        return view(
            'customer.promo',
            compact('content')
        );
    }

    public function contact()
    {
        $content = WebsiteContent::where(
            'halaman',
            'contact'
        )->first();

        return view(
            'customer.contact',
            compact('content')
        );
    }
}