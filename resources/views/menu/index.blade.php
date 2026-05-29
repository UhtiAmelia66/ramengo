@extends('layouts.admin')

@section('content')

<h1 class="text-4xl font-bold text-orange-500 mb-8">

Daftar Menu 🍜

</h1>

<a
href="{{ route('menu.create') }}"
class="bg-orange-500 text-white px-5 py-3 rounded-xl inline-block mb-6">

+ Tambah Menu

</a>


<div class="grid grid-cols-3 gap-6">

@forelse($menus as $menu)

<div class="bg-white p-6 rounded-2xl shadow">

@if($menu->gambar)

<img
src="{{ asset('storage/'.$menu->gambar) }}"
class="w-full h-40 object-cover rounded-xl mb-4">

@else

<div class="h-40 bg-orange-100 rounded-xl mb-4 flex items-center justify-center">

🍜

</div>

@endif


<h2 class="text-2xl font-bold">

{{ $menu->nama }}

</h2>


<p class="text-gray-500 mb-3">

{{ $menu->deskripsi }}

</p>


<p class="text-orange-500 font-bold text-xl mb-4">

Rp {{ number_format($menu->harga) }}

</p>


<div class="flex gap-3">

<a
href="{{ route('menu.edit',$menu->id) }}"
class="bg-blue-500 text-white px-4 py-2 rounded-xl">

Edit ✏️

</a>


<form
action="{{ route('menu.destroy',$menu->id) }}"
method="POST">

@csrf
@method('DELETE')

<button
type="submit"
onclick="return confirm('Yakin ingin menghapus menu ini?')"
class="bg-red-500 text-white px-4 py-2 rounded-xl">

Hapus 🗑️

</button>

</form>

</div>

</div>

@empty

<div class="col-span-3 bg-white p-6 rounded-xl text-center">

Belum ada menu 🍜

</div>

@endforelse

</div>

@endsection