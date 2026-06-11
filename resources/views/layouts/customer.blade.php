<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')

    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <title>FoodOrder</title>
</head>

<body class="font-[Poppins] bg-[#F5F5F5]">

<nav class="bg-white
            h-[90px]
            shadow-sm
            px-8
            flex
            items-center
            justify-between">

    {{-- LEFT --}}
    <div class="flex items-center gap-20">

        {{-- LOGO --}}
        <div class="flex items-center gap-4">

            <div class="w-[55px]
                        h-[55px]
                        rounded-full
                        bg-[#980000]
                        flex
                        items-center
                        justify-center
                        text-white
                        text-[24px]">

                🍴

            </div>

            <h1 class="text-[#980000]
                       text-[34px]
                       font-semibold">

                FoodOrder

            </h1>

        </div>

        {{-- MENU --}}
        <div class="flex gap-16">

            <a href="home"
               class="text-gray-500
                      text-[28px]
                      font-medium">

                Beranda

            </a>

            <a href="/history"
               class="text-gray-500
                      text-[28px]
                      font-medium">

                Pesanan Saya

            </a>

        </div>

    </div>

    {{-- RIGHT --}}
    <div class="flex items-center gap-5">

        <div class="border
                    border-[#8BC48B]
                    rounded-full
                    px-6
                    py-3
                    w-[420px]
                    flex
                    items-center">

            <span class="text-green-600 text-xl">
                🔍
            </span>

            <input
                type="text"
                class="ml-3
                       outline-none
                       w-full"
            >

        </div>

        <div class="w-[50px]
                    h-[50px]
                    rounded-full
                    bg-[#EAE6DF]
                    flex
                    items-center
                    justify-center
                    text-gray-500
                    text-[24px]">

            A

        </div>

    </div>

</nav>

@yield('content')

</body>
</html>