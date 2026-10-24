<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mineral Semeru</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Roboto+Slab:wght@700;800&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'konstruksi': ['"Roboto Slab"', 'serif'],
                        'informasi': ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-50 text-gray-800 font-informasi antialiased">

    <!-- Kotak Navigasi Bar Atas -->
    <header class="bg-blue-950 shadow-sm border-b border-white sticky top-0 z-50 font-informasi">
        <div class="container mx-auto px-4 py-3 flex items-center justify-between flex-wrap relative">

            <!-- Logo -->
            <a href="#" class="flex items-center space-x-2 shrink-0">
                <img src="assets/img/logo.png" alt="logo" class="h-16 w-auto object-contain">
            </a>

            <!-- HACK CSS MURNI: Checkbox Tersembunyi -->
            <input type="checkbox" id="menu-shortcut" class="peer hidden">

            <!-- Tombol Hamburger (Berupa Label yang memicu Checkbox) -->
            <label for="menu-shortcut" class="lg:hidden text-white hover:text-slate-300 cursor-pointer p-2 ml-auto select-none">
                <svg xmlns="http://w3.org" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-7 h-7">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </label>

            <!-- Menu Navigasi (Dikontrol oleh status 'peer-checked' milik checkbox di atas) -->
            <nav class="hidden peer-checked:flex lg:flex w-full lg:w-auto items-center flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-7 text-sm font-semibold text-white mt-4 lg:mt-0">
                <a href="#beranda" class="hover:text-slate-300 transition py-2 lg:py-0 w-full lg:w-auto text-center lg:text-left border-b border-blue-900 lg:border-none">Beranda</a>

                <!-- Pasir Dropdown -->
                <div class="relative group w-full lg:w-auto flex flex-col lg:flex-row items-center border-b border-blue-900 lg:border-none">
                    <button class="flex items-center hover:text-slate-300 transition focus:outline-none py-2 lg:py-4">
                        Daftar Produk
                        <svg xmlns="http://w3.org" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-3.5 h-3.5 ml-1 text-gray-400 group-hover:text-slate-300 transition">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>

                    <!-- Kotak Pilihan Dropdown -->
                    <div class="static lg:absolute left-0 lg:top-full w-full lg:w-48 bg-blue-900 lg:bg-white border border-gray-100 rounded-lg lg:shadow-xl py-2 hidden group-hover:block transition duration-200 z-50 text-center lg:text-left mb-2 lg:mb-0">
                        <a href="#" class="block px-4 py-2 text-slate-200 lg:text-gray-700 hover:bg-blue-500 lg:hover:bg-blue-50 lg:hover:text-blue-600 transition text-xs font-medium">Pasir Semeru Murni</a>
                        <a href="#" class="block px-4 py-2 text-slate-200 lg:text-gray-700 hover:bg-blue-500 lg:hover:bg-blue-50 lg:hover:text-blue-600 transition text-xs font-medium">Pasir Pasang / Ayak</a>
                        <a href="#" class="block px-4 py-2 text-slate-200 lg:text-gray-700 hover:bg-blue-500 lg:hover:bg-blue-50 lg:hover:text-blue-600 transition text-xs font-medium">Pasir Urug</a>
                    </div>
                </div>

                <a href="#pasir" class="hover:text-slate-300 transition py-2 lg:py-0 w-full lg:w-auto text-center lg:text-left border-b border-blue-900 lg:border-none">Harga Pasir</a>
                <a href="#" class="hover:text-slate-300 transition py-2 lg:py-0 w-full lg:w-auto text-center lg:text-left border-b border-blue-900 lg:border-none mb-2 lg:mb-0">Blog</a>

                <!-- Tombol Aksi (Daftar & Masuk) -->
                <div class="flex items-center space-x-4 w-full lg:w-auto justify-center pt-2 lg:pt-0">
                    <a href="#daftar" class="border border-white text-white font-bold px-5 py-2 rounded-lg text-sm hover:bg-white hover:text-slate-900 transition w-full lg:w-auto text-center">Daftar</a>
                    <a href="#masuk" class="bg-white hover:bg-slate-100 text-slate-900 font-bold px-5 py-2 rounded-lg text-sm transition shadow-sm w-full lg:w-auto text-center">Masuk</a>
                </div>
            </nav>

        </div>
    </header>

</body>

</html>