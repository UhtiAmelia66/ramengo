@extends('layouts.admin')

@section('content')

<h1 class="text-4xl font-bold text-orange-500 mb-8">

Dashboard Admin ⚙️

</h1>

<div class="grid md:grid-cols-4 gap-6">

<div class="bg-white p-6 rounded-2xl shadow">

<h2 class="text-gray-500">

Jumlah Menu

</h2>

<p class="text-4xl font-bold text-orange-500">

{{ $totalMenu }}

</p>

</div>


<div class="bg-white p-6 rounded-2xl shadow">

<h2 class="text-gray-500">

Jumlah Order

</h2>

<p class="text-4xl font-bold text-orange-500">

{{ $totalOrder }}

</p>

</div>


<div class="bg-white p-6 rounded-2xl shadow">

<h2 class="text-gray-500">

Pesanan Selesai

</h2>

<p class="text-4xl font-bold text-orange-500">

{{ $pesananSelesai }}

</p>

</div>


<div class="bg-white p-6 rounded-2xl shadow">

<h2 class="text-gray-500">

Pendapatan

</h2>

<p class="text-3xl font-bold text-green-500">

Rp {{ number_format($totalPendapatan) }}

</p>

</div>

</div>

@endsection