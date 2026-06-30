<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css'])

    <title>Kasir - RamenGo</title>

</head>

<body class="japan-theme" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.4) 0%, rgba(12, 9, 8, 0.7) 100%), url('{{ asset('images/japan-lantern-alley-theme.png') }}') !important; background-size: cover !important; background-position: center center !important; background-repeat: no-repeat !important; background-attachment: fixed !important;">

<nav class="theme-nav">

    <div class="container mx-auto flex items-center justify-between px-8 py-5">

        <h1 class="text-3xl font-extrabold text-[#D4AF37]">
            Kasir
        </h1>

        <div class="flex items-center gap-8">

            <a
                href="{{ route('cashier.index') }}"
                class="font-semibold text-[#F4EFEA]/85 transition hover:text-[#D4AF37]">

                Pembayaran
            </a>

            <a
                href="{{ route('cashier.history') }}"
                class="font-semibold text-[#F4EFEA]/85 transition hover:text-[#D4AF37]">

                Riwayat
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                        class="theme-btn rounded-xl px-4 py-2 font-bold transition">
                    Logout
                </button>
            </form>

        </div>

    </div>

</nav>

<div class="container mx-auto p-8">

    @yield('content')

</div>

</body>
</html>
