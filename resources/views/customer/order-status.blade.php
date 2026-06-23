@extends('layouts.customer')

@section('content')

<div class="max-w-4xl mx-auto">

    <h1 class="text-3xl font-bold text-orange-500 mb-6">
        📦 Status Pesanan
    </h1>

    @if($orders->isEmpty())

        <div class="bg-white p-6 rounded-xl shadow">
            Belum ada pesanan.
        </div>

    @else

        <div class="space-y-4">

            @foreach($orders as $order)

                <div class="bg-white p-6 rounded-xl shadow flex justify-between items-center">

                    <!-- LEFT -->
                    <div>

                        <div class="font-bold text-lg">
                            Order #{{ $order->id }}
                        </div>

                        <div class="text-gray-500 text-sm">
                            Meja {{ $order->nomor_meja }}
                        </div>

                        <div class="mt-2">
                            Total: Rp {{ number_format($order->total_harga) }}
                        </div>

                    </div>

                    <!-- RIGHT STATUS -->
                    <div>

                        @if($order->status == 'Menunggu Dimasak')
                            <span class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full">
                                ⏳ Menunggu
                            </span>

                        @elseif($order->status == 'Sedang Dimasak')
                            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full">
                                👨‍🍳 Diproses
                            </span>

                        @elseif($order->status == 'Selesai')
                            <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full">
                                ✅ Selesai
                            </span>

                        @else
                            <span class="bg-gray-100 text-gray-700 px-4 py-2 rounded-full">
                                {{ $order->status }}
                            </span>
                        @endif

                    </div>

                </div>

            @endforeach

        </div>

    @endif

</div>

@endsection