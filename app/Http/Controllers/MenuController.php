<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();

        return view(
            'menu.index',
            compact('menus')
        );
    }


    public function create()
    {
        return view('menu.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([

            'nama' => 'required|min:3',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable',
            'kategori' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'

        ]);


        $gambar = null;

        if($request->hasFile('gambar'))
        {
            $gambar = $request
                ->file('gambar')
                ->store(
                    'menu',
                    'public'
                );
        }


        Menu::create([

            'nama' => $validated['nama'],
            'harga' => $validated['harga'],
            'deskripsi' => $validated['deskripsi'] ?? null,
            'kategori' => $validated['kategori'],
            'gambar' => $gambar

        ]);


        return redirect()
            ->route('menu.index')
            ->with(
                'success',
                'Menu berhasil ditambahkan 🍜'
            );
    }


    public function edit($id)
    {
        $menu = Menu::findOrFail($id);

        return view(
            'menu.edit',
            compact('menu')
        );
    }


    public function update(
        Request $request,
        $id
    )
    {
        $menu = Menu::findOrFail($id);

        $validated = $request->validate([

            'nama'=>'required|min:3',
            'harga'=>'required|numeric',
            'deskripsi'=>'nullable',
            'kategori'=>'required',
            'gambar'=>'nullable|image|mimes:jpg,jpeg,png|max:2048'

        ]);


        if($request->hasFile('gambar'))
        {
            $validated['gambar'] = $request
                ->file('gambar')
                ->store(
                    'menu',
                    'public'
                );
        }


        $menu->update($validated);


        return redirect()
            ->route('menu.index')
            ->with(
                'success',
                'Menu berhasil diupdate ✅'
            );
    }


    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);

        $menu->delete();

        return redirect()
            ->route('menu.index')
            ->with(
                'success',
                'Menu berhasil dihapus 🗑️'
            );
    }
}