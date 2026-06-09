<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    @vite('resources/css/app.css')

    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
          rel="stylesheet">

    <title>Call Center</title>
</head>

<body class="bg-black
             flex
             items-center
             justify-center
             h-screen
             font-[Poppins]">

<div class="w-[1600px]
            h-[900px]
            bg-white
            relative
            overflow-hidden">

    {{-- TOP PATTERN --}}
    <div class="h-[110px]
                bg-[#F4F4F4]
                border-b">

    </div>

    {{-- BOTTOM PATTERN --}}
    <div class="absolute
                bottom-0
                left-0
                w-full
                h-[110px]
                bg-[#F4F4F4]
                border-t">

    </div>

    {{-- CONTENT --}}
    <div class="flex
                items-center
                justify-center
                gap-28
                h-full
                px-20">

        {{-- TEXT --}}
        <div>

            <h1 class="text-[#980000]
                       text-[64px]
                       font-bold">

                Pusat Layanan

            </h1>

            <div class="mt-10">

                <p class="text-gray-400
                          text-[28px]
                          font-semibold">

                    WhatsApp

                </p>

                <p class="text-[#980000]
                          text-[34px]
                          font-semibold
                          mt-2">

                    +62 812 3456 719

                </p>

            </div>

            <div class="mt-10">

                <p class="text-gray-400
                          text-[28px]
                          font-semibold">

                    Email

                </p>

                <p class="text-[#980000]
                          text-[34px]
                          font-semibold
                          mt-2">

                    foor@gmail.com

                </p>

            </div>

        </div>

        {{-- IMAGE --}}
        <img
            src="https://cdn-icons-png.flaticon.com/512/8637/8637099.png"
            class="w-[650px]"
        >

    </div>

    {{-- BUTTON --}}
    <button
        class="absolute
               right-16
               bottom-16
               bg-[#980000]
               text-white
               text-[28px]
               px-10
               py-4
               rounded-[18px]">

        ← Kembali

    </button>

</div>

</body>
</html>