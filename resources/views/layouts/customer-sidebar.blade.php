<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    @vite('resources/css/app.css')

    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <title>FoodOrder</title>
</head>

<body class="font-[Poppins] bg-[#F5F5F5]">

<div class="flex min-h-screen">

    {{-- SIDEBAR --}}
    <aside class="w-[320px]
                  bg-white
                  border-r
                  px-10
                  py-8">

        {{-- LOGO --}}
        <div class="flex items-center gap-4">

            <div class="w-[55px]
                        h-[55px]
                        rounded-full
                        bg-[#980000]
                        text-white
                        flex
                        items-center
                        justify-center">

                🍴

            </div>

            <h1 class="text-[#980000]
                       text-[34px]
                       font-semibold">

                FoodOrder

            </h1>

        </div>

        {{-- MENU --}}
        <div class="flex flex-col gap-10 mt-24">

            <a href=""
               class="text-[#980000]
                      text-[34px]">

                Dashboard

            </a>

            <a href=""
               class="text-[#980000]
                      text-[34px]">

                Menu

            </a>

            <a href=""
               class="text-[#980000]
                      text-[34px]">

                Promo

            </a>

            <a href=""
               class="text-[#980000]
                      text-[34px]">

                Pesanan Saya

            </a>

            <a href=""
               class="text-[#980000]
                      text-[34px]">

                Bantuan

            </a>

            <a href=""
               class="text-[#980000]
                      text-[34px]">

                Keranjang

            </a>

            <a href=""
               class="text-[#980000]
                      text-[34px]">

                Akun Saya

            </a>

        </div>

    </aside>

    {{-- CONTENT --}}
    <main class="flex-1 p-10">

        @yield('content')

    </main>

</div>

</body>
</html>