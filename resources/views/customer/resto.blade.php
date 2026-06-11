@extends('layouts.customer')

@section('content')

<div class="px-10 py-10">

    <!-- HEADER -->
    <div class="flex justify-between items-start">

    </div>

    <!-- HERO -->
    <section class="relative mt-10 bg-[#dce5d7] rounded-[30px] h-[340px] overflow-hidden">

        <!-- LEFT IMAGE -->
        <img 
            src="{{ asset('images/mie-ayam.jpeg') }}"
            alt="Mie Ayam"
            class="absolute left-0 top-5 w-[240px] object-contain"
        >

        <!-- RIGHT IMAGE -->
        <img 
            src="{{ asset('images/sate.jpeg') }}"
            alt="Sate"
            class="absolute right-0 top-0 w-[260px] object-contain"
        >

        <!-- CENDOL -->
        <img 
            src="{{ asset('images/cendol.png') }}"
            alt="Cendol"
            class="absolute left-[190px] bottom-0 w-[110px] object-contain"
        >

        <!-- NASGOR -->
        <img 
            src="{{ asset('images/nasi-goreng.jpeg') }}"
            alt="Nasgor"
            class="absolute right-[220px] bottom-5 w-[120px] rounded-full object-cover"
        >

        <!-- TEXT -->
        <div class="flex flex-col items-center justify-center h-full">

            <h1 class="text-[55px] font-bold text-[#980000]">
                Makan Enak?! FoodOrder Aja
            </h1>

            <p class="text-center text-[#980000] text-[24px] leading-relaxed mt-3">
                Pesan makanan yang bikin perut nyaman dengan mudah dan cepat.
                <br>
                Banyak pilihan restonya
            </p>

        </div>

    </section>

    <!-- LOCATION -->
    <div class="w-full flex justify-center -mt-10 relative z-10">

        <div class="bg-[#f8f8f8]
                    shadow-lg
                    rounded-[25px]
                    w-[600px]
                    p-10">

            <h2 class="text-center text-[36px] font-semibold text-gray-600 mb-8">
                Lokasi Saya
            </h2>

            <div class="flex items-center gap-4">

                <!-- LOCATION SELECT -->
                <div class="flex items-center justify-between
                            border border-[#8BC48B]
                            rounded-full
                            px-6
                            py-4
                            flex-1">

                    <div class="flex items-center gap-3">

                        <span class="text-[#980000] text-xl">
                            📍
                        </span>

                        <span class="text-[24px] text-gray-600">
                            Jakarta
                        </span>

                    </div>

                    <span class="text-green-500 text-xl">
                        ˅
                    </span>

                </div>

                <!-- BUTTON -->
                <button
                    class="bg-[#7AC37A]
                           hover:bg-[#67b567]
                           transition
                           text-white
                           text-[22px]
                           font-semibold
                           px-7
                           py-4
                           rounded-full">

                    Konfirmasi

                </button>

            </div>

        </div>

    </div>

    <!-- RESTO -->
    <div class="grid grid-cols-4 gap-y-16 gap-x-10 mt-20">

        @php
            $restos = [
                [
                    'nama' => 'KFC',
                    'gambar' => asset('images/kfc.jpeg'),
                    'link' => '/menu-page'
                ],
                [
                    'nama' => 'KFC',
                    'gambar' => asset('images/kfc.jpeg'),
                    'link' => '/menu-page'
                ],
                [
                    'nama' => 'KFC',
                    'gambar' => asset('images/kfc.jpeg'),
                    'link' => '/menu-page'
                ],
                [
                    'nama' => 'KFC',
                    'gambar' => asset('images/kfc.jpeg'),
                    'link' => '/menu-page'
                ],
                [
                    'nama' => 'KFC',
                    'gambar' => asset('images/kfc.jpeg'),
                    'link' => '/menu-page'
                ],
                [
                    'nama' => 'KFC',
                    'gambar' => asset('images/kfc.jpeg'),
                    'link' => '/menu-page'
                ],
            ];
        @endphp

        @foreach ($restos as $resto)

        <a href="{{ $resto['link'] }}">

            <div>

                <div class="bg-white
                            shadow-md
                            p-4
                            w-[230px]
                            h-[230px]
                            flex
                            items-center
                            justify-center
                            hover:scale-105
                            duration-300">

                    <img
                        src="{{ $resto['gambar'] }}"
                        class="w-full h-full object-cover"
                    >

                </div>

                <h2 class="text-[34px]
                           text-[#980000]
                           mt-3">

                    {{ $resto['nama'] }}

                </h2>

                <p class="text-gray-500 text-[18px]">
                    cepat saji, jajanan
                </p>

                <p class="text-gray-500 text-[18px] flex items-center gap-2">
                    📍 0.5 km
                </p>

            </div>

        </a>

        @endforeach

    </div>

    <!-- BUTTON KEMBALI -->
    <div class="flex justify-end mt-16">

        <button
            onclick="window.location.href='/home'"
            class="bg-[#7AC37A]
                   hover:bg-[#67b567]
                   transition
                   text-white
                   text-[22px]
                   px-8
                   py-3
                   rounded-[18px]
                   shadow-md">

            &lt; Kembali

        </button>

    </div>

</div>

@endsection