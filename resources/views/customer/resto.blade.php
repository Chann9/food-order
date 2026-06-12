@extends('layouts.customer')

@section('content')

<div class="px-10 py-10">

    <!-- HERO -->
    <section class="relative
                    mt-10
                    h-[370px]
                    rounded-[30px]
                    overflow-hidden">

        <!-- HERO IMAGE -->
        <img 
            src="{{ asset('images/frame.png') }}"
            alt="Hero"
            class="w-full
                   h-full
                   object-cover"
        >

    </section>

    <!-- LOCATION -->
    <div class="w-full
                flex
                justify-center
                -mt-10
                relative
                z-10">

        <div class="bg-[#f8f8f8]
                    shadow-lg
                    rounded-[25px]
                    w-[650px]
                    p-10">

            <h2 class="text-center
                       text-[36px]
                       font-semibold
                       text-gray-600
                       mb-8">

                Lokasi Saya

            </h2>

            <div class="flex items-center gap-4">

                <!-- LOCATION SELECT -->
                <div class="flex
                            items-center
                            justify-between
                            border
                            border-[#8BC48B]
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
    <div class="grid
                grid-cols-4
                gap-y-16
                gap-x-10
                mt-20">

        @foreach ($restos as $resto)

        <a href="/menu-page">

            <div>

                <!-- CARD IMAGE -->
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
                        src="{{ asset($resto->gambar) }}"
                        class="w-full
                               h-full
                               object-cover"
                    >

                </div>

                <!-- NAMA -->
                <h2 class="text-[34px]
                           text-[#980000]
                           mt-3">

                    {{ $resto->nama }}

                </h2>

                <!-- KATEGORI -->
                <p class="text-gray-500 text-[18px]">

                    {{ $resto->kategori }}

                </p>

                <!-- JARAK -->
                <p class="text-gray-500
                          text-[18px]
                          flex
                          items-center
                          gap-2">

                    📍 {{ $resto->jarak }}

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