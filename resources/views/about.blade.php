@extends('layouts.app')

@push('styles')
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush

@section('content')
    <!-- HERO -->
    <section class="relative h-[400px] flex items-center justify-center text-white bg-cover bg-center"
        style="background-image: url('{{ asset('images/bgtentangkami.png') }}');">
        <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/50 to-black/80"></div>
        <div class="relative z-10 text-center px-4" data-aos="fade-up">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-4">Tentang Kami</h1>
            <p class="text-lg md:text-xl mb-6 text-gray-200">Phytomed Neo Farma</p>
        </div>
    </section>

    <!-- ABOUT -->
  <section id="about" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 md:px-12">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Text -->
            <div class="space-y-6" data-aos="fade-right">
                <h3 class="text-3xl font-bold text-gray-800">Apa itu Phytomed Neo Farma?</h3>
                <p class="text-gray-600 leading-relaxed">
                    <strong>Phytomed Neo Farma</strong> merupakan pabrik herbal yang bergerak di bidang <em>maklon produk herbal, kosmetik, dan suplemen kesehatan</em>. Kami hadir sebagai mitra bagi Anda yang ingin memiliki brand sendiri dengan jaminan kualitas dan legalitas resmi.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Dengan fasilitas produksi yang modern serta tenaga ahli di bidang farmasi dan bioteknologi, kami memastikan setiap produk dibuat sesuai standar <strong>CPOTB (Cara Pembuatan Obat Tradisional yang Baik)</strong> dan memenuhi regulasi <strong>BPOM</strong> serta <strong>Halal MUI</strong>.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Tidak hanya itu, kami juga mendampingi Anda dalam seluruh proses pengembangan — mulai dari riset formula, desain kemasan, hingga pengurusan legalitas seperti <strong>HKI, PIRT, dan BPOM</strong>. Tujuan kami adalah membantu Anda membangun merek herbal yang kuat, terpercaya, dan berdaya saing tinggi di pasar nasional maupun internasional.
                </p>
            </div>

            <!-- Image -->
            <div class="flex justify-center" data-aos="fade-left">
                <img src="{{ asset('images/konten3.png') }}" alt="Tentang Kami"
                    class="rounded-2xl shadow-xl w-full max-w-md hover:scale-105 transition-transform duration-500">
            </div>
        </div>

        <!-- Divider -->
        <div class="my-16 border-t border-gray-200"></div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Image -->
            <div class="flex justify-center order-2 md:order-1" data-aos="fade-right">
                <img src="{{ asset('images/konten2.jpg') }}" alt="Konsultasi Produk"
                    class="rounded-2xl shadow-xl w-full max-w-md hover:scale-105 transition-transform duration-500">
            </div>

            <!-- Text -->
            <div class="space-y-6 order-1 md:order-2" data-aos="fade-left">
                <h3 class="text-3xl font-bold text-gray-800">Konsultasi Produk Gratis</h3>
                <p class="text-gray-600 leading-relaxed">
                    Kami memahami bahwa memulai bisnis di bidang herbal membutuhkan banyak pertimbangan. Oleh karena itu, <strong>Phytomed Neo Farma</strong> menyediakan layanan <strong>konsultasi gratis</strong> bagi Anda yang ingin mengembangkan produk impian tanpa harus memulai dari nol.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Tim kami akan membantu Anda menentukan formula yang tepat, bahan baku berkualitas, serta strategi branding yang sesuai dengan target pasar Anda. Baik Anda pemula maupun brand yang ingin memperluas lini produk, kami siap menjadi partner yang andal dalam setiap langkah.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Dengan pendekatan profesional dan fleksibel, kami memastikan setiap klien mendapatkan solusi terbaik — dari ide hingga produk siap edar.
                </p>
            </div>
        </div>
    </div>
</section>


    <!-- FORM & FAQ -->
    <section id="why-us" class="py-20 bg-white">
        <div class="w-full max-w-6xl mx-auto px-6 md:px-12 text-center">
            <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-10 items-start">

                <!-- Form -->
                <div class="bg-gray-50 rounded-2xl shadow p-6" data-aos="fade-up">
                    <h3 class="text-lg font-semibold mb-4 text-gray-700">Kirimkan pesan kepada kami</h3>
                    @if (session('success'))
                        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-lg">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('pesan.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <input type="text" name="nama" placeholder="Nama"
                            class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-emerald-500" required>
                        <input type="email" name="email" placeholder="E-mail"
                            class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-emerald-500" required>
                        <input type="text" name="whatsapp" placeholder="No Whatsapp"
                            class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-emerald-500">
                        <textarea name="pesan" placeholder="Pesan" rows="4"
                            class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-emerald-500" required></textarea>
                        <button type="submit"
                            class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-semibold py-2 px-4 rounded-lg shadow transition">
                            Kirim
                        </button>
                    </form>
                </div>

                <!-- FAQ -->
                <div class="space-y-4" data-aos="fade-up" data-aos-delay="200">
                    @foreach ([['q' => 'Apa itu maklon Herbal?', 'a' => 'Maklon herbal adalah jasa produksi produk herbal & skincare sesuai brand Anda.'], ['q' => 'Berapa minimal order quantity?', 'a' => 'Minimal order quantity ditentukan sesuai jenis produk.'], ['q' => 'Apakah bantu BPOM & HAKI?', 'a' => 'Ya, kami membantu seluruh proses legalitas & sertifikasi.'], ['q' => 'Apakah menyediakan wadah & kemasan?', 'a' => 'Kami menyediakan berbagai pilihan wadah & desain.'], ['q' => 'Bolehkah membawa kemasan sendiri?', 'a' => 'Bisa, Anda boleh membawa wadah sesuai keinginan.'], ['q' => 'Bagaimana memulai kerjasama?', 'a' => 'Cukup hubungi tim kami melalui form atau WhatsApp.']] as $item)
                        <details class="bg-gray-50 rounded-xl shadow p-4 hover:drop-shadow-lg transition">
                            <summary class="cursor-pointer font-medium text-gray-700">{{ $item['q'] }}</summary>
                            <p class="mt-2 text-emerald-600 text-left">{{ $item['a'] }}</p>
                        </details>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- CLIENTS -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-10 text-gray-800" data-aos="fade-down">Klien Kami</h2>
            <div class="swiper mySwiper" data-aos="zoom-in">
                <div class="swiper-wrapper">
                    @foreach (['huangyu.png', 'nafadent.png', 'pyhtov.png', 'ze.png', 'permata.png', 'phytoya.png', 'kyza.png', 'fimel.png'] as $logo)
                        <div class="swiper-slide flex justify-center">
                            <div
                                class="bg-white shadow-md rounded-xl p-6 flex items-center justify-center hover:scale-105 transition">
                                <img src="{{ asset('images/' . $logo) }}" class="h-16 object-contain" alt="Klien">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false
            },
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                640: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 4
                }
            }
        });
    </script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 1000
        });
    </script>
@endpush
