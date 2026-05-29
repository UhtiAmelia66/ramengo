@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold text-orange-600 mb-6">

Edit Menu ✏️

</h1>

<form
action="{{ route('menu.update',$menu->id) }}"
method="POST"
enctype="multipart/form-data"
class="bg-white p-6 rounded-2xl shadow-md">

@csrf
@method('PUT')


<div class="mb-4">

    <label class="block mb-2 font-semibold">

        Nama Menu

    </label>

    <input
        type="text"
        name="nama"
        value="{{ old('nama',$menu->nama) }}"
        class="w-full border rounded-lg px-4 py-2">

</div>


<div class="mb-4">

    <label class="block mb-2 font-semibold">

        Harga

    </label>

    <input
        type="number"
        name="harga"
        value="{{ old('harga',$menu->harga) }}"
        class="w-full border rounded-lg px-4 py-2">

</div>


<div class="mb-4">

    <label class="block mb-2 font-semibold">

        Deskripsi

    </label>

    <textarea
        name="deskripsi"
        class="w-full border rounded-lg px-4 py-2">{{ old('deskripsi',$menu->deskripsi) }}</textarea>

</div>


<div class="mb-4">

    <label class="block mb-2 font-semibold">

        Kategori Menu 🍜

    </label>

    <select
        name="kategori"
        class="w-full border rounded-lg px-4 py-2">

        <option
            value="Original"
            {{ $menu->kategori == 'Original' ? 'selected' : '' }}>

            Original

        </option>

        <option
            value="Kari"
            {{ $menu->kategori == 'Kari' ? 'selected' : '' }}>

            Kari

        </option>

        <option
            value="Pedas"
            {{ $menu->kategori == 'Pedas' ? 'selected' : '' }}>

            Pedas

        </option>

        <option
            value="Dry Ramen"
            {{ $menu->kategori == 'Dry Ramen' ? 'selected' : '' }}>

            Dry Ramen

        </option>

        <option
            value="Rice Bowl"
            {{ $menu->kategori == 'Rice Bowl' ? 'selected' : '' }}>

            Rice Bowl

        </option>

        <option
            value="Minuman"
            {{ $menu->kategori == 'Minuman' ? 'selected' : '' }}>

            Minuman

        </option>

    </select>

</div>


<div class="mb-4">

    <label class="block mb-2 font-semibold">

        Gambar Menu 🍜

    </label>

    <input
        type="file"
        name="gambar"
        class="w-full border rounded-lg px-4 py-2">

</div>


@if($menu->gambar)

<div class="mb-5">

    <img
        src="{{ asset('storage/'.$menu->gambar) }}"
        class="w-40 rounded-xl shadow">

</div>

@endif


<button
type="submit"
class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-2 rounded-lg">

Update Menu ✅

</button>

</form>

@endsection