@extends('layouts.app')

@section('content')

<div class="max-w-2xl mx-auto px-6 py-12">

    <div class="bg-white shadow-lg rounded-3xl p-8 border border-orange-100">

        <h1 class="text-4xl font-extrabold text-orange-500 text-center mb-6">
            Kontak Kami 📞
        </h1>

        <p class="text-gray-600 text-center mb-8">
            Hubungi kami melalui informasi di bawah ini.
        </p>

        <div class="space-y-5">

            <div class="flex items-center gap-4 bg-orange-50 p-4 rounded-2xl">
                <span class="text-2xl">📧</span>
                <div>
                    <p class="font-semibold text-gray-800">Email</p>
                    <p class="text-gray-600">ramengo@gmail.com</p>
                </div>
            </div>

            <div class="flex items-center gap-4 bg-orange-50 p-4 rounded-2xl">
                <span class="text-2xl">📷</span>
                <div>
                    <p class="font-semibold text-gray-800">Instagram</p>
                    <p class="text-gray-600">@ramengo</p>
                </div>
            </div>

            <div class="flex items-center gap-4 bg-orange-50 p-4 rounded-2xl">
                <span class="text-2xl">💬</span>
                <div>
                    <p class="font-semibold text-gray-800">WhatsApp</p>
                    <p class="text-gray-600">08123456789</p>
                </div>
            </div>

        </div>

    </div>

</div>

@endsection