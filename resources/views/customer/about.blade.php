@extends('layouts.customer')

@section('content')

<div class="max-w-4xl mx-auto px-6 py-12">

    <div class="bg-white shadow-xl rounded-3xl p-10 border border-orange-100">

        <h1 class="text-5xl font-extrabold text-orange-500 mb-6 text-center">
            Tentang Kami 🍜
        </h1>

        <p class="text-gray-700 text-lg leading-relaxed text-center mb-6">
            <span class="font-semibold text-orange-500">RamenGo</span> restoran ramen modern
            yang menghadirkan pengalaman pemesanan digital dengan teknologi QR Code.
            Kami menggabungkan cita rasa autentik Jepang dengan pelayanan cepat,
            praktis, dan nyaman untuk semua pelanggan.
        </p>

        <div class="grid md:grid-cols-3 gap-6 mt-10">

            <div class="bg-orange-50 rounded-2xl p-6 shadow-md hover:shadow-xl transition">
                <h2 class="text-2xl font-bold text-orange-500 mb-3">
                    🍥 Kualitas Terbaik
                </h2>
                <p class="text-gray-600">
                    Menggunakan bahan pilihan dan resep ramen berkualitas
                    untuk memberikan rasa terbaik di setiap mangkuk.
                </p>
            </div>

            <div class="bg-orange-50 rounded-2xl p-6 shadow-md hover:shadow-xl transition">
                <h2 class="text-2xl font-bold text-orange-500 mb-3">
                    📱 Pemesanan Modern
                </h2>
                <p class="text-gray-600">
                    Pelanggan dapat memesan makanan dengan mudah melalui
                    sistem QR Code tanpa perlu antre panjang.
                </p>
            </div>

            <div class="bg-orange-50 rounded-2xl p-6 shadow-md hover:shadow-xl transition">
                <h2 class="text-2xl font-bold text-orange-500 mb-3">
                    🚀 Pelayanan Cepat
                </h2>
                <p class="text-gray-600">
                    Kami berkomitmen memberikan pelayanan yang cepat,
                    ramah, dan memuaskan untuk setiap pelanggan.
                </p>
            </div>

        </div>

    </div>

</div>

@endsection
