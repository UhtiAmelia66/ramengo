@extends('layouts.cashier')

@section('content')

<h1 class="mb-8 text-4xl font-bold text-orange-500">
    Kasir 💳
</h1>

@if(session('success'))
    <div class="mb-6 rounded-xl bg-green-100 p-4 font-semibold text-green-700">
        {{ session('success') }}
    </div>
@endif

<div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">

@forelse($orders as $order)

<div class=" rounded-2xl border-2 border-dashed border-gray-300 bg-white p-6 shadow-lg">

    <div class="text-center border-b pb-4">
        <h2 class="text-2xl font-extrabold">
            {{ $order->nomor_meja }}
        </h2>

        <p class="text-gray-500">
            Order #{{ $order->id }}
        </p>
    </div>

    <div class="py-4 space-y-3">

        @foreach($order->items as $item)

        <div class="flex justify-between">

            <div>
                <p class="font-semibold">
                    {{ $item->menu->nama ?? '-' }}
                </p>

                <p class="text-sm text-gray-500">
                    {{ $item->quantity }} x Rp {{ number_format($item->harga) }}
                </p>
            </div>

            <div class="font-bold">
                Rp {{ number_format($item->quantity * $item->harga) }}
            </div>

        </div>

        @endforeach

    </div>

    <div class="border-t pt-4">

        <div class="flex justify-between text-lg font-bold">
            <span>Total</span>
            <span>Rp {{ number_format($order->total_harga) }}</span>
        </div>

        <div class="mt-4 text-center">

            <span class="rounded-full bg-yellow-100 px-4 py-2 text-sm font-bold text-yellow-700">
                Menunggu Pembayaran
            </span>

        </div>

</div>
    <a
    href="{{ route('cashier.detail', $order->id) }}"
    class="mb-3 block w-full rounded-xl bg-orange-500 py-3 text-center text-lg font-bold text-white hover:bg-orange-600"
>
    DETAIL STRUK
    </a>
@empty

<div class="rounded-xl bg-white p-6 text-center text-gray-600">
    Belum ada pesanan yang perlu dibayar.
</div>

@endforelse

</div>

@endsection