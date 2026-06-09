@extends('layouts.customer')

@section('content')

<div class="px-8 py-6 bg-[#F5F5F5] min-h-screen">

    {{-- HERO --}}
    <section class="relative
                    bg-[#DDE7D8]
                    rounded-[18px]
                    h-[290px]
                    overflow-hidden">

        {{-- LEFT FOOD --}}
        <img
            src="https://images.unsplash.com/photo-1512058564366-18510be2db19?q=80&w=1200"
            class="absolute
                   left-0
                   top-[10px]
                   w-[220px]
                   rounded-full
                   object-cover"
        >

        {{-- RIGHT FOOD --}}
        <img
            src="https://images.unsplash.com/photo-1529563021893-cc83c992d75d?q=80&w=1200"
            class="absolute
                   right-0
                   top-[0px]
                   w-[250px]
                   rounded-full
                   object-cover"
        >

        {{-- DRINK --}}
        <img
            src="https://images.unsplash.com/photo-1513558161293-cdaf765ed2fd?q=80&w=1200"
            class="absolute
                   left-[150px]
                   bottom-0
                   w-[120px]"
        >

        {{-- SMALL FOOD --}}
        <img
            src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?q=80&w=1200"
            class="absolute
                   right-[260px]
                   bottom-[10px]
                   w-[120px]
                   rounded-full"
        >

        {{-- TEXT --}}
        <div class="flex
                    flex-col
                    items-center
                    justify-center
                    h-full">

            <h1 class="text-[54px]
                       font-bold
                       text-[#980000]
                       leading-tight">

                Makan Enak?! FoodOrder Aja

            </h1>

            <p class="text-[#980000]
                      text-[20px]
                      mt-2
                      text-center">

                Pesan makanan yang bikin perut nyaman
                dengan mudah dan cepat.

            </p>

            <p class="text-[#980000]
                      text-[18px]
                      mt-1">

                Banyak pilihan restonya

            </p>

        </div>

    </section>

    {{-- LOCATION CARD --}}
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
                        border-[#B7DAB7]
                        rounded-full
                        px-5
                        py-3
                        flex-1">

                <span class="text-red-700 text-xl">
                    📍
                </span>

                <select
                    class="ml-3
                           outline-none
                           flex-1
                           text-gray-600
                           text-[18px]">

                    <option>Jakarta</option>
                    <option>Bandung</option>

                </select>

            </div>

            <button
                class="bg-[#7BC488]
                       hover:bg-[#66B474]
                       transition
                       text-white
                       text-[18px]
                       px-8
                       rounded-full
                       font-medium">

                Konfirmasi

            </button>

        </div>

    </div>

    {{-- RESTAURANT --}}
    <section class="mt-16">

        <div class="grid grid-cols-5 gap-8">

            {{-- CARD --}}
            @for ($i = 0; $i < 5; $i++)

            <div>

                <div class="bg-white
                            shadow-md
                            rounded-[8px]
                            p-2
                            w-[170px]
                            h-[170px]
                            flex
                            items-center
                            justify-center">

                    <img
                        src="https://upload.wikimedia.org/wikipedia/id/thumb/5/5f/KFC_logo.svg/1200px-KFC_logo.svg.png"
                        class="w-full h-full object-cover"
                    >

                </div>

                <h2 class="font-bold
                           text-[36px]
                           mt-3
                           leading-none">

                    KFC

                </h2>

                <p class="text-gray-500
                          text-[18px]
                          mt-1">

                    cepat saji, jajanan

                </p>

                <p class="text-gray-400
                          text-[16px]
                          mt-1">

                    📍 0.5 km

                </p>

            </div>

            @endfor

        </div>

    </section>

    {{-- BUTTON --}}
    <div class="flex justify-end mt-10">

        <button
            class="bg-[#7BC488]
                   hover:bg-[#67B274]
                   transition
                   text-white
                   text-[24px]
                   px-10
                   py-3
                   rounded-[16px]">

            ← Kembali

        </button>

    </div>

</div>

@endsection