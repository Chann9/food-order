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

    {{-- BERHASIL --}}
    <a href="/payment-success"
       class="bg-white
              shadow-md
              border
              px-12
              py-4
              rounded-[8px]
              text-[22px]
              hover:bg-[#7BC488]
              hover:text-white
              transition">

        Pembayaran Berhasil

    </a>

    {{-- GAGAL --}}
    <a href="/payment-failed"
       class="bg-white
              shadow-md
              border
              px-12
              py-4
              rounded-[8px]
              text-[22px]
              hover:bg-red-500
              hover:text-white
              transition">

        Pembayaran Gagal

    </a>

</div>

</div>

@endsection