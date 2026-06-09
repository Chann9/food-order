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

    <title>FoodOrder Login</title>
</head>

<body class="font-[Poppins] bg-black overflow-hidden">

<div class="flex h-screen">

    {{-- LEFT --}}
    <section class="w-1/2 bg-[#F5F5F5] relative overflow-hidden">

        {{-- RED CIRCLE --}}
        <div class="absolute
                    w-[900px]
                    h-[900px]
                    bg-[#A30000]
                    rounded-full
                    -left-[430px]
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
                   rounded-full
                   object-cover
                   h-[500px]
                   shadow-2xl"
        >

        {{-- TRAY ICON --}}
        <div class="absolute
                    right-[90px]
                    top-1/2
                    -translate-y-1/2
                    text-[180px]">

            🍽️

        </div>

    </section>

    {{-- RIGHT --}}
    <section class="w-1/2 relative">

        {{-- BACKGROUND --}}
        <div class="absolute inset-0">

            <img
                src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?q=80&w=1200"
                class="w-full h-full object-cover"
            >

            <div class="absolute inset-0 bg-black/70"></div>

        </div>

        {{-- CONTENT --}}
        <div class="relative
                    z-10
                    h-full
                    flex
                    flex-col
                    justify-center
                    px-24">

            <h1 class="text-white
                       text-[64px]
                       font-bold
                       leading-tight">

                Selamat Datang!

            </h1>

            <p class="text-white text-lg mt-2">

                Silahkan Login untuk masuk

            </p>

            {{-- FORM --}}
            <form method="POST"
                  action="{{ route('login') }}"
                  class="mt-10">

                @csrf

                {{-- NAME --}}
                <div class="mb-6">

                    <label class="text-white text-sm">
                        Nama Lengkap
                    </label>

                    <div class="relative mt-2">

                        <input
                            type="text"
                            name="name"
                            placeholder="Ketik disini"
                            class="w-full
                                   bg-[#A30000]
                                   text-white
                                   rounded-[14px]
                                   px-6
                                   py-5
                                   outline-none
                                   placeholder:text-gray-300"
                        >

                        <span class="absolute
                                     right-5
                                     top-1/2
                                     -translate-y-1/2
                                     text-white
                                     text-2xl">

                            👤

                        </span>

                    </div>

                </div>

                {{-- PHONE --}}
                <div class="mb-6">

                    <label class="text-white text-sm">
                        Nomor Telepon
                    </label>

                    <div class="relative mt-2">

                        <input
                            type="text"
                            name="phone"
                            placeholder="Ketik disini"
                            class="w-full
                                   bg-[#A30000]
                                   text-white
                                   rounded-[14px]
                                   px-6
                                   py-5
                                   outline-none
                                   placeholder:text-gray-300"
                        >

                        <span class="absolute
                                     right-5
                                     top-1/2
                                     -translate-y-1/2
                                     text-white
                                     text-2xl">

                            📞

                        </span>

                    </div>

                </div>

                {{-- HELP --}}
                <p class="text-white text-sm mb-10">

                    Butuh bantuan?
                    Hubungi Pusat Layanan kami klik
                    <span class="underline cursor-pointer">
                        disini
                    </span>

                </p>

                {{-- BUTTON --}}
                <button
                    class="bg-[#B30000]
                           hover:bg-[#920000]
                           transition
                           text-white
                           text-[32px]
                           font-bold
                           rounded-full
                           w-[320px]
                           py-5
                           shadow-2xl
                           block
                           mx-auto">

                    Login

                </button>

            </form>

        </div>

    </section>

</div>

</body>
</html>