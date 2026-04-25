@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        @keyframes slide {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .animate-slide {
            display: flex;
            width: max-content;
            animation: slide 20s linear infinite;
        }
    </style>
@endpush
@section('content')
<section class="relative h-screen flex flex-col items-center justify-center text-white overflow-hidden">

    <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover">
        <source src="https://duanaga.co.id/assets/img/home/maincover.mp4" type="video/mp4">
        Browser Anda tidak mendukung video tag.
    </video>

    <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    <div class="relative z-10 text-center px-4">
        <h1 class="text-4xl md:text-6xl font-bold mb-4">PHYTOMED NEO FARMA</h1>
        <p class="text-lg md:text-xl mb-6">HERBAL MEDICINE COMPANY</p>
        <a href="{{ url('/about') }}"
            class="inline-block bg-gradient-to-r from-green-500 to-green-700 
                   hover:from-emerald-500 hover:to-green-800 text-white px-10 py-3 
                   rounded-full shadow-lg font-semibold tracking-wide 
                   transition-all duration-500 transform 
                   hover:-translate-y-2 hover:shadow-2xl hover:scale-105">
            Know More About Us
        </a>
    </div>
</section>

   <section class="relative py-16 bg-white">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/green-dust-and-scratches.png')] opacity-10"></div>

    <div class="w-full max-w-5xl mx-auto relative z-10">
        <div
            class="swiper mySwiper rounded-3xl shadow-2xl bg-white/30 backdrop-blur-lg border border-white/40 overflow-hidden">
            <div class="swiper-wrapper">

                <div class="swiper-slide group relative">
                    <img src="images/konten1.png" alt="Slide 1"
                        class="w-full h-56 sm:h-72 md:h-96 object-cover transition-transform duration-700 ease-in-out group-hover:scale-105">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                </div>

                <div class="swiper-slide group relative">
                    <img src="images/konten2.png" alt="Slide 2"
                        class="w-full h-56 sm:h-72 md:h-96 object-cover transition-transform duration-700 ease-in-out group-hover:scale-105">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                </div>

                <div class="swiper-slide group relative">
                    <img src="images/konten3.1.png" alt="Slide 3"
                        class="w-full h-56 sm:h-72 md:h-96 object-cover transition-transform duration-700 ease-in-out group-hover:scale-105">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                </div>
            </div>
            <div class="swiper-pagination !bottom-3"></div>
        </div>
    </div>
</section>

    <div class="swiper-pagination"></div>
    </div>
    <section id="layanan-keunggulan" class="relative py-20 bg-white">
        <div class="container mx-auto px-6 md:px-12 text-center">

            <h2 class="text-3xl md:text-4xl font-bold text-green-600 mb-6">
                Layanan & Keunggulan Maklon Herbal
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto mb-16 text-lg">
                Phytomed Neo Farma mendampingi Anda dari <span class="font-semibold text-green-600">ide produk</span>
                hingga <span class="font-semibold text-green-600">siap dipasarkan</span>,
                dengan standar <span class="font-semibold text-green-600">BPOM & CPOTB</span>.
                Semua proses kami pastikan higienis, modern, dan sesuai regulasi.
            </p>

            <div class="grid md:grid-cols-4 gap-8 relative mb-20">
                <!-- Step 1 -->
                <div class="group relative bg-white rounded-2xl shadow-lg p-6 hover:shadow-2xl transition">
                    <div
                        class="flex items-center justify-center w-14 h-14 mx-auto rounded-full bg-green-600 text-white text-xl font-bold mb-4 group-hover:scale-110 transition">
                        1
                    </div>
                    <h3 class="text-xl font-semibold text-green-700 mb-3">Formulasi & Racikan</h3>
                    <p class="text-gray-600 text-sm">
                        Resep herbal eksklusif sesuai kebutuhan, didukung riset mendalam oleh tim ahli fitofarmaka.
                    </p>
                </div>
                <div class="group relative bg-white rounded-2xl shadow-lg p-6 hover:shadow-2xl transition">
                    <div
                        class="flex items-center justify-center w-14 h-14 mx-auto rounded-full bg-green-600 text-white text-xl font-bold mb-4 group-hover:scale-110 transition">
                        2
                    </div>
                    <h3 class="text-xl font-semibold text-green-700 mb-3">Produksi & Manufaktur</h3>
                    <p class="text-gray-600 text-sm">
                        Proses modern dengan mesin higienis, efisien, sesuai standar BPOM & CPOTB.
                    </p>
                </div>
                <div class="group relative bg-white rounded-2xl shadow-lg p-6 hover:shadow-2xl transition">
                    <div
                        class="flex items-center justify-center w-14 h-14 mx-auto rounded-full bg-green-600 text-white text-xl font-bold mb-4 group-hover:scale-110 transition">
                        3
                    </div>
                    <h3 class="text-xl font-semibold text-green-700 mb-3">Desain & Branding</h3>
                    <p class="text-gray-600 text-sm">
                        Identitas brand & kemasan modern yang menarik, menyesuaikan citra dan target pasar Anda.
                    </p>
                </div>
                <div class="group relative bg-white rounded-2xl shadow-lg p-6 hover:shadow-2xl transition">
                    <div
                        class="flex items-center justify-center w-14 h-14 mx-auto rounded-full bg-green-600 text-white text-xl font-bold mb-4 group-hover:scale-110 transition">
                        4
                    </div>
                    <h3 class="text-xl font-semibold text-green-700 mb-3">Packaging & Finishing</h3>
                    <p class="text-gray-600 text-sm">
                        Pengemasan rapi & aman, tersedia pilihan ekonomis hingga premium, siap untuk distribusi.
                    </p>
                </div>
            </div>


            <h3 class="text-2xl md:text-4xl font-bold text-green-600 mb-6">
                Mengapa Memilih Kami?
            </h3>
            <p class="text-gray-600 max-w-3xl mx-auto mb-16">
                Phytomed Neo Farma dipercaya oleh ratusan brand karena layanan yang lengkap, terpercaya,
                dan terjamin kualitasnya. Berikut adalah keunggulan yang kami tawarkan:
            </p>

            <div class="grid md:grid-cols-4 gap-8">
                <div
                    class="group bg-white p-8 rounded-2xl shadow-md hover:shadow-2xl transition duration-300 hover:-translate-y-2">
                    <div class="flex justify-center mb-6">
                        <div
                            class="w-16 h-16 flex items-center justify-center rounded-full bg-green-100 text-green-600 group-hover:bg-green-600 group-hover:text-white transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-8 h-8">
                                <path
                                    d="M20.59 13.41l-7.17-7.17A2 2 0 0 0 12.17 6H6a2 2 0 0 0-2 2v6.17c0 .53.21 1.04.59 1.41l7.17 7.17c.78.78 2.05.78 2.83 0l6-6c.78-.78.78-2.05 0-2.83zM7.5 10.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                            </svg>
                        </div>
                    </div>
                    <h4 class="text-lg font-semibold text-green-700 mb-3">Label Pribadi</h4>
                    <p class="text-gray-600">
                        Produk dengan merek Anda sendiri tanpa ribet mengurus seluruh proses produksi.
                    </p>
                </div>

                <div
                    class="group bg-white p-8 rounded-2xl shadow-md hover:shadow-2xl transition duration-300 hover:-translate-y-2">
                    <div class="flex justify-center mb-6">
                        <div
                            class="w-16 h-16 flex items-center justify-center rounded-full bg-green-100 text-green-600 group-hover:bg-green-600 group-hover:text-white transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" viewBox="0 0 24 24">
                                <path
                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                            </svg>
                        </div>
                    </div>
                    <h4 class="text-lg font-semibold text-green-700 mb-3">Kepercayaan Pelanggan</h4>
                    <p class="text-gray-600">
                        Transparansi, kualitas, dan pelayanan terbaik adalah cara kami menjaga kepercayaan Anda.
                    </p>
                </div>

                <div
                    class="group bg-white p-8 rounded-2xl shadow-md hover:shadow-2xl transition duration-300 hover:-translate-y-2">
                    <div class="flex justify-center mb-6">
                        <div
                            class="w-16 h-16 flex items-center justify-center rounded-full bg-green-100 text-green-600 group-hover:bg-green-600 group-hover:text-white transition">
                            <!-- Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" viewBox="0 0 24 24">
                                <path
                                    d="M3 6h11a1 1 0 0 1 1 1v3h3.586a1 1 0 0 1 .894.553L21.7 13.8A2 2 0 0 1 22 14.8V18a1 1 0 0 1-1 1h-1.05a2.75 2.75 0 0 1-5.9 0H9.95a2.75 2.75 0 0 1-5.9 0H3a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1Z" />
                            </svg>
                        </div>
                    </div>
                    <h4 class="text-lg font-semibold text-green-700 mb-3">Logistik & Pengiriman</h4>
                    <p class="text-gray-600">
                        Produk siap diproduksi & dikirim dengan opsi transportasi darat, laut, maupun udara.
                    </p>
                </div>

                <div
                    class="group bg-white p-8 rounded-2xl shadow-md hover:shadow-2xl transition duration-300 hover:-translate-y-2">
                    <div class="flex justify-center mb-6">
                        <div
                            class="w-16 h-16 flex items-center justify-center rounded-full bg-green-100 text-green-600 group-hover:bg-green-600 group-hover:text-white transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" viewBox="0 0 24 24">
                                <path
                                    d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm-1 14-4-4 1.41-1.41L11 13.17l5.59-5.59L18 9l-7 7Z" />
                            </svg>
                        </div>
                    </div>
                    <h4 class="text-lg font-semibold text-green-700 mb-3">Sertifikasi Lengkap</h4>
                    <p class="text-gray-600">
                        GMPC, ISO 22716, BSCI, FDA, MSDS, COA, hingga sertifikat CPNP, CPSR, PIF, SASO, dan lainnya.
                    </p>
                </div>
            </div>

            <div class="mt-16">
                <a href="/contact"
                 class="bg-gradient-to-r from-green-500 to-green-700 hover:from-green-600 hover:to-green-800 text-white px-8 py-3 rounded-full shadow-lg font-semibold tracking-wide transition-transform transform hover:-translate-y-1 hover:shadow-2xl">
                    Konsultasi Gratis
                </a>
            </div>
        </div>
    </section>


    <!-- Section Inovasi Teknologi -->
    <section id="innovation" class="relative py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Heading -->
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800">
                    INOVASI & TEKNOLOGI
                </h2>
                <div class="w-24 h-1 bg-green-600 mx-auto mt-4 rounded-full"></div>
                <p class="mt-6 text-lg text-gray-600 max-w-3xl mx-auto">
                    Kami memadukan <span class="font-semibold text-green-600">riset ilmiah</span>,
                    <span class="font-semibold text-green-600">teknologi modern</span>, dan
                    <span class="font-semibold text-green-600">inovasi berkelanjutan</span>
                    untuk menghadirkan produk herbal & minuman berkualitas tinggi sesuai standar internasional.
                </p>
            </div>

            <!-- Items -->
            <div class="space-y-28">

                <!-- Item 1 -->
                <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-12">
                    <div class="relative">
                        <span class="block text-6xl md:text-7xl font-extrabold text-green-400 mb-4">01</span>
                        <h3 class="text-2xl font-semibold text-gray-800">Tim Riset Profesional</h3>
                        <p class="mt-4 text-gray-600 leading-relaxed">
                            Tim riset ahli & profesional di bidang pangan dan fitofarmaka memastikan
                            <span class="font-medium text-green-700">formulasi inovatif</span> dengan uji laboratorium
                            sesuai standar keamanan.
                        </p>
                    </div>
                    <div>
                        <img src="{{ asset('images/timriset.png') }}" alt="Tim Riset Profesional"
                            class="rounded-2xl shadow-lg w-full max-w-[500px] mx-auto transform hover:scale-105 transition duration-500">
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-12">
                    <div class="order-2 md:order-1">
                        <img src="{{ asset('images/produksi.png') }}" alt="Tim Produksi"
                            class="rounded-2xl shadow-lg w-full max-w-[500px] mx-auto transform hover:scale-105 transition duration-500">
                    </div>
                    <div class="order-1 md:order-2 relative">
                        <span class="block text-6xl md:text-7xl font-extrabold text-green-400 mb-4">02</span>
                        <h3 class="text-2xl font-semibold text-gray-800">Tim Produksi Profesional</h3>
                        <p class="mt-4 text-gray-600 leading-relaxed">
                            Tenaga produksi berpengalaman memastikan kualitas sesuai standar
                            <span class="font-medium text-green-700">CPKB</span> dengan konsistensi tinggi.
                        </p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-12">
                    <div class="relative">
                        <span class="block text-6xl md:text-7xl font-extrabold text-green-400 mb-4">03</span>
                        <h3 class="text-2xl font-semibold text-gray-800">Gudang Penyimpanan Khusus</h3>
                        <p class="mt-4 text-gray-600 leading-relaxed">
                            Penyimpanan bahan baku, kemasan, dan produk jadi diatur dalam
                            <span class="font-medium text-green-700">zona khusus</span> untuk menjaga kualitas dan
                            keamanan.
                        </p>
                    </div>
                    <div>
                        <img src="{{ asset('images/gudang.png') }}" alt="Gudang Penyimpanan"
                            class="rounded-2xl shadow-lg w-full max-w-[500px] mx-auto transform hover:scale-105 transition duration-500">
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-12">
                    <div class="order-2 md:order-1">
                        <img src="{{ asset('images/mesin.png') }}" alt="Mesin & Peralatan Canggih"
                            class="rounded-2xl shadow-lg w-full max-w-[500px] mx-auto transform hover:scale-105 transition duration-500">
                    </div>
                    <div class="order-1 md:order-2 relative">
                        <span class="block text-6xl md:text-7xl font-extrabold text-green-400 mb-4">04</span>
                        <h3 class="text-2xl font-semibold text-gray-800">Mesin & Peralatan Canggih</h3>
                        <p class="mt-4 text-gray-600 leading-relaxed">
                            Mesin modern dengan teknologi
                            <span class="font-medium text-green-700">otomatisasi tinggi</span> mendukung kapasitas besar
                            dan hasil berkualitas premium.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="why-us" class="py-20 bg-white">
        <div class="w-full mx-auto px-6 md:px-12 text-center">
            <!-- Judul -->
            <h2 class="text-3xl md:text-5xl font-bold text-green-600 mb-4">
                CARA MEMULAI MAKLON
            </h2>
            <div class="w-24 h-1.5 bg-green-600 mx-auto rounded-full mb-12"></div>

            <div class="max-w-6xl mx-auto space-y-20">
                <!-- Baris Pertama -->
                <div class="relative flex flex-wrap items-center justify-center">
                    <!-- garis horizontal hanya tampil di desktop -->
                    <div class="absolute top-1/2 w-full border-t-2 border-dashed border-green-200 hidden lg:block"></div>

                    <!-- Step Item -->
                    <div class="relative w-full sm:w-1/2 lg:w-1/4 px-6 text-center mb-10 group">
                        <div
                            class="bg-white inline-flex items-center justify-center p-6 rounded-full shadow-md z-10 transition-transform duration-300 group-hover:scale-110 group-hover:shadow-xl">
                            <img src="images/consul1.png" alt="Step 1" class="w-16 h-16">
                        </div>
                        <h3 class="mt-4 font-semibold text-green-700">1. Konsultasi Konsep Produk</h3>
                    </div>

                    <div class="relative w-full sm:w-1/2 lg:w-1/4 px-6 text-center mb-10 group">
                        <div
                            class="bg-white inline-flex items-center justify-center p-6 rounded-full shadow-md z-10 transition-transform duration-300 group-hover:scale-110 group-hover:shadow-xl">
                            <img src="images/produk.png" alt="Step 2" class="w-16 h-16">
                        </div>
                        <h3 class="mt-4 font-semibold text-green-700">2. Pembuatan Sampel Produk</h3>
                    </div>

                    <div class="relative w-full sm:w-1/2 lg:w-1/4 px-6 text-center mb-10 group">
                        <div
                            class="bg-white inline-flex items-center justify-center p-6 rounded-full shadow-md z-10 transition-transform duration-300 group-hover:scale-110 group-hover:shadow-xl">
                            <img src="images/payment.png" alt="Step 3" class="w-16 h-16">
                        </div>
                        <h3 class="mt-4 font-semibold text-green-700">3. Pembayaran Biaya Maklon</h3>
                    </div>

                    <div class="relative w-full sm:w-1/2 lg:w-1/4 px-6 text-center mb-10 group">
                        <div
                            class="bg-white inline-flex items-center justify-center p-6 rounded-full shadow-md z-10 transition-transform duration-300 group-hover:scale-110 group-hover:shadow-xl">
                            <img src="images/legalitas.png" alt="Step 4" class="w-12 h-16">
                        </div>
                        <h3 class="mt-4 font-semibold text-green-700">4. Legalitas Perizinan</h3>
                    </div>
                </div>

                <!-- Baris Kedua -->
                <div class="relative flex flex-wrap items-center justify-center">
                    <div class="absolute top-1/2 w-full border-t-2 border-dashed border-green-200 hidden lg:block"></div>

                    <div class="relative w-full sm:w-1/2 lg:w-1/4 px-6 text-center mb-10 group">
                        <div
                            class="bg-white inline-flex items-center justify-center p-6 rounded-full shadow-md z-10 transition-transform duration-300 group-hover:scale-110 group-hover:shadow-xl">
                            <img src="images/package.png" alt="Step 5" class="w-12 h-14">
                        </div>
                        <h3 class="mt-4 font-semibold text-green-700">5. Desain Kemasan</h3>
                    </div>

                    <div class="relative w-full sm:w-1/2 lg:w-1/4 px-6 text-center mb-10 group">
                        <div
                            class="bg-white inline-flex items-center justify-center p-6 rounded-full shadow-md z-10 transition-transform duration-300 group-hover:scale-110 group-hover:shadow-xl">
                            <img src="images/prosesproduksi.png" alt="Step 6" class="w-16 h-16">
                        </div>
                        <h3 class="mt-4 font-semibold text-green-700">6. Proses Produksi</h3>
                    </div>

                    <div class="relative w-full sm:w-1/2 lg:w-1/4 px-6 text-center mb-10 group">
                        <div
                            class="bg-white inline-flex items-center justify-center p-6 rounded-full shadow-md z-10 transition-transform duration-300 group-hover:scale-110 group-hover:shadow-xl">
                            <img src="images/QC.png" alt="Step 7" class="w-16 h-16">
                        </div>
                        <h3 class="mt-4 font-semibold text-green-700">7. Quality Control</h3>
                    </div>

                    <div class="relative w-full sm:w-1/2 lg:w-1/4 px-6 text-center mb-10 group">
                        <div
                            class="bg-white inline-flex items-center justify-center p-6 rounded-full shadow-md z-10 transition-transform duration-300 group-hover:scale-110 group-hover:shadow-xl">
                            <img src="images/shipping.png" alt="Step 8" class="w-16 h-10">
                        </div>
                        <h3 class="mt-4 font-semibold text-green-700">8. Pengiriman Produk</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>
    </section>
    <section id="why-us" class="py-5 bg-white">
        <div class="w-full mx-auto px-6 md:px-12 text-center">
            <h2 class="text-3xl md:text-5xl font-semibold text-green-600 mb-6">
                HUBUNGI KAMI
            </h2>
        </div>
        <div class="max-w-6xl mx-auto">
            <div class="w-20 h-2 bg-green-600 mx-auto mt-2 rounded-full mb-5"></div>
            <div class="w-full mx-auto px-6 grid grid-cols-1 md:grid-cols-2 items-center gap-10">
                <div class="bg-white rounded-2xl shadow p-6">
                    <h3 class="text-lg font-semibold mb-4 text-gray-700">Kirimkan pesan kepada kami</h3>

                    {{-- Notifikasi sukses --}}
                    @if (session('success'))
                        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-lg">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('pesan.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <input type="text" name="nama" placeholder="Nama"
                            class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                            required>

                        <input type="email" name="email" placeholder="E-mail"
                            class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                            required>

                        <input type="text" name="whatsapp" placeholder="No Whatsapp"
                            class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">

                        <textarea name="pesan" placeholder="Pesan" rows="4"
                            class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" required></textarea>

                        <button type="submit"
                            class="w-full bg-green-600 hover:bg-green-500 text-white font-semibold py-2 px-4 rounded-lg shadow transition">
                            Kirim
                        </button>
                    </form>
                </div>

                <!-- FAQ -->
                <div class="space-y-4">

                    <!-- Item -->
                    <details class="bg-white rounded-xl shadow p-4 hover:drop-shadow-lg">
                        <summary class="cursor-pointer font-medium text-gray-700 flex items- justify-between">
                            Apa itu maklon Herbal?
                        </summary>
                        <p class="mt-2 text-green-600 text-left">Maklon herbal adalah jasa produksi produk kosmetik
                            dan
                            skincare sesuai brand Anda.</p>
                    </details>

                    <details class="bg-white rounded-xl shadow p-4 hover:drop-shadow-lg">
                        <summary class="cursor-pointer font-medium text-gray-700 flex items- justify-between">
                            Berapa minimal order quantity di Phytomed Neo Farma?
                        </summary>
                        <p class="mt-2 text-green-600 text-left">Minimal order quantity biasanya ditentukan sesuai
                            jenis
                            produk dan formulasi.</p>
                    </details>

                    <details class="bg-white rounded-xl shadow p-4  hover:drop-shadow-lg">
                        <summary class="cursor-pointer font-medium text-gray-700 flex items- justify-between text-left">
                            Apakah Phytomed Neo Farma membantu proses pendaftaran BPOM, HAKI dan sertifikasi
                            Halal?
                        </summary>
                        <p class="mt-2  text-green-600 text-left">Ya, kami membantu seluruh proses legalitas dan
                            sertifikasi.
                        </p>
                    </details>

                    <details class="bg-white rounded-xl shadow p-4 hover:drop-shadow-lg">
                        <summary class="cursor-pointer font-medium text-gray-700 flex items- justify-between">
                            Apakah Dua Naga Kosmetindo menyediakan wadah dan kemasan sekaligus desain?
                        </summary>
                        <p class="mt-2 text-green-600 text-left">Kami menyediakan berbagai pilihan wadah, kemasan, dan
                            desain
                            sesuai kebutuhan.</p>
                    </details>

                    <details class="bg-white rounded-xl shadow p-4 hover:shadow-lg">
                        <summary class="cursor-pointer font-medium text-gray-700 flex items- justify-between">
                            Bolehkah saya membawa kemasan atau wadah sendiri?
                        </summary>
                        <p class="mt-2 text-green-600 text-left">Bisa, Anda boleh membawa wadah atau kemasan sesuai
                            keinginan.
                        </p>
                    </details>

                    <details class="bg-white rounded-xl shadow p-4 hover:shadow-lg">
                        <summary class="cursor-pointer font-medium text-gray-700 flex items- justify-between text-left">
                            Bagaimana saya memulai bekerjasama dengan maklon Phytomed Neo Farma?
                        </summary>
                        <p class="mt-2  text-green-600 text-left">Cukup hubungi tim kami melalui form atau WhatsApp,
                            lalu
                            konsultasikan kebutuhan Anda.</p>
                    </details>

                </div>
            </div>
        </div>
    </section>
@endsection
<!-- Copyright -->
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            autoplay: {
                delay: 3000,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
@endpush
