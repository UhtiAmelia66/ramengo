<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>RamenGo</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="japan-theme font-sans antialiased">

    <div class="flex min-h-screen items-center justify-center px-4 py-10">

        <div class="w-full max-w-md">

            <div class="mb-8 text-center">

                <a href="/" class="inline-block">

                    <div class="mx-auto mb-4 flex h-20 w-20 items-center justify-center rounded-full border border-amber-500/40 bg-black/45 text-5xl shadow-2xl shadow-red-950/50 backdrop-blur">
                        &#127836;
                    </div>

                    <h1 class="text-5xl font-extrabold text-[#D4AF37]">
                        RamenGo
                    </h1>

                    <p class="mt-2 font-semibold text-[#F4EFEA]/80">
                        Japanese Ramen Restaurant
                    </p>

                </a>

            </div>

            <div class="theme-panel rounded-3xl p-8">

                {{ $slot }}

            </div>

        </div>

    </div>

</body>
</html>
