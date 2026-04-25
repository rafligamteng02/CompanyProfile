@extends('layouts.app')
@push('styles')
@endpush
@section('content')
    <section class="relative h-[400px] flex items-center justify-center text-white bg-cover bg-center"
        style="background-image: url('{{ asset('images/konten2.jpg') }}');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10 text-center px-4">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Kontak Kami</h1>
            <p class="text-lg md:text-xl mb-6">Phytomed Neo Farma</p>
            <a href="https://wa.me/6281234567890?text=Halo%20saya%20tertarik%20dengan%20produk%20Anda" target="_blank"
                class="flex items-center gap-2 bg-green-500 hover:bg-green-600 text-white px-5 py-3 rounded-full shadow-lg transition text-lg font-semibold mt-4 justify-center">
                <img src="{{ asset('images/logowa.png') }}" alt="WhatsApp" class="w-6 h-6">
                Chat via WhatsApp
            </a>
        </div>
    </section>
    <section id="why-us" class="py-10 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">

                <!-- Form -->
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

                <!-- Maps -->
                <div class="w-full h-80 md:h-full rounded-2xl overflow-hidden shadow-lg">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.7375552118824!2d110.74962827476398!3d-7.6035135924114465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a15078fba100f%3A0x2c0f28c1767869e!2sPT.%20PHYTOMED%20NEO%20FARMA!5e0!3m2!1sid!2sid!4v1757556045259!5m2!1sid!2sid"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>
    </section>
    <!-- FAQ -->
    <div class="space-y-4">
    </div>
    </div>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endsection
@push('scripts')
@endpush
