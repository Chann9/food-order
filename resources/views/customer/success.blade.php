@extends('layouts.customer')

@section('content')

<div class="bg-[#F5F5F5]
            min-h-screen
            flex
            flex-col
            items-center
            pt-24">

    {{-- ICON --}}
    <div class="w-[130px]
                h-[130px]
                rounded-full
                bg-[#5B8F35]
                flex
                items-center
                justify-center
                text-white
                text-[70px]
                shadow-md">

        ✓

    </div>

    {{-- TITLE --}}
    <h1 class="text-[48px]
               font-bold
               mt-10">

        Pesanan Berhasil !

    </h1>

    {{-- DESCRIPTION --}}
    <p class="text-center
              text-[24px]
              text-gray-700
              mt-6
              leading-relaxed">

        Terima kasih, pesanan anda telah diterima.
        <br>
        Kami akan segera menyiapkannya

    </p>

    {{-- ORDER CARD --}}
    <div class="bg-white
                shadow-md
                rounded-[12px]
                px-20
                py-10
                mt-10
                text-center">

        <p class="text-[24px]
                  text-gray-600">

            Nomor Pesanan

        </p>

        <h2 class="text-[46px]
                   font-bold
                   mt-2">

            F-3210841532

        </h2>

        <p class="text-[22px]
                  text-gray-500
                  mt-3">

            30 April 2026 - 15.30

        </p>

    </div>

    {{-- BUTTON --}}
    <div class="flex gap-6 mt-12">

        <button
            class="border
                   border-black
                   px-12
                   py-4
                   rounded-[6px]
                   text-[22px]
                   hover:bg-gray-100
                   transition"
            onclick="window.location.href='/history'">
                   

            Lihat Pesanan Saya

        </button>

        <button
            class="border
                   border-black
                   px-12
                   py-4
                   rounded-[6px]
                   text-[22px]
                   hover:bg-gray-100
                   transition"
            onclick="window.location.href='/home'">

            Kembali Ke Beranda

        </button>

    </div>

</div>

@endsection