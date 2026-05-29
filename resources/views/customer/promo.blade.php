@extends('layouts.app')

@section('content')

<div class="bg-white p-8 rounded-3xl shadow">

    @if($content)

        <h1 class="text-4xl font-bold text-orange-500 mb-6">
            {{ $content->judul }}
        </h1>

        <p class="text-lg">
            {{ $content->isi }}
        </p>

    @else

        <h1 class="text-4xl font-bold text-orange-500 mb-6">
            Promo
        </h1>

        <p class="text-lg text-gray-500">
            Belum ada promo yang tersedia saat ini.
        </p>

    @endif

</div>

@endsection