@extends('layouts.customer-sidebar')

@section('content')

<div class="flex justify-between items-start">

    <div>

        <h1 class="text-[42px] font-semibold">
            Menu
        </h1>

        <p class="text-gray-500 text-[20px]">
            Pilih resto
        </p>

    </div>

    <button
        class="border
               border-gray-400
               px-5
               py-2
               rounded
               text-[18px]">

        ← Kembali

    </button>

</div>

{{-- RESTO --}}
<div class="grid grid-cols-4 gap-10 mt-10">

    {{-- CARD --}}
    @php
        $restos = [
            [
                'nama' => 'KFC',
                'gambar' => 'https://upload.wikimedia.org/wikipedia/id/thumb/5/5f/KFC_logo.svg/1200px-KFC_logo.svg.png'
            ],
            [
                'nama' => 'Tuno',
                'gambar' => 'https://dummyimage.com/200x200/f39c12/ffffff&text=TUNO'
            ],
            [
                'nama' => 'Mauu',
                'gambar' => 'https://dummyimage.com/200x200/ffffff/1e40af&text=Mauu'
            ],
            [
                'nama' => 'Queen Donuts',
                'gambar' => 'https://dummyimage.com/200x200/e8dcc7/7c2d12&text=Donuts'
            ],
            [
                'nama' => 'BAEK’',
                'gambar' => 'https://dummyimage.com/200x200/5b0000/ffffff&text=BAEK'
            ],
            [
                'nama' => 'dogzilla',
                'gambar' => 'https://dummyimage.com/200x200/b91c1c/ffffff&text=dogzilla'
            ],
        ];
    @endphp

    @foreach ($restos as $resto)

    <div>

        <div class="bg-white
                    shadow-md
                    p-4
                    w-[180px]
                    h-[180px]
                    flex
                    items-center
                    justify-center">

            <img
                src="{{ $resto['gambar'] }}"
                class="w-full h-full object-cover"
            >

        </div>

        <h2 class="text-[34px]
                   text-[#980000]
                   mt-3
                   text-center">

            {{ $resto['nama'] }}

        </h2>

    </div>

    @endforeach

</div>

@endsection