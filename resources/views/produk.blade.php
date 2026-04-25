@extends('layouts.app')

@push('styles')
    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush

@section('content')
    <!-- HERO SECTION -->
    <section class="relative h-[450px] flex items-center justify-center text-white bg-cover bg-center"
        style="background-image: url('{{ asset('images/main.png') }}');">
        <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/40 to-black/80 backdrop-blur-sm"></div>

        <div class="relative z-10 text-center px-6" data-aos="zoom-in" data-aos-duration="1200">
            <h1 class="text-5xl md:text-7xl font-extrabold mb-4 tracking-wide drop-shadow-lg">
                Produk Kami
            </h1>
            <p class="text-lg md:text-2xl text-gray-200 mb-8 max-w-2xl mx-auto leading-relaxed">
                Rangkaian Produk Herbal Berkualitas untuk Menunjang Gaya Hidup Sehat Anda
            </p>
            <a href="#produk" 
               class="inline-block bg-emerald-600 hover:bg-emerald-700 px-6 py-3 rounded-full text-white font-semibold transition duration-300 shadow-lg hover:shadow-emerald-400/40">
               Jelajahi Sekarang
            </a>
        </div>
    </section>

    <!-- PRODUK SECTION -->
    <section id="produk" class="bg-gradient-to-b from-gray-200 to-white py-20">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-10">

            <!-- SIDEBAR -->
            <aside class="md:col-span-1 bg-white rounded-2xl shadow-lg p-6 border border-gray-100"
                   data-aos="fade-right" data-aos-delay="200">
                <h2 class="text-2xl font-bold mb-6 text-gray-800 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                    Kategori Produk
                </h2>

                <ul class="space-y-3">
                    @foreach ($categories as $kategori)
                        <li>
                            <a href="{{ route('produk.category',$kategori->slug) }}"
                               class="block px-4 py-2 rounded-lg hover:bg-emerald-50 hover:text-emerald-700 text-gray-700 transition-all duration-300 font-medium">
                                {{ $kategori->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>

            <!-- PRODUK GRID -->
            <main class="md:col-span-3">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

                    @foreach ($products as $produk)
                        <div class="group relative rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl bg-white transform hover:-translate-y-2 transition duration-500"
                             data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                             
                            <!-- IMAGE -->
                            <div class="overflow-hidden relative">
                                <img src="{{ asset('images/media/' . $produk->image) }}" alt="{{ $produk->name }}"
                                    class="w-full h-52 object-cover transform group-hover:scale-110 transition duration-700 ease-out">
                                
                                <!-- Overlay -->
                                <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
                                    <a href="{{ route('produk.show', $produk->slug) }}"
                                       class="bg-emerald-600 text-white px-4 py-2 rounded-full shadow hover:bg-emerald-700 transition">
                                       Lihat Detail
                                    </a>
                                </div>
                            </div>

                            <!-- CONTENT -->
                            <div class="p-5 text-center">
                                <h3 class="font-semibold text-lg text-gray-800 mb-2 group-hover:text-emerald-600 transition">
                                    {{ $produk->name }}
                                </h3>
                            </div>
                        </div>
                    @endforeach

                </div>
            </main>
        </div>
    </section>
@endsection

@push('scripts')
    <!-- AOS Init -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 1000,
            offset: 100,
        });
    </script>
@endpush
