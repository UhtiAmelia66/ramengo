@extends('layouts.kitchen')

@section('content')

<h1 class="mb-8 text-4xl font-bold text-orange-500">
    Riwayat Pesanan 
</h1>

@if(session('success'))
<div class="mb-6 rounded-xl bg-green-100 p-4 font-semibold text-green-700">
    {{ session('success') }}
</div>
@endif

<table class="w-full bg-white shadow rounded-xl overflow-hidden">

    <thead class="bg-orange-500 text-white">

        <tr>

            <th class="p-3 text-left">Order</th>

            <th class="p-3 text-left">Meja</th>

            <th class="p-3 text-left">Total</th>

            <th class="p-3 text-left">Tanggal</th>

        </tr>

    </thead>

    <tbody>

    @forelse($orders as $order)

        <tr class="border-b">

            <td class="p-3">
                #{{ $order->id }}
            </td>

            <td class="p-3">
                {{ $order->nomor_meja }}
            </td>

            <td class="p-3">
                Rp {{ number_format($order->total_harga) }}
            </td>

            <td class="p-3">
                {{ $order->created_at->format('d/m/Y H:i') }}
            </td>

        </tr>

    @empty

        <tr>

            <td colspan="4" class="text-center p-6">

                Belum ada riwayat.

            </td>

        </tr>

    @endforelse

    </tbody>

</table>

@endsection