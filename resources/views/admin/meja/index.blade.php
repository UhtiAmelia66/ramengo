@extends('layouts.admin')

@section('content')

<div class="mb-8 flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
    <div>
        <h1 class="text-4xl font-bold text-orange-500">Data Meja</h1>
        <p class="mt-2 text-gray-600">Kelola daftar meja dan QR code untuk pelanggan.</p>
    </div>

    <div class="flex flex-col gap-3 sm:flex-row">
        <form method="POST" action="{{ route('admin.meja.store') }}">
            @csrf

            <button
                type="submit"
                class="rounded-xl bg-orange-500 px-5 py-3 font-bold text-white shadow hover:bg-orange-600"
            >
                + Tambah Meja
            </button>
        </form>

        <a
            href="{{ route('admin.meja.cetak') }}"
            target="_blank"
            rel="noopener"
            class="rounded-xl bg-gray-900 px-5 py-3 text-center font-bold text-white shadow hover:bg-gray-800"
        >
            Print / Cetak QR Code
        </a>
    </div>
</div>

@if (session('success'))
    <div class="mb-6 rounded-xl border border-green-200 bg-green-50 px-5 py-4 font-semibold text-green-700">
        {{ session('success') }}
    </div>
@endif

<div class="overflow-hidden rounded-2xl bg-white shadow">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-orange-500 text-white">
                <tr>
                    <th class="px-6 py-4 text-left text-sm font-bold uppercase tracking-wide">ID</th>
                    <th class="px-6 py-4 text-left text-sm font-bold uppercase tracking-wide">Nomor Meja</th>
                    <th class="px-6 py-4 text-left text-sm font-bold uppercase tracking-wide">QR Code</th>
                    <th class="px-6 py-4 text-right text-sm font-bold uppercase tracking-wide">Aksi</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-100 bg-white">
                @forelse ($mejas as $meja)
                    <tr class="hover:bg-orange-50">
                        <td class="px-6 py-4 text-sm font-semibold text-gray-700">
                            {{ $meja->id }}
                        </td>

                        <td class="px-6 py-4">
                            <div class="text-lg font-bold text-gray-900">{{ $meja->nomor_meja }}</div>
                            <div class="text-sm text-gray-500">{{ $meja->qr_url }}</div>
                        </td>

                        <td class="px-6 py-4">
                            <div class="flex h-24 w-24 items-center justify-center rounded-xl border border-gray-200 bg-white p-2">
                                {!! $meja->qr_code !!}
                            </div>
                        </td>

                        <td class="px-6 py-4 text-right">
                            <form
                                method="POST"
                                action="{{ route('admin.meja.destroy', $meja) }}"
                                onsubmit="return confirm('Hapus {{ $meja->nomor_meja }}?')"
                            >
                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="rounded-xl bg-red-500 px-4 py-2 text-sm font-bold text-white hover:bg-red-600"
                                >
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-10 text-center text-gray-500">
                            Belum ada data meja.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
