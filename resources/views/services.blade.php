@extends('layouts.app')

@push('styles')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush

@section('content')
    <!-- HERO FUTURISTIK -->
    <section class="relative min-h-[400px] flex items-center justify-center overflow-hidden bg-gradient-to-br from-emerald-600 via-emerald-500 to-teal-500 text-white">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(255,255,255,0.2),transparent_60%)]"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(0,0,0,0.25),transparent_70%)]"></div>

        <div class="relative z-10 text-center max-w-3xl px-6" data-aos="zoom-in">
            <h1 class="text-5xl md:text-6xl font-extrabold mb-4 drop-shadow-lg tracking-wide ">Layanan Premium Kami</h1>
            <p class="text-lg md:text-xl text-emerald-50 mb-8">Meningkatkan Bisnis Anda dengan Sentuhan Inovasi dan Dedikasi</p>
            <a href="#services"
               class="inline-block px-10 py-3 bg-white text-emerald-600 font-semibold rounded-full shadow-lg hover:bg-gray-100 transition transform hover:scale-105">
               Lihat Layanan
            </a>
        </div>
    </section>

    <section class="py-24 bg-gradient-to-b from-emerald-50 to-white text-center">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-gray-800 mb-12" data-aos="fade-down">Bagaimana Kami Bekerja</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                @foreach ([
                    ['no'=>'1','step'=>'Diskusi Awal','desc'=>'Kami memahami kebutuhan dan visi bisnis Anda.'],
                    ['no'=>'2','step'=>'Rencana Solusi','desc'=>'Kami susun strategi dan rencana pelaksanaan yang optimal.'],
                    ['no'=>'3','step'=>'Eksekusi','desc'=>'Proses implementasi berjalan sesuai jadwal dan kualitas terbaik.'],
                    ['no'=>'4','step'=>'Evaluasi','desc'=>'Kami melakukan pemantauan untuk memastikan hasil yang maksimal.']
                ] as $step)
                    <div class="relative bg-white p-8 rounded-2xl shadow hover:shadow-xl transition" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 150 }}">
                        <span class="absolute -top-5 left-1/2 transform -translate-x-1/2 bg-emerald-500 text-white font-bold w-10 h-10 flex items-center justify-center rounded-full shadow">{{ $step['no'] }}</span>
                        <h3 class="mt-6 text-xl font-semibold text-gray-800 mb-2">{{ $step['step'] }}</h3>
                        <p class="text-gray-600">{{ $step['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA ELEGAN -->
    <section class="relative py-24 bg-emerald-700 text-white text-center overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.15),transparent_70%)]"></div>
        <div class="relative z-10 max-w-3xl mx-auto" data-aos="fade-up">
            <h2 class="text-4xl font-bold mb-6">Jadikan Bisnis Anda Tumbuh Bersama Kami</h2>
            <p class="mb-8 text-emerald-100 text-lg">Hubungi kami untuk mendapatkan solusi herbal dan bisnis terbaik sesuai kebutuhan Anda.</p>
            <a href="/contact"
               class="px-10 py-4 bg-white text-emerald-700 font-semibold rounded-full shadow-lg hover:bg-gray-100 transition transform hover:scale-105">
               Konsultasi Sekarang
            </a>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 1000
        });
    </script>
@endpush
