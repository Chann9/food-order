@foreach ($menus as $menu)

<div class="bg-white
            rounded-[24px]
            shadow-md
            p-5">

    <h2 class="text-center
               text-[#980000]
               text-[30px]
               mb-5">

        {{ $menu->nama_menu }}

    </h2>

    {{-- IMAGE --}}
    <img
        src="{{ $gambarMenu[$menu->nama_menu] ?? 'https://via.placeholder.com/300' }}"
        class="w-full
               h-[180px]
               object-cover
               rounded-[14px]">

    {{-- PRICE --}}
    <div class="mt-4 text-center">

        <p class="text-[24px]
                  font-semibold">

            Rp {{ number_format($menu->harga) }}

        </p>

    </div>

    {{-- BUTTON --}}
    <div class="flex mt-6">

        <button class="bg-[#B32020]
                       text-white
                       w-[70px]
                       rounded-l-full">

            -

        </button>

        <div class="border
                    w-full
                    flex
                    items-center
                    justify-center">

            0

        </div>

        <button class="bg-[#B32020]
                       text-white
                       w-[70px]
                       rounded-r-full">

            +

        </button>

    </div>

</div>

@endforeach