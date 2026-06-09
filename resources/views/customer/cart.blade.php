@extends('layouts.customer')

@section('content')

<div class="px-12 py-10 bg-[#F5F5F5] min-h-screen">

    <div class="flex gap-10">

        {{-- LEFT --}}
        <div class="flex-1">

            {{-- CART CARD --}}
            <div class="bg-white
                        rounded-[10px]
                        shadow-md
                        p-8
                        w-[700px]">

                {{-- ITEM 1 --}}
                <div class="flex gap-5 mb-6">

                    <img
                        src="https://images.unsplash.com/photo-1621996346565-e3dbc646d9a9?q=80&w=1200"
                        class="w-[140px]
                               h-[110px]
                               rounded-[6px]
                               object-cover"
                    >

                    <div>

                        <h2 class="text-[28px] font-semibold">
                            Spaghetti Carbonara
                        </h2>

                        <p class="text-[26px] font-semibold">
                            Rp 68.000
                        </p>

                        {{-- QTY --}}
                        <div class="flex mt-3">

                            <button
                                class="border
                                       px-4
                                       rounded-l-[6px]
                                       font-bold">

                                -

                            </button>

                            <div
                                class="border-t border-b
                                       px-6
                                       flex items-center">

                                3

                            </div>

                            <button
                                class="border
                                       px-4
                                       rounded-r-[6px]
                                       font-bold">

                                +

                            </button>

                        </div>

                    </div>

                </div>

                {{-- ITEM 2 --}}
                <div class="flex gap-5 mb-6">

                    <img
                        src="https://images.unsplash.com/photo-1556679343-c7306c1976bc?q=80&w=1200"
                        class="w-[140px]
                               h-[110px]
                               rounded-[6px]
                               object-cover"
                    >

                    <div>

                        <h2 class="text-[28px] font-semibold">
                            Thai Tea
                        </h2>

                        <p class="text-[26px] font-semibold">
                            Rp 22.000
                        </p>

                        <div class="flex mt-3">

                            <button class="border px-4 rounded-l-[6px] font-bold">
                                -
                            </button>

                            <div class="border-t border-b px-6 flex items-center">
                                4
                            </div>

                            <button class="border px-4 rounded-r-[6px] font-bold">
                                +
                            </button>

                        </div>

                    </div>

                </div>

                {{-- ITEM 3 --}}
                <div class="flex gap-5">

                    <img
                        src="https://images.unsplash.com/photo-1600891964092-4316c288032e?q=80&w=1200"
                        class="w-[140px]
                               h-[110px]
                               rounded-[6px]
                               object-cover"
                    >

                    <div>

                        <h2 class="text-[28px] font-semibold">
                            Chicken Wings
                        </h2>

                        <p class="text-[26px] font-semibold">
                            Rp 30.000
                        </p>

                        <div class="flex mt-3">

                            <button class="border px-4 rounded-l-[6px] font-bold">
                                -
                            </button>

                            <div class="border-t border-b px-6 flex items-center">
                                2
                            </div>

                            <button class="border px-4 rounded-r-[6px] font-bold">
                                +
                            </button>

                        </div>

                    </div>

                </div>

            </div>

            {{-- NOTE --}}
            <div class="mt-8">

                <h2 class="text-[26px] font-medium mb-4">
                    Catatan untuk restoran
                </h2>

                <textarea
                    class="w-[700px]
                           h-[90px]
                           rounded-[10px]
                           border
                           shadow-sm
                           p-4
                           resize-none
                           outline-none"></textarea>

            </div>

            {{-- BUTTON --}}
            <button
                class="bg-[#7BC488]
                       hover:bg-[#66B474]
                       transition
                       text-white
                       text-[28px]
                       font-semibold
                       px-20
                       py-4
                       rounded-[10px]
                       mt-10
                       ml-[180px]">

                Pesan Sekarang

            </button>

        </div>

        {{-- RIGHT --}}
        <div>

            {{-- SUMMARY --}}
            <div class="bg-white
                        rounded-[10px]
                        shadow-md
                        p-6
                        w-[420px]">

                <h2 class="text-[28px]
                           font-semibold
                           mb-5">

                    Ringkasan Pesanan

                </h2>

                <div class="flex justify-between text-[24px] mb-4">
                    <p>Subtotal</p>
                    <p>Rp 352.000</p>
                </div>

                <div class="flex justify-between text-[24px] mb-4">
                    <p>Pajak (10%)</p>
                    <p>Rp 10.000</p>
                </div>

                <hr class="my-5">

                <div class="flex justify-between text-[26px] font-bold">
                    <p>Total</p>
                    <p>Rp 362.000</p>
                </div>

            </div>

            {{-- PAYMENT --}}
            <div class="bg-white
                        rounded-[10px]
                        shadow-md
                        p-6
                        w-[420px]
                        mt-6">

                <h2 class="text-[28px]
                           font-semibold
                           mb-5">

                    Metode Pembayaran

                </h2>

                <button
                    class="w-full
                           border
                           rounded-[10px]
                           py-4
                           text-[24px]
                           mb-4
                           shadow-sm">

                    Cash

                </button>

                <button
                    class="w-full
                           border
                           rounded-[10px]
                           py-4
                           text-[24px]
                           shadow-sm">

                    Qris

                </button>

            </div>

        </div>

    </div>

</div>

@endsection