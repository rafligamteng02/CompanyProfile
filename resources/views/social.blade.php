@extends('layouts.app')

@push('styles')
    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[400px] flex items-center justify-center text-white bg-cover bg-center overflow-hidden"
        style="background-image: url('{{ asset('images/social1.png') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
        <div class="relative z-10 text-center px-4" data-aos="fade-up" data-aos-duration="1000">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-4 tracking-wide">Kegiatan Sosial</h1>
            <p class="text-lg md:text-xl mb-6 italic">Phytomed Neo Farma</p>
            <div class="w-24 h-1 bg-green-400 mx-auto rounded-full"></div>
        </div>
    </section>

    <!-- Konten Utama -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <!-- Gambar -->
            <div data-aos="fade-right" data-aos-duration="1200">
                <img src="{{ asset('images/image.png') }}" alt="Bantuan Sosial Palestina"
                    class="rounded-2xl shadow-lg w-full object-cover transform transition duration-500 hover:scale-105 hover:shadow-2xl">
            </div>

            <!-- Deskripsi -->
            <div data-aos="fade-left" data-aos-duration="1200">
                <h2 class="text-3xl font-semibold text-gray-800 mb-4 border-l-4 border-green-500 pl-3">
                    Situasi Terkini Di Palestina
                </h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Rakyat Palestina saat ini tengah menghadapi salah satu krisis kemanusiaan paling parah di dunia. Sejak
                    Oktober 2023, lebih dari <span class="font-semibold text-red-600">56.850 nyawa</span> telah hilang akibat serangan brutal
                    yang dilakukan oleh Zionis Israel. Kini, banyak dari mereka terpaksa tinggal di kamp-kamp pengungsian
                    yang padat, di mana kebutuhan dasar seperti pangan, air bersih, dan perawatan medis sangat terbatas.
                </p>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Musim dingin yang semakin mendekat memperburuk kondisi ini, membuat kehidupan para pengungsi semakin berat.
                    Bantuan makanan hangat sangat dibutuhkan untuk meringankan penderitaan mereka. Kami berkomitmen untuk
                    menyediakan makanan yang dapat membantu memenuhi kebutuhan dasar dan memberikan sedikit kelegaan di tengah
                    kondisi yang sangat sulit ini.
                </p>
                <a href="#dokumentasi"
                    class="inline-block mt-4 bg-green-600 text-white px-6 py-3 rounded-full shadow-lg hover:bg-green-700 transition duration-300 hover:scale-105">
                    Lihat Dokumentasi
                </a>
            </div>
        </div>
    </section>

    <!-- Dokumentasi -->
    <section id="dokumentasi" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-semibold text-gray-800 mb-10" data-aos="fade-up" data-aos-duration="1000">
                Dokumentasi Kegiatan
            </h2>

            <!-- Swiper -->
            <div class="swiper mySwiper" data-aos="fade-up" data-aos-duration="1200">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <img src="{{ asset('images/social3.png') }}" alt="Bantuan 1"
                            class="w-full h-64 rounded-xl shadow-lg object-cover transform transition duration-500 hover:scale-105 hover:shadow-2xl">
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <img src="{{ asset('images/social4.png') }}" alt="Bantuan 2"
                            class="w-full h-64 rounded-xl shadow-lg object-cover transform transition duration-500 hover:scale-105 hover:shadow-2xl">
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <img src="{{ asset('images/social5.png') }}" alt="Bantuan 3"
                            class="w-full h-64 rounded-xl shadow-lg object-cover transform transition duration-500 hover:scale-105 hover:shadow-2xl">
                    </div>
                </div>

                <!-- Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                }
            }
        });
    </script>
@endpush
