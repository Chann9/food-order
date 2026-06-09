@extends('layouts.customer')

@section('content')

<div class="p-8">

    {{-- RESTO INFO --}}
    <div class="flex gap-6 items-start">

        <img
            src="https://upload.wikimedia.org/wikipedia/id/thumb/5/5f/KFC_logo.svg/1200px-KFC_logo.svg.png"
            class="w-[130px]
                   h-[130px]
                   shadow-md"
        >

        <div>

            <h1 class="text-[42px]
                       font-bold">

                KFC

            </h1>

            <p class="text-gray-500 text-[18px]">
                cepat saji, jajanan
            </p>

            <div class="flex gap-12 mt-5">

                <div>
                    <p class="text-gray-400 text-[16px]">
                        0.5 km
                    </p>

                    <p class="text-[#980000] text-[18px]">
                        Jarak
                    </p>
                </div>

                <div>
                    <p class="text-gray-400 text-[16px]">
                        ★ 0.5 km
                    </p>

                    <p class="text-[#980000] text-[18px]">
                        Ulasan
                    </p>
                </div>

                <div>
                    <p class="text-gray-400 text-[16px]">
                        12rb-150rb
                    </p>

                    <p class="text-[#980000] text-[18px]">
                        $$$
                    </p>
                </div>

            </div>

        </div>

    </div>

    {{-- MENU --}}
    <div class="grid grid-cols-4 gap-10 mt-10">

        @php

        $menus = [
            'Burger Duo',
            'Petook',
            'Petook Duo',
            'Reward akhir....',
            'Big Treat 1',
            'Big Treat 2',
            'Reward akhir....'
        ];

        @endphp

        @foreach ($menus as $menu)

        <div class="bg-white
                    rounded-[24px]
                    shadow-md
                    p-5">

            <h2 class="text-center
                       text-[#980000]
                       text-[30px]
                       mb-5">

                {{ $menu }}

            </h2>

            <img
                src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?q=80&w=1200"
                class="w-full
                       h-[180px]
                       object-cover
                       rounded-[14px]
                       border"
            >

            {{-- BUTTON --}}
            <div class="flex mt-6">

                <button
                    class="bg-[#B32020]
                           text-white
                           w-[70px]
                           rounded-l-full
                           text-[24px]">

                    -

                </button>

                <div class="border-t
                            border-b
                            w-full
                            flex
                            items-center
                            justify-center
                            text-[24px]">

                    0

                </div>

                <button
                    class="bg-[#B32020]
                           text-white
                           w-[70px]
                           rounded-r-full
                           text-[24px]">

                    +

                </button>

            </div>

        </div>

        @endforeach

    </div>

    {{-- BUTTON --}}
    <div class="flex flex-col items-end gap-5 mt-10">

        <button
            class="bg-[#7BC488]
                   text-white
                   text-[24px]
                   px-10
                   py-3
                   rounded-[14px]">

            Keranjang

        </button>

        <button
            class="bg-[#7BC488]
                   text-white
                   text-[24px]
                   px-10
                   py-3
                   rounded-[14px]">

            ← Kembali

        </button>

    </div>

</div>

@endsection