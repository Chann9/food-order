<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodOrder</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#f5f5f5] overflow-x-hidden">

    <!-- NAVBAR -->
    <nav class="w-full bg-white shadow-sm px-10 py-5 flex items-center justify-between">

        <!-- LOGO -->
        <div class="flex items-center gap-4">

            <div class="w-14 h-14 bg-red-900 rounded-full flex items-center justify-center text-white text-2xl">
                ☕
            </div>

            <h1 class="text-4xl font-bold text-red-900">
                FoodOrder
            </h1>

        </div>

        <!-- MENU -->
        <div class="flex items-center gap-20 text-3xl font-semibold text-gray-600">

            <a href="home" class="hover:text-red-900 transition">
                Beranda
            </a>

            <a href="history" class="hover:text-red-900 transition">
                Pesanan Saya
            </a>

        </div>

        <!-- SEARCH -->
        <div class="flex items-center gap-6">

            <div class="relative">

                <input 
                    type="text"
                    placeholder=""
                    class="w-[350px] h-14 rounded-full border border-green-300 px-14 text-xl outline-none"
                >

                <span class="absolute left-5 top-3 text-2xl text-green-700">
                    🔍
                </span>

            </div>

            <!-- PROFILE -->
            <div class="w-14 h-14 rounded-full bg-gray-200 flex items-center justify-center text-2xl font-bold text-gray-600">
                A
            </div>

        </div>

    </nav>

    <!-- HERO -->
    <section class="relative mx-8 mt-6 bg-[#dce5d7] rounded-3xl h-[370px] overflow-hidden">

        <!-- LEFT IMAGE -->
        <img 
            src="{{ asset('images/mie-ayam.jpeg') }}"
            alt="Mie Ayam"
            class="absolute left-0 top-5 w-[260px] object-contain"
        >

        <!-- RIGHT IMAGE -->
        <img 
            src="{{ asset('images/sate.jpeg') }}"
            alt="Sate"
            class="absolute right-0 top-0 w-[280px] object-contain"
        >

        <!-- BOTTOM IMAGE -->
        <img 
            src="{{ asset('images/cendol.jpeg') }}"
            alt="Cendol"
            class="absolute left-[180px] bottom-0 w-[120px] object-contain"
        >

        <!-- SMALL NASGOR -->
        <img 
            src="{{ asset('images/nasi-goreng.jpeg') }}"
            alt="Nasgor"
            class="absolute right-[260px] bottom-5 w-[140px] rounded-full object-cover"
        >

        <!-- TEXT -->
        <div class="flex flex-col items-center justify-center h-full">

            <h1 class="text-6xl font-bold text-red-900 mb-6">
                Makan Enak?! FoodOrder Aja
            </h1>

            <p class="text-center text-red-800 text-2xl leading-relaxed">
                Pesan makanan yang bikin perut nyaman dengan mudah dan cepat.
                <br>
                Banyak pilihan restonya
            </p>

        </div>

    </section>

    <!-- LOCATION CARD -->
    <div class="w-full flex justify-center -mt-8 relative z-10">

        <div class="bg-white w-[650px] rounded-3xl shadow-xl p-10">

            <h2 class="text-center text-4xl font-semibold text-gray-600 mb-8">
                Lokasi Saya
            </h2>

            <div class="flex items-center gap-4">

                <!-- SELECT -->
                <div class="flex items-center justify-between border border-gray-300 rounded-full px-6 py-4 flex-1">

                    <div class="flex items-center gap-4">

                        <span class="text-red-700 text-2xl">
                            📍
                        </span>

                        <span class="text-2xl text-gray-700">
                            Jakarta
                        </span>

                    </div>

                    <span class="text-green-600 text-2xl">
                        ˅
                    </span>

                </div>

                <!-- BUTTON -->
                <button class="bg-green-500 hover:bg-green-600 transition-all duration-300 text-white text-2xl font-bold px-8 py-4 rounded-full"
                onclick="window.location.href='/pilih-resto'"
                >
                    Konfirmasi
                </button>

            </div>

        </div>

    </div>

</body>
</html>