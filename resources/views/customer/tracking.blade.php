<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')

    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
          rel="stylesheet">

    <title>Tracking Pesanan</title>
</head>

<body class="bg-[#F5F5F5] font-[Poppins] p-10">

{{-- ========================= --}}
{{-- CARD 1 --}}
{{-- ========================= --}}

<div class="bg-white
            border
            rounded-[10px]
            p-8
            mb-12">

    {{-- HEADER --}}
    <div class="flex justify-between items-start">

        <div>

            <h1 class="font-bold text-[32px]">
                Rangkuman Transaksi
            </h1>

            <div class="flex items-center gap-3 mt-4">

                <div class="bg-[#980000]
                            text-white
                            px-4
                            py-1
                            rounded-full
                            text-[18px]
                            font-semibold">

                    AyoFood

                </div>

            </div>

            <p class="font-semibold
                      text-[24px]
                      mt-2">

                Pesanan sedang dibuat

            </p>

        </div>

        <div class="text-right">

            <p class="text-[22px]">
                Hari ini, 12:00 AM
            </p>

            <p class="text-[22px] mt-2">
                Transaksi F-3210841532
            </p>

        </div>

    </div>

    <hr class="my-6">

    {{-- STATUS --}}
    <div class="text-center">

        <img
            src="https://cdn-icons-png.flaticon.com/512/3142/3142029.png"
            class="w-[220px]
                   mx-auto"
        >

        <p class="text-[28px]
                  mt-5
                  font-medium">

            Pesanan sedang dibuat

        </p>

        <p class="text-[24px]
                  text-gray-600
                  mt-2">

            Estimasi pesanan sampai pada jam 12:30 AM

        </p>

    </div>

    <hr class="my-8">

    {{-- PEMBELIAN --}}
    <div>

        <h2 class="font-bold text-[28px]">
            Pembelian
        </h2>

        <div class="mt-5 text-[22px]">

            <div class="flex justify-between mb-2">
                <p>Spaghetti Carbonara</p>
                <p>1</p>
            </div>

            <div class="flex justify-between mb-2">
                <p>Thai Tea</p>
                <p>1</p>
            </div>

            <div class="flex justify-between">
                <p>Dengan alat makan/sedotan</p>
                <p></p>
            </div>

        </div>

    </div>

    <hr class="my-8">

    {{-- DETAIL PEMBAYARAN --}}
    <div>

        <h2 class="font-bold text-[28px]">
            Detail Pembayaran
        </h2>

        <div class="mt-5 text-[22px]">

            <div class="flex justify-between mb-2">
                <p>Harga</p>
                <p>89.000</p>
            </div>

            <div class="flex justify-between mb-2">
                <p>Biaya Penanganan dan Pengiriman</p>
                <p>22.500</p>
            </div>

            <div class="flex justify-between mb-2">
                <p>Biaya lainnya</p>
                <p>6.000</p>
            </div>

            <div class="flex justify-between mb-2">
                <p>Diskon</p>
                <p>2.500</p>
            </div>

        </div>

        <hr class="border-dashed my-6">

        <div class="flex justify-between
                    text-[26px]
                    font-bold">

            <p>Total</p>
            <p>115.000</p>

        </div>

    </div>

    {{-- BUTTON --}}
    <div class="flex gap-8 justify-center mt-10">

        <button
            class="bg-[#2E8B3C]
                   text-white
                   px-12
                   py-4
                   rounded-[12px]
                   text-[22px]
                   font-semibold">

            Pesan Lagi

        </button>

        <!-- BUTTON MODAL -->
        <label
            for="cancel-modal"
            class="bg-[#EF2020]
                   text-white
                   px-12
                   py-4
                   rounded-[12px]
                   text-[22px]
                   font-semibold
                   cursor-pointer">

            Batalkan Pesanan

        </label>

    </div>

</div>

{{-- ========================= --}}
{{-- CARD 2 --}}
{{-- ========================= --}}

<div class="bg-white
            border
            rounded-[10px]
            p-8
            mb-12">

    <div class="flex justify-between items-start">

        <div>

            <h1 class="font-bold text-[32px]">
                Rangkuman Transaksi
            </h1>

            <div class="bg-[#980000]
                        text-white
                        inline-block
                        px-4
                        py-1
                        rounded-full
                        text-[18px]
                        font-semibold
                        mt-4">

                AyoFood

            </div>

            <p class="font-semibold
                      text-[24px]
                      mt-2">

                Pesanan sedang diantar

            </p>

        </div>

        <div class="text-right">

            <p class="text-[22px]">
                Hari ini, 12:10 AM
            </p>

            <p class="text-[22px] mt-2">
                Transaksi F-3210841532
            </p>

        </div>

    </div>

    <hr class="my-6">

    <div class="text-center">

        <img
            src="https://cdn-icons-png.flaticon.com/512/1046/1046857.png"
            class="w-[220px]
                   mx-auto"
        >

        <p class="text-[28px]
                  mt-5
                  font-medium">

            Pesanan sedang diantar

        </p>

        <p class="text-[24px]
                  text-gray-600
                  mt-2">

            Estimasi pesanan sampai pada jam 12:35 AM

        </p>

    </div>

</div>

{{-- ========================= --}}
{{-- CARD 3 --}}
{{-- ========================= --}}

<div class="bg-white
            border
            rounded-[10px]
            p-8">

    <div class="flex justify-between items-start">

        <div>

            <h1 class="font-bold text-[32px]">
                Rangkuman Transaksi
            </h1>

            <div class="bg-[#980000]
                        text-white
                        inline-block
                        px-4
                        py-1
                        rounded-full
                        text-[18px]
                        font-semibold
                        mt-4">

                AyoFood

            </div>

            <p class="font-semibold
                      text-[24px]
                      mt-2">

                Pesanan telah sampai

            </p>

        </div>

        <div class="text-right">

            <p class="text-[22px]">
                Hari ini, 12:35 AM
            </p>

            <p class="text-[22px] mt-2">
                Transaksi F-3210841532
            </p>

        </div>

    </div>

    <hr class="my-6">

    <div class="text-center">

        <img
            src="https://cdn-icons-png.flaticon.com/512/3176/3176363.png"
            class="w-[220px]
                   mx-auto"
        >

        <p class="text-[28px]
                  mt-5
                  font-medium">

            Pesanan telah sampai, selamat menikmati

        </p>

        <p class="text-[24px]
                  text-gray-600
                  mt-2">

            Estimasi pesanan sampai pada jam 12:35 AM

        </p>

    </div>

    <hr class="my-8">

    {{-- PEMBELIAN --}}
    <div>

        <h2 class="font-bold text-[28px]">
            Pembelian
        </h2>

        <div class="mt-5 text-[22px]">

            <div class="flex justify-between mb-2">
                <p>Chicken Wings</p>
                <p>1</p>
            </div>

            <div class="flex justify-between mb-2">
                <p>Thai Tea</p>
                <p>1</p>
            </div>

            <div class="flex justify-between">
                <p>Dengan alat makan/sedotan</p>
            </div>

        </div>

    </div>

    <hr class="my-8">

    {{-- DETAIL --}}
    <div>

        <h2 class="font-bold text-[28px]">
            Detail Pembayaran
        </h2>

        <div class="mt-5 text-[22px]">

            <div class="flex justify-between mb-2">
                <p>Harga</p>
                <p>89.000</p>
            </div>

            <div class="flex justify-between mb-2">
                <p>Biaya Penanganan dan Pengiriman</p>
                <p>22.500</p>
            </div>

            <div class="flex justify-between mb-2">
                <p>Biaya lainnya</p>
                <p>6.000</p>
            </div>

            <div class="flex justify-between mb-2">
                <p>Diskon</p>
                <p>2.500</p>
            </div>

        </div>

        <hr class="border-dashed my-6">

        <div class="flex justify-between
                    text-[26px]
                    font-bold">

            <p>Total</p>
            <p>115.000</p>

        </div>

    </div>

    {{-- BUTTON --}}
    <div class="flex justify-center mt-10">

        <button
            onclick="window.location.href='/pilih-resto'"
            class="bg-[#2E8B3C]
                   text-white
                   px-12
                   py-4
                   rounded-[12px]
                   text-[22px]
                   font-semibold">

            Pesan Lagi

        </button>

    </div>

</div>

<!-- MODAL TOGGLE -->
<input type="checkbox"
       id="cancel-modal"
       class="hidden peer">

<!-- MODAL -->
<div class="fixed
            inset-0
            bg-black/70
            hidden
            peer-checked:flex
            items-center
            justify-center
            z-50">

    <!-- BOX -->
    <div class="bg-[#8B8B8B]
                rounded-[18px]
                px-12
                py-8
                text-center">

        <!-- TEXT -->
        <p class="text-black
                  text-[28px]
                  font-semibold
                  leading-relaxed">

            Anda yakin ingin
            <br>
            membatalkan pesanaan?

        </p>

        <!-- BUTTON -->
        <div class="flex justify-center gap-12 mt-10">

            <!-- YA -->
            <a href="/home"
               class="bg-red-500
                      hover:bg-red-600
                      transition
                      text-white
                      text-[22px]
                      px-10
                      py-2
                      rounded-full">

                YA

            </a>

            <!-- TIDAK -->
            <label
                for="cancel-modal"
                class="bg-green-500
                       hover:bg-green-600
                       transition
                       text-white
                       text-[22px]
                       px-10
                       py-2
                       rounded-full
                       cursor-pointer">

                Tidak

            </label>

        </div>

    </div>

</div>

</body>
</html>