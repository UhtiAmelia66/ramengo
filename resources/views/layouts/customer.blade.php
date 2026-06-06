<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RamenGo</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <!-- Navbar Customer -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-6">

            <div class="flex justify-between items-center h-16">

                <a href="/customer"
                    class="text-2xl font-bold text-orange-500">
                    🍜 RamenGo
                </a>

                <div class="flex items-center gap-6">

                    <a href="/customer"
                        class="hover:text-orange-500 font-medium">
                        Home
                    </a>

                    <a href="/customer/menu"
                        class="hover:text-orange-500 font-medium">
                        Menu
                    </a>

                    <a href="/promo"
                        class="hover:text-orange-500 font-medium">
                        Promo
                    </a>

                    <a href="/about"
                        class="hover:text-orange-500 font-medium">
                        About
                    </a>

                    <a href="/contact"
                        class="hover:text-orange-500 font-medium">
                        Contact
                    </a>

                    <a href="/cart"
                        class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600">
                        🛒 Cart
                    </a>

                </div>

            </div>

        </div>
    </nav>

    <!-- Content -->
    <main class="container mx-auto px-4 py-6">
        @yield('content')
    </main>

</body>
</html>