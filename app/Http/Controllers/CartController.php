<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderItem;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);

        return view('customer.cart', compact('cart'));
    }

    public function add($id)
    {
        $menu = Menu::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'nama' => $menu->nama,
                'harga' => $menu->harga,
                'quantity' => 1
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back();
    }

    public function decrease($id)
    {
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']--;

            if($cart[$id]['quantity'] <= 0) {
                unset($cart[$id]);
            }
        }

        session()->put('cart', $cart);

        return redirect()->back();
    }

    public function checkout()
    {
        $cart = session()->get('cart', []);

        if(empty($cart)) {
            return redirect()
                ->back()
                ->with('error', 'Keranjang masih kosong');
        }

        // 🔥 hitung total harga
        $total = 0;

        foreach($cart as $item) {
            $total += $item['harga'] * $item['quantity'];
        }

        // 🔥 CREATE ORDER (STATUS DIKONSISTENKAN)
        $order = Order::create([
            'nomor_meja' => 7, // nanti bisa dari input login/session
            'total_harga' => $total,
            'status' => 'Menunggu Dimasak'
        ]);

        // simpan id order terakhir
        session()->put('last_order_id', $order->id);

        // 🔥 INSERT ORDER ITEMS
        foreach($cart as $menuId => $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'menu_id' => $menuId,
                'quantity' => $item['quantity'],
                'harga' => $item['harga']
            ]);
        }

        // kosongkan cart
        session()->forget('cart');

        // 🔥 FIX: langsung ke halaman status (tanpa route name error)
        return redirect('/order-status')
            ->with('success', 'Pesanan berhasil dibuat 🍜');
    }
}