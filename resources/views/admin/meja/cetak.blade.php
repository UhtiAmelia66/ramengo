<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak QR Code Meja</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @media print {
            @page {
                size: A4;
                margin: 12mm;
            }

            .no-print {
                display: none !important;
            }

            body {
                background: #fff !important;
            }

            .qr-card {
                break-inside: avoid;
                page-break-inside: avoid;
            }
        }
    </style>
</head>
<body class="bg-slate-100 text-slate-900">
    <main class="mx-auto max-w-6xl px-6 py-8 print:max-w-none print:px-0 print:py-0">
        <div class="no-print mb-6 flex items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold">Cetak QR Code Meja</h1>
                <p class="text-sm text-slate-600">Stiker QR untuk scan meja pelanggan.</p>
            </div>

            <button
                type="button"
                onclick="window.print()"
                class="rounded-md bg-slate-900 px-4 py-2 text-sm font-semibold text-white hover:bg-slate-700"
            >
                Cetak
            </button>
        </div>

        <section class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 print:grid-cols-3 print:gap-3">
            @foreach ($mejas as $meja)
                <article class="qr-card rounded-md border-2 border-dashed border-slate-300 bg-white p-4 text-center shadow-sm print:shadow-none">
                    <div class="mb-3 text-xs font-semibold uppercase tracking-widest text-slate-500">
                        Ramengo
                    </div>

                    <h2 class="text-2xl font-bold text-slate-950">{{ $meja->nomor_meja }}</h2>
                    <p class="mb-4 text-sm text-slate-500">Scan untuk mulai pesan</p>

                    <div class="mx-auto mb-4 flex h-48 w-48 items-center justify-center rounded-md border border-slate-200 bg-white p-2">
                        {!! $meja->qr_code !!}
                    </div>

                    <p class="break-all text-xs leading-relaxed text-slate-500">{{ $meja->qr_url }}</p>

                    <div class="mt-4 border-t border-dashed border-slate-300 pt-3 text-xs font-medium text-slate-500">
                        Potong mengikuti garis putus-putus
                    </div>
                </article>
            @endforeach
        </section>
    </main>
</body>
</html>
