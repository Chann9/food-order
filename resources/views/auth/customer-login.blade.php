<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="overflow-hidden">

<div class="flex h-screen w-full">

    <!-- LEFT SIDE -->
    <div class="w-1/2 bg-[#f5f5f5] relative overflow-hidden flex items-center justify-center">

        <!-- RED CIRCLE -->
        <div class="absolute w-[700px] h-[700px] bg-red-700 rounded-full -left-48"></div>

        <!-- FOOD IMAGE -->
        <img 
            src="{{ asset('images/logpel_kiri.jpeg') }}" 
            alt="Food"
            class="relative z-10 w-[550px] object-contain"
        >

    </div>

    <!-- RIGHT SIDE -->
    <div class="w-1/2 relative flex items-center justify-center">

        <!-- BACKGROUND -->
        <img 
            src="{{ asset('images/logpel_kanan.jpeg') }}"
            alt="Background"
            class="absolute inset-0 w-full h-full object-cover"
        >

        <!-- DARK OVERLAY -->
        <div class="absolute inset-0 bg-black/70"></div>

        <!-- LOGIN BOX -->
        <div class="relative z-10 w-[70%]">

            <h1 class="text-white text-6xl font-bold mb-2">
                Selamat Datang!
            </h1>

            <p class="text-white text-xl mb-10">
                Silahkan Login untuk masuk
            </p>

            <!-- INPUT NAMA -->
            <div class="mb-8">
                <label class="text-white text-sm">
                    Nama Lengkap
                </label>

                <input 
                    type="text"
                    placeholder="Ketik disini"
                    class="w-full mt-2 bg-red-700 text-white placeholder-white/70 px-6 py-5 rounded-xl outline-none text-2xl"
                >
            </div>

            <!-- INPUT NOMOR -->
            <div class="mb-8">
                <label class="text-white text-sm">
                    Nomor Telepon
                </label>

                <input 
                    type="text"
                    placeholder="Ketik disini"
                    class="w-full mt-2 bg-red-700 text-white placeholder-white/70 px-6 py-5 rounded-xl outline-none text-2xl"
                >
            </div>

            <!-- HELP -->
            <div class="mb-14 text-white text-sm">
                <p>Butuh bantuan?</p>
                <p>
                    Hubungi Pusat Layanan kami 
                    <span class="underline cursor-pointer">
                        klik disini
                    </span>
                </p>
            </div>

            <!-- BUTTON -->
            <button 
                class="bg-red-700 hover:bg-red-800 transition-all duration-300 text-white font-bold text-4xl px-24 py-4 rounded-full"
                onclick="window.location.href='/home'"
            >
                Login
            </button>

        </div>
    </div>

</div>

</body>
</html>