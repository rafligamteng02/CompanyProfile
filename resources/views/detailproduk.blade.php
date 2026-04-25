@extends('layouts.app')

@push('styles')
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[400px] flex items-center justify-center text-white bg-cover bg-center"
        style="background-image: url('{{ asset('images/main.png') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
        <div class="relative z-10 text-center px-4">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Produk Kami</h1>
        </div>
    </section>

    <!-- Product Section -->
    <section class="max-w-6xl mx-auto py-12 px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

            <!-- Gambar Produk + Harga -->
            <div class="bg-white rounded-2xl shadow p-6 flex flex-col items-center justify-center text-center">
                <img 
                    src="{{ asset('images/media/' . $product->image) }}" 
                    alt="{{ $product->name }}" 
                    class="w-full h-auto max-w-md object-contain rounded-xl mb-4"
                >

                <!-- 💰 Harga di bawah gambar -->
                <div class="bg-green-50 border-l-4 border-green-500 p-4 rounded-xl w-full max-w-sm">
                    <h3 class="text-2xl font-bold text-green-700">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </h3>
                    <p class="text-sm text-gray-500">Harga sudah termasuk PPN</p>
                </div>
            </div>

            <!-- Detail Produk -->
            <div class="space-y-4">
                <p class="text-sm text-gray-500">
                    Kategori: <a href="#" class="text-green-600 hover:underline">{{ $category->name }}</a>
                </p>

                <h2 class="text-2xl font-semibold text-gray-800">
                    {{ $product->name }}
                </h2>

                <!-- Deskripsi -->
                <div>
                    <h3 class="font-semibold text-gray-800 mb-2">Deskripsi:</h3>
                    <ul class="list-disc list-inside space-y-1 text-gray-700">
                        {!! $product->description !!}
                    </ul>
                </div>
                
                <!-- Spesifikasi -->
                <div>
                    <h3 class="font-semibold text-gray-800 mb-2">Spesifikasi Produk:</h3>
                    <ul class="space-y-2 text-gray-700">
                        {!! $product->spesification !!}
                    </ul>
                </div>

                <!-- Tombol Pesan -->
                <a href="https://wa.me/6282133277356"
                   target="_blank"
                   class="inline-block bg-gradient-to-r from-green-500 to-green-700 
                          hover:from-emerald-500 hover:to-green-800 text-white px-10 py-3 
                          rounded-full shadow-lg font-semibold tracking-wide 
                          transition-all duration-500 transform 
                          hover:-translate-y-2 hover:shadow-2xl hover:scale-105">
                    Pesan Sekarang
                </a>

            </div>

        </div>
    </section>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endsection

@push('scripts')
@endpush
