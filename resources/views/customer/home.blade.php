@extends('layouts.customer')

@section('content')

<div class="px-8 py-6 bg-[#F5F5F5] min-h-screen">

    {{-- HERO --}}
    <section class="relative
                    bg-[#DDE7D8]
                    rounded-[18px]
                    h-[290px]
                    overflow-hidden">

        <img
            src="https://images.unsplash.com/photo-1512058564366-18510be2db19?q=80&w=1200"
            class="absolute left-0 top-[10px] w-[220px] rounded-full">

        <img
            src="https://images.unsplash.com/photo-1529563021893-cc83c992d75d?q=80&w=1200"
            class="absolute right-0 top-[0px] w-[250px] rounded-full">

        <div class="flex
                    flex-col
                    items-center
                    justify-center
                    h-full">

            <h1 class="text-[54px]
                       font-bold
                       text-[#980000]">

                Makan Enak?! FoodOrder Aja

            </h1>

            <p class="text-[#980000]
                      text-[20px]
                      mt-2">

                Pesan makanan yang bikin perut nyaman
                dengan mudah dan cepat.

            </p>

        </div>

    </section>

    {{-- LOCATION --}}
    <div class="bg-white
                w-[520px]
                mx-auto
                rounded-[20px]
                shadow-md
                p-8
                -mt-12
                relative
                z-10">

        <h2 class="text-center
                   text-[34px]
                   font-medium
                   text-gray-600">

            Lokasi Saya

        </h2>

        <div class="flex gap-4 mt-6">

            <div class="flex
                        items-center
                        border
                        rounded-full
                        px-5
                        py-3
                        flex-1">

                📍 Jakarta

            </div>

            <a href="/resto"
               class="bg-[#7BC488]
                      text-white
                      px-8
                      rounded-full
                      flex
                      items-center">

                Konfirmasi

            </a>

        </div>

    </div>

</div>

@endsection