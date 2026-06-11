@extends('layouts.customer')

@section('content')

<div class="p-8">

    <!-- RESTO INFO -->
    <div class="flex items-start gap-16 mb-14">

        <!-- IMAGE -->
        <img
            src="{{ asset('images/kfc.jpeg') }}"
            class="w-[320px]
                   h-[320px]
                   object-cover
                   shadow-lg"
        >

        <!-- DETAIL -->
        <div class="pt-5">

            <h1 class="text-[64px] font-bold leading-none">
                KFC
            </h1>

            <p class="text-gray-500 text-[28px] mt-5">
                cepat saji, jajanan
            </p>

            <!-- INFO -->
<div class="flex items-start gap-12 mt-12">

    <!-- JARAK -->
    <div>
        <div class="flex items-center gap-4">
            <span class="text-[28px] text-gray-500">
                0.5 km
            </span>
        </div>
        <h3 class="text-[#980000]
                   text-[28px]
                   font-semibold
                   mt-2">
            📍 Jarak
        </h3>
    </div>

    <!-- ULASAN -->
    <div>
        <div class="flex items-center gap-3">
            <span class="text-[28px] text-gray-500">
                0.5 km
            </span>
        </div>
        <h3 class="text-[#980000]
                   text-[28px]
                   font-semibold
                   mt-2">
            ★ Ulasan
        </h3>
    </div>

    <!-- HARGA -->
    <div>
        <div class="flex items-center gap-3">
            <span class="text-[28px] text-gray-500">
                28rb - 150rb
            </span>
        </div>
        <h3 class="text-[#980000]
                   text-[28px]
                   font-semibold">
            $$$
        </h3>
    </div>
</div>

        </div>

    </div>

    <!-- MENU -->
<div class="grid grid-cols-4 gap-10 ">

    @php
        $menus = [
            [
                'nama' => 'Burger Duo',
                'gambar' => asset('images/burgerduo.jpeg')
            ],
            [
                'nama' => 'Petook',
                'gambar' => asset('images/petook.jpeg')
            ],
            [
                'nama' => 'Petook Duo',
                'gambar' => asset('images/petookduo.jpeg')
            ],
            [
                'nama' => 'Reward akhir 1',
                'gambar' => asset('images/rewardakhir1.jpeg')
            ],
            [
                'nama' => 'Big Treat 1',
                'gambar' => asset('images/bigtreat1.jpeg')
            ],
            [
                'nama' => 'Big Treat 2',
                'gambar' => asset('images/bigtreat2.jpeg')
            ],
            [
                'nama' => 'Reward akhir 2',
                'gambar' => asset('images/rewardakhir2.jpeg')
            ],
        ];
    @endphp

    @foreach ($menus as $menu)

    <div class="bg-white
                rounded-[28px]
                shadow-md
                p-6
                w-[250px]
                border
                border-gray-200">

        <!-- TITLE -->
        <h2 class="text-center
                   text-[#980000]
                   text-[28px]
                   font-medium
                   mb-4
                   whitespace-nowrap
                   overflow-hidden
                   text-ellipsis">

            {{ $menu['nama'] }}

        </h2>

        <!-- IMAGE BOX -->
        <div class="rounded-[18px]
            h-[220px]
            flex
            items-center
            justify-center
            overflow-hidden">

            <img
                src="{{ $menu['gambar'] }}"
                class="w-[170px]
                       h-[170px]
                       object-contain"
            >

        </div>

        <!-- QTY -->
        <div class="flex mt-7">

            <!-- MINUS -->
            <button class="bg-[#B32020]
                           text-white
                           w-[70px]
                           h-[45px]
                           rounded-l-full
                           text-[30px]
                           font-bold">

                -

            </button>

            <!-- COUNT -->
            <div class="border-y
                        border-black
                        w-full
                        h-[45px]
                        flex
                        items-center
                        justify-center
                        text-[28px]
                        font-semibold">

                0

            </div>

            <!-- PLUS -->
            <button class="bg-[#B32020]
                           text-white
                           w-[70px]
                           h-[45px]
                           rounded-r-full
                           text-[30px]
                           font-bold">

                +

            </button>

        </div>

    </div>

    @endforeach

</div>

    <!-- BUTTON -->
    <div class="flex flex-col items-end gap-5 mt-12">

        <a href="/cart"
           class="bg-[#7BC488]
                  text-white
                  text-[24px]
                  px-10
                  py-3
                  rounded-[14px]">

            Keranjang

        </a>

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