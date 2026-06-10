<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')

    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <title>Login Pelanggan</title>

</head>

<body class="bg-black font-[Poppins] overflow-hidden">

<div class="w-full h-screen flex">

    {{-- LEFT --}}
    <div class="w-1/2
                bg-[#F5F5F5]
                relative
                overflow-hidden">

        {{-- RED CIRCLE --}}
        <div class="absolute
                    w-[950px]
                    h-[950px]
                    bg-[#A40000]
                    rounded-full
                    -left-[500px]
                    top-1/2
                    -translate-y-1/2">
        </div>

        {{-- FOOD IMAGE --}}
        <img
            src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=1200"
            class="absolute
                   left-[20px]
                   top-1/2
                   -translate-y-1/2
                   w-[500px]
                   h-[500px]
                   rounded-full
                   object-cover
                   shadow-2xl">

        {{-- ICON --}}
        <div class="absolute
                    right-[70px]
                    top-1/2
                    -translate-y-1/2
                    text-[180px]">

            🍽️

        </div>

    </div>

    {{-- RIGHT --}}
    <div class="w-1/2 relative">

        {{-- BG IMAGE --}}
        <img
            src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?q=80&w=1200"
            class="absolute
                   inset-0
                   w-full
                   h-full
                   object-cover">

        {{-- OVERLAY --}}
        <div class="absolute inset-0 bg-black/70"></div>

        {{-- CONTENT --}}
        <div class="relative
                    z-10
                    h-full
                    flex
                    flex-col
                    justify-center
                    px-24">

            {{-- TITLE --}}
            <h1 class="text-white
                       text-[64px]
                       font-bold">

                Selamat Datang!

            </h1>

            <p class="text-white
                      text-[22px]
                      mt-2">

                Silahkan Login untuk masuk

            </p>

            {{-- INPUT --}}
            <div class="mt-10">

                <label class="text-white text-sm">
                    Nama Lengkap
                </label>

                <input
                    type="text"
                    placeholder="Ketik disini"
                    class="w-full
                           mt-2
                           bg-[#A40000]
                           text-white
                           rounded-[14px]
                           px-6
                           py-5
                           outline-none">

            </div>

            {{-- INPUT --}}
            <div class="mt-6">

                <label class="text-white text-sm">
                    Nomor Telepon
                </label>

                <input
                    type="text"
                    placeholder="Ketik disini"
                    class="w-full
                           mt-2
                           bg-[#A40000]
                           text-white
                           rounded-[14px]
                           px-6
                           py-5
                           outline-none">

            </div>

            {{-- HELP --}}
            <p class="text-white
                      text-sm
                      mt-6">

                Butuh bantuan?

                Hubungi Pusat Layanan kami klik

                <a href="/call-center"
                   class="underline">

                    disini

                </a>

            </p>

            {{-- LOGIN --}}
            <a href="/"
               class="bg-[#B10000]
                      hover:bg-[#900000]
                      transition
                      text-white
                      text-[32px]
                      font-bold
                      text-center
                      py-5
                      rounded-full
                      w-[320px]
                      mx-auto
                      mt-14
                      shadow-2xl">

                Login

            </a>

            {{-- SIMULASI GAGAL --}}
            <a href="/call-center"
               class="text-center
                      text-red-300
                      underline
                      mt-6">

                Simulasi Login Gagal

            </a>

        </div>

    </div>

</div>

</body>
</html>