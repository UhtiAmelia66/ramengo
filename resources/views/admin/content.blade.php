@extends('layouts.admin')

@section('content')

<h1 class="text-4xl font-bold text-orange-500 mb-8">

Konten Website 📝

</h1>

@if(session('success'))

<div class="bg-green-100 p-4 rounded-xl mb-5">

    {{ session('success') }}

</div>

@endif


<div class="bg-white p-6 rounded-2xl shadow mb-8">

<h2 class="font-bold text-2xl mb-5">

Tambah Konten ➕

</h2>

<form
action="{{ route('content.store') }}"
method="POST">

@csrf

<input
type="text"
name="halaman"
placeholder="about / promo / contact"
class="w-full border p-3 rounded-xl mb-4">

<input
type="text"
name="judul"
placeholder="Judul"
class="w-full border p-3 rounded-xl mb-4">

<textarea
name="isi"
rows="5"
placeholder="Isi konten..."
class="w-full border p-3 rounded-xl mb-5"></textarea>

<button
type="submit"
class="bg-orange-500 text-white px-6 py-3 rounded-xl">

Tambah ➕

</button>

</form>

</div>



@foreach($contents as $content)

<div class="bg-white p-6 rounded-2xl shadow mb-5">

<form
action="{{ route('content.update',$content->id) }}"
method="POST">

@csrf

<h2 class="font-bold text-xl mb-3">

{{ ucfirst($content->halaman) }}

</h2>

<input
type="text"
name="judul"
value="{{ $content->judul }}"
class="w-full border p-3 rounded-xl mb-4">

<textarea
name="isi"
rows="4"
class="w-full border p-3 rounded-xl mb-4">{{ $content->isi }}</textarea>

<div class="flex gap-3">

<button
type="submit"
class="bg-blue-500 text-white px-5 py-2 rounded-xl">

Simpan Edit ✏️

</button>

</form>


<form
action="{{ route('content.delete',$content->id) }}"
method="POST">

@csrf

<button
type="submit"
class="bg-red-500 text-white px-5 py-2 rounded-xl">

Hapus 🗑️

</button>

</form>

</div>

</div>

@endforeach

@endsection