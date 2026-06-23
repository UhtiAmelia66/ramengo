@extends('layouts.app')

@section('content')

<div class="max-w-6xl mx-auto py-12">

    <div class="text-center mb-12">
        <p class="text-orange-500 font-semibold">
            Favorit Kami
        </p>

        <h1 class="text-5xl font-bold mt-3">
            Temukan Menu Kami
        </h1>
    </div>

    <div class="flex justify-center gap-8 mb-10">
        <button class="border-b-2 border-orange-500 text-orange-500 font-semibold pb-2">
            Makanan
        </button>

        <button class="font-semibold text-gray-700">
            Minuman
        </button>
    </div>

    {{-- Daftar Menu Disini --}}
    @isset($menus)
        @if($menus->count() > 0)
            <div class="grid grid-cols-3 gap-6">
                @foreach ($menus as $menu)
                    <div class="p-4 border rounded-lg">
                        <h3 class="font-bold">
                            {{ $menu->name ?? 'Nama tidak tersedia' }}
                        </h3>

                        {{-- kalau nanti ada relasi kategori --}}
                        <p class="text-gray-500">
                            {{ $menu->category?->name ?? 'Tanpa kategori' }}
                        </p>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center text-gray-500">
                Menu belum tersedia
            </p>
        @endif
    @endisset

</div>

@endsection