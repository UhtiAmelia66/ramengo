@extends('layouts.kitchen')

@section('content')

<h1 class="mb-8 text-4xl font-bold text-orange-500">
    Sedang Dimasak 🍳
</h1>

@if(session('success'))
<div class="mb-6 rounded-xl bg-green-100 p-4 font-semibold text-green-700">
    {{ session('success') }}
</div>
@endif

<div class="space-y-5">

@forelse($orders as $order)

<div class="rounded-2xl bg-white p-6 shadow-md">

    <div class="flex justify-between items-center">

        <div>

            <h2 class="text-xl font-bold">
                {{ $order->nomor_meja }}
            </h2>

            <p class="text-gray-600">
                Order #{{ $order->id }}
            </p>

            <p class="text-gray-600">
                Total Rp {{ number_format($order->total_harga) }}
            </p>

            @if($order->status_pesanan=='dimasak')

                <span class="mt-3 inline-block rounded-full bg-orange-100 px-4 py-2 font-bold text-orange-700">
                    Sedang Dimasak
                </span>

            @else

                <span class="mt-3 inline-block rounded-full bg-green-100 px-4 py-2 font-bold text-green-700">
                    Siap Diambil
                </span>

            @endif

        </div>

        <div>

            @if($order->status_pesanan=='dimasak')

                <form action="{{ route('kitchen.ready',$order->id) }}" method="POST">
                    @csrf

                    <button class="rounded-xl bg-green-500 px-5 py-2 font-bold text-white">
                        Siap Diambil
                    </button>

                </form>

            @else

                <form action="{{ route('kitchen.selesai',$order->id) }}" method="POST">
                    @csrf

                    <button class="rounded-xl bg-blue-500 px-5 py-2 font-bold text-white">
                        Selesai
                    </button>

                </form>

            @endif

        </div>

    </div>

</div>

@empty

<div class="rounded-xl bg-white p-6 text-center">
    Tidak ada pesanan.
</div>

@endforelse

</div>

@endsection