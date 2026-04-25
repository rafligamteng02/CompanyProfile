@extends('layouts.sidebar')

@section('title', 'Tambah Kategori')

@push('styles')
    <!-- Tambahkan AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush

@section('content')
<div class="bg-white p-8 rounded-2xl shadow-xl max-w-xl mx-auto" data-aos="zoom-in" data-aos-duration="700">
    <!-- Judul -->
    <h1 class="text-2xl font-extrabold text-emerald-700 mb-6 flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-emerald-600" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 4v16m8-8H4" />
        </svg>
        Tambah Kategori Baru
    </h1>

    <!-- Form -->
    <form action="{{ route('admin.categories.store') }}" method="POST" class="space-y-6" id="categoryForm">
        @csrf

        <!-- Nama Kategori -->
        <div data-aos="fade-right" data-aos-delay="100">
            <label class="block text-gray-700 text-sm font-semibold mb-2">Nama Kategori</label>
            <input type="text" name="name" placeholder="Masukkan nama kategori..."
                class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition duration-200" required>
        </div>

        <!-- Tombol -->
        <div class="flex justify-end items-center gap-3 pt-4" data-aos="fade-up" data-aos-delay="200">
            <a href="{{ route('admin.categories.index') }}"
                class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-200 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 19l-7-7 7-7" />
                </svg>
                Batal
            </a>

            <button type="submit" id="submitBtn"
                class="px-5 py-2 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition duration-200 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 animate-pulse" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" id="iconSave">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 13l4 4L19 7" />
                </svg>
                <span id="btnText">Simpan</span>
            </button>
        </div>
    </form>
</div>

@push('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();

    // Animasi tombol saat diklik
    document.getElementById('categoryForm').addEventListener('submit', function () {
        const btn = document.getElementById('submitBtn');
        const text = document.getElementById('btnText');
        const icon = document.getElementById('iconSave');

        btn.disabled = true;
        btn.classList.add('opacity-75', 'cursor-not-allowed');
        text.textContent = 'Menyimpan...';
        icon.classList.add('animate-spin');
    });
</script>
@endpush
@endsection
