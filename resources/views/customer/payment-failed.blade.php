@extends('layouts.customer')

@section('content')

<div class="bg-[#F5F5F5]
            min-h-screen
            flex
            flex-col
            items-center
            pt-24">

    {{-- ICON --}}
    <div class="w-[150px]
                h-[150px]
                rounded-full
                bg-[#B40000]
                flex
                items-center
                justify-center
                text-white
                text-[80px]">

        ✕

    </div>

    {{-- TITLE --}}
    <h1 class="text-[48px]
               font-bold
               mt-10">

        Pembayaran Gagal

    </h1>

    {{-- BUTTON --}}
    <div class="flex gap-6 mt-16">

        <button
            class="bg-white
                   border
                   shadow-md
                   px-12
                   py-4
                   rounded-[8px]
                   text-[20px]
                   hover:bg-gray-100
                   transition"
            onclick="window.location.href='/history'">

            Lihat Pesanan Saya

        </button>

        <button
            class="bg-white
                   border
                   shadow-md
                   px-12
                   py-4
                   rounded-[8px]
                   text-[20px]
                   hover:bg-gray-100
                   transition"
            onclick="window.location.href='/home'">

            Kembali Ke Beranda

        </button>

    </div>

</div>

@endsection