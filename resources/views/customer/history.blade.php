@extends('layouts.customer')

@section('content')

<div class="bg-[#F5F5F5]
            min-h-screen
            px-10
            py-8">

    {{-- TITLE --}}
    <h1 class="text-[48px]
               font-bold
               mb-10">

        Riwayat

    </h1>

    {{-- ======================= --}}
    {{-- RIWAYAT KOSONG --}}
    {{-- ======================= --}}

    {{-- 
        UBAH true jadi false
        kalau mau tampil riwayat ada
    --}}

    @if (true)

    <div class="flex
                flex-col
                items-center
                justify-center
                mt-16">

        {{-- IMAGE --}}
        <img
            src="https://cdn-icons-png.flaticon.com/512/706/706164.png"
            class="w-[420px]"
        >

        {{-- TEXT --}}
        <h2 class="text-[42px]
                   font-bold
                   mt-10">

            Yuk buat pesanan pertama kalinya

        </h2>

        {{-- BUTTON --}}
        <button
            class="bg-[#7BC488]
                   hover:bg-[#66B474]
                   transition
                   text-white
                   text-[24px]
                   font-semibold
                   px-24
                   py-4
                   rounded-[10px]
                   mt-10"
            onclick="window.location.href='/pilih-resto'">

            Eksplor Resto

        </button>

    </div>

    @else

    {{-- ======================= --}}
    {{-- RIWAYAT ADA --}}
    {{-- ======================= --}}

    <div class="bg-white
                rounded-[14px]
                shadow-md
                p-6
                flex
                justify-between
                items-center">

        {{-- LEFT --}}
        <div class="flex gap-5 items-center">

            {{-- LOGO --}}
            <img
                src="https://upload.wikimedia.org/wikipedia/id/thumb/5/5f/KFC_logo.svg/1200px-KFC_logo.svg.png"
                class="w-[90px]
                       h-[90px]
                       rounded-full
                       object-cover"
            >

            {{-- TEXT --}}
            <div>

                <p class="text-gray-500
                          text-[18px]">

                    Hari ini, 20:26

                </p>

                <h2 class="text-[30px]
                           font-bold
                           mt-1">

                    KFC

                </h2>

                <p class="text-gray-600
                          text-[18px]">

                    Makanan sudah sampai

                </p>

                <p class="text-gray-700
                          text-[18px]">

                    Burger Duo

                </p>

            </div>

        </div>

        {{-- PRICE --}}
        <div>

            <h2 class="text-[24px]
                       font-semibold">

                Rp 56.700,00

            </h2>

        </div>

    </div>

    @endif

</div>

@endsection