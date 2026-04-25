@extends('layouts.sidebar')

@section('title', 'Tambah Produk')
@section('header', 'Tambah Produk')

@push('styles')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush

@section('content')
<div class="bg-white p-8 rounded-2xl shadow-xl" data-aos="fade-up" data-aos-duration="600">
    <h2 class="text-2xl font-extrabold text-emerald-700 mb-6 flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
        </svg>
        Tambah Produk Baru
    </h2>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5" id="productForm">
        @csrf

        <!-- Nama Produk -->
        <div class="group" data-aos="fade-right" data-aos-delay="100">
            <label class="block text-gray-600 text-sm font-medium mb-1">Nama Produk</label>
            <input type="text" name="name" value="{{ old('name') }}"
                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition duration-200"
                placeholder="Masukkan nama produk..." required>
        </div>

        <!-- Cover Upload + Preview -->
        <div data-aos="fade-right" data-aos-delay="150">
            <label class="block text-gray-600 text-sm font-medium mb-1">Cover Produk</label>
            <input type="file" name="image" id="imageInput" accept="image/png, image/jpeg"
                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 transition duration-200" required />
            <div class="mt-3">
                <img id="previewImage" class="hidden rounded-xl border shadow-md max-h-48 object-cover" alt="Preview Gambar" />
            </div>
        </div>

        <!-- Kategori -->
        <div data-aos="fade-right" data-aos-delay="200">
            <label class="block text-gray-600 text-sm font-medium mb-1">Kategori</label>
            <select name="category_id"
                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 transition duration-200" required>
                <option value="" disabled selected>Pilih Kategori</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Harga & Stok -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5" data-aos="fade-right" data-aos-delay="250">
            <div>
                <label class="block text-gray-600 text-sm font-medium mb-1">Harga</label>
                <input type="number" name="price" value="{{ old('price') }}"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 transition duration-200"
                    placeholder="Masukkan harga..." required>
            </div>

            <div>
                <label class="block text-gray-600 text-sm font-medium mb-1">Stok</label>
                <input type="number" name="stock" value="{{ old('stock') }}"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 transition duration-200"
                    placeholder="Masukkan jumlah stok..." required>
            </div>
        </div>

        <!-- Deskripsi -->
        <div data-aos="fade-right" data-aos-delay="300">
            <label class="block text-gray-600 text-sm font-medium mb-1">Deskripsi</label>
            <textarea name="description" rows="4"
                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 transition duration-200"
                placeholder="Tuliskan deskripsi produk...">{{ old('description') }}</textarea>
        </div>

        <!-- Spesifikasi -->
        <div data-aos="fade-right" data-aos-delay="350">
            <label class="block text-gray-600 text-sm font-medium mb-1">Spesifikasi</label>
            <textarea name="spesification" rows="4"
                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 transition duration-200"
                placeholder="Tuliskan spesifikasi produk...">{{ old('spesification') }}</textarea>
        </div>

        <!-- Tombol -->
        <div class="flex justify-end gap-3 pt-4" data-aos="fade-up" data-aos-delay="400">
            <a href="{{ route('products.index') }}"
                class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-200 flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Batal
            </a>
            <button type="submit"
                class="px-4 py-2 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition duration-200 flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Simpan
            </button>
        </div>
    </form>
</div>

@push('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();

    // Preview gambar sebelum upload
    document.getElementById('imageInput').addEventListener('change', function (event) {
        const preview = document.getElementById('previewImage');
        const file = event.target.files[0];
        if (file) {
            preview.src = URL.createObjectURL(file);
            preview.classList.remove('hidden');
        } else {
            preview.src = '';
            preview.classList.add('hidden');
        }
    });
</script>
@endpush
@endsection
