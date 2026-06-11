
@extends('layouts.customer')

@section('content')

<div class="p-8">

    <h1 class="text-[42px] font-bold mb-8">
        Menu
    </h1>

    <div class="grid grid-cols-4 gap-10">

        @for ($i = 0; $i < 8; $i++)

        <div class="bg-white
                    rounded-[24px]
                    shadow-md
                    p-5">

            <h2 class="text-center
                       text-[#980000]
                       text-[30px]
                       mb-5">

                Burger Duo

            </h2>

            <img
                src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?q=80&w=1200"
                class="w-full
                       h-[180px]
                       object-cover
                       rounded-[14px]">

            <div class="flex mt-6">

                <button class="bg-[#B32020] text-white w-[70px] rounded-l-full">
                    -
                </button>

                <div class="border w-full flex items-center justify-center">
                    0
                </div>

                <button class="bg-[#B32020] text-white w-[70px] rounded-r-full">
                    +
                </button>

            </div>

        </div>

        @endfor

    </div>

    <div class="flex justify-end mt-10">

        <a href="/cart"
           class="bg-[#7BC488]
                  text-white
                  text-[24px]
                  px-10
                  py-3
                  rounded-[14px]">

            Keranjang

        </a>

    </div>

</div>

@endsection