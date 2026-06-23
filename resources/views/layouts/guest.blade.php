<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>RamenGo 🍜</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased">

    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-orange-400 via-orange-500 to-red-500 px-4">

        <div class="w-full max-w-md">

            <!-- Logo -->
            <div class="text-center mb-8">

                <a href="/" class="inline-block">

                    <div class="text-7xl mb-3">
                        🍜
                    </div>

                    <h1 class="text-5xl font-bold text-white">
                        RamenGo
                    </h1>

                    <p class="text-orange-100 mt-2">
                        Japanese Ramen Restaurant
                    </p>

                </a>

            </div>

            <!-- Card Login -->
            <div class="bg-white rounded-3xl shadow-2xl p-8">

                {{ $slot }}

            </div>

        </div>

    </div>

</body>
</html>