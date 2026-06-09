@extends('layouts.customer')

@section('content')

<div class="bg-[#F5F5F5]
            min-h-screen
            flex
            flex-col
            items-center
            pt-24">

    {{-- QR ICON --}}
    <div class="text-[180px]
                leading-none">

        ⌗

    </div>

    {{-- TITLE --}}
    <h1 class="text-[48px]
               font-bold
               mt-10">

        Menunggu Pembayaran....

    </h1>

    {{-- BUTTON --}}
    <div class="flex gap-6 mt-16">

        <button
            class="bg-white
                   shadow-md
                   border
                   px-12
                   py-4
                   rounded-[8px]
                   text-[22px]
                   hover:bg-gray-100
                   transition">

            Lihat Pesanan Saya

        </button>

        <button
            class="bg-white
                   shadow-md
                   border
                   px-12
                   py-4
                   rounded-[8px]
                   text-[22px]
                   hover:bg-gray-100
                   transition">

            Kembali Ke Beranda

        </button>

    </div>

</div>

@endsection