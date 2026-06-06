@extends('layouts.cashier')

@section('content')

<h2 class="text-2xl font-bold mb-6">Riwayat Pembayaran 📋</h2>

@if($orders->isEmpty())
    <p class="text-gray-600">Belum ada transaksi.</p>
@else

<table class="w-full bg-white shadow rounded-lg overflow-hidden">

    <thead class="bg-orange-500 text-white">
        <tr>
            <th class="p-3 text-left">ID</th>
            <th class="p-3 text-left">Customer</th>
            <th class="p-3 text-left">Total</th>
            <th class="p-3 text-left">Status</th>
            <th class="p-3 text-left">Tanggal</th>
        </tr>
    </thead>

    <tbody>
        @foreach($orders as $order)
        <tr class="border-b">
            <td class="p-3">#{{ $order->id }}</td>
            <td class="p-3">{{ $order->customer_name ?? '-' }}</td>
            <td class="p-3">Rp {{ number_format($order->total) }}</td>
            <td class="p-3 text-green-600 font-bold">{{ $order->status }}</td>
            <td class="p-3">{{ $order->created_at }}</td>
        </tr>
        @endforeach
    </tbody>

</table>

@endif

@endsection