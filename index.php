<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mineral Semeru</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800 font-sans">

    <!-- Navigasi Utama -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-blue-600">SitusSaya</div>
            <nav>
                <ul class="flex space-x-6 font-medium">
                    <li><a href="#home" class="hover:text-blue-600 transition">Beranda</a></li>
                    <li><a href="#produk" class="hover:text-blue-600 transition">Produk</a></li>
                    <li><a href="#tentang" class="hover:text-blue-600 transition">Tentang Kami</a></li>
                    <li><a href="#unggul" class="hover:text-blue-600 transition">Unggulan</a></li>
                    <li><a href="#login" class="hover:text-blue-600 transition">Daftar</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Konten Utama -->
    <main class="container mx-auto px-6 py-12">

        <!-- Section 1: Hero Banner -->
        <section id="home" class="text-center py-20 bg-blue-600 text-white rounded-2xl shadow-xl mb-12">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Selamat Datang di Toko Kami</h1>
            <p class="text-lg text-blue-100 mb-8 max-w-2xl mx-auto">Temukan produk terbaik dengan kualitas premium dan harga terjangkau khusus untuk Anda.</p>
            <a href="#produk" class="bg-white text-blue-600 font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-blue-50 transition">Lihat Produk</a>
        </section>

        <!-- Section 2: Display Produk -->
        <section id="produk" class="py-8">
            <h2 class="text-3xl font-bold text-center mb-10 text-gray-900">Produk Unggulan</h2>

            <!-- Grid Container untuk Produk -->
            <div class="flex justify-center">
                <!-- Card Produk -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden max-w-sm w-full border border-gray-100 hover:shadow-xl transition duration-300">
                    <!-- Memanggil file gambar dari folder assets/img/ Anda -->
                    <div class="h-64 bg-gray-200 flex items-center justify-center overflow-hidden">
                        <img src="assets/img/Gambar.jpg" alt="Foto Produk" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-bold uppercase tracking-wider text-blue-500 bg-blue-50 px-3 py-1 rounded-full">Baru</span>
                        <h3 class="text-xl font-bold mt-3 mb-2 text-gray-800">Nama Produk Keren</h3>
                        <p class="text-2xl font-black text-gray-900 mb-5">Rp 150.000</p>
                        <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg shadow transition">
                            Beli Sekarang
                        </button>
                    </div>
                </div>
            </div>

        </section>

    </main>

    <!-- Kaki Halaman -->
    <footer class="bg-gray-950 text-gray-400 text-center py-8 mt-12 border-t border-gray-800">
        <p>&copy; 2026 Mineral Semeru. Didesain modern menggunakan Tailwind CSS.</p>
    </footer>

</body>

</html>