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

    <title>Call Center</title>

</head>

<body class="bg-black font-[Poppins] overflow-hidden">

<div class="w-full
            h-screen
            flex
            items-center
            justify-center">

    <div class="w-[95%]
                h-[92vh]
                bg-white
                rounded-[10px]
                overflow-hidden
                relative">

        {{-- TOP PATTERN --}}
        <div class="h-[90px]
                    bg-[#F2F5EF]
                    border-b
                    flex
                    items-center
                    justify-center">

            <div class="text-[40px] opacity-40">
                🥬 🥕 🍆 🥦 🌽 🥒 🥗
            </div>

        </div>

        {{-- CONTENT --}}
        <div class="flex
                    items-center
                    justify-center
                    h-[calc(100%-180px)]">

            {{-- LEFT --}}
            <div class="w-1/2 pl-24">

                <h1 class="text-[#980000]
                           text-[64px]
                           font-bold">

                    Pusat Layanan

                </h1>

                <div class="mt-10">

                    <p class="text-gray-400
                              text-[24px]">

                        WhatsApp

                    </p>

                    <p class="text-[#980000]
                              text-[30px]
                              font-semibold
                              mt-2">

                        +62 812 3456 719

                    </p>

                </div>

                <div class="mt-10">

                    <p class="text-gray-400
                              text-[24px]">

                        Email

                    </p>

                    <p class="text-[#980000]
                              text-[30px]
                              font-semibold
                              mt-2">

                        foor@gmail.com

                    </p>

                </div>

            </div>

            {{-- RIGHT --}}
            <div class="w-1/2 flex justify-center">

                <img
                    src="https://cdn-icons-png.flaticon.com/512/1046/1046784.png"
                    class="w-[520px]">

            </div>

        </div>

        {{-- BUTTON --}}
        <div class="absolute
                    bottom-16
                    right-16">

            <a href="/login-page"
               class="bg-[#980000]
                      text-white
                      text-[28px]
                      px-10
                      py-4
                      rounded-[16px]
                      hover:bg-[#7A0000]
                      transition">

                ← Kembali

            </a>

        </div>

        {{-- BOTTOM PATTERN --}}
        <div class="absolute
                    bottom-0
                    w-full
                    h-[90px]
                    bg-[#F2F5EF]
                    border-t
                    flex
                    items-center
                    justify-center">

            <div class="text-[40px] opacity-40">
                🥬 🥕 🍆 🥦 🌽 🥒 🥗
            </div>

        </div>

    </div>

</div>

</body>
</html>