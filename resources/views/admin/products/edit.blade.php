@extends('layouts.sidebar')

@section('title', 'Edit Produk')
@section('header', 'Edit Produk')

@section('content')
    <div class="bg-white p-6 rounded-2xl shadow">
        <h2 class="text-xl font-semibold mb-4">Edit Produk</h2>

        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Nama Produk -->
            <div class="mb-4">
                <label for="name" class="block font-medium mb-2">Nama Produk</label>
                <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}"
                    class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>

              <!-- Upload / Ganti Gambar -->
            <div class="mb-4">
                <label for="cover" class="block font-medium mb-2">Gambar Produk</label>
                
                <!-- Preview gambar lama -->
                @if ($product->cover)
                    <div class="mb-2">
                        <p class="text-sm text-gray-600 mb-1">Gambar saat ini:</p>
                        <img src="{{ asset('storage/' . $product->cover) }}" alt="Gambar Produk" class="w-40 h-40 object-cover rounded-lg shadow">
                    </div>
                @endif

                <!-- Input untuk upload gambar baru -->
                <input type="file" name="cover" id="cover"
                    class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                    accept="image/*" onchange="previewImage(event)">

                <!-- Preview gambar baru -->
                <div class="mt-2">
                    <img id="newImagePreview" src="#" alt="Preview Gambar Baru" class="hidden w-40 h-40 object-cover rounded-lg shadow">
                </div>
            </div>

            <!-- Harga -->
            <div class="mb-4">
                <label for="price" class="block font-medium mb-2">Harga</label>
                <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}"
                    class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>

            <!-- Stok -->
            <div class="mb-4">
                <label for="stock" class="block font-medium mb-2">Stok</label>
                <input type="number" name="stock" id="stock" value="{{ old('stock', $product->stock) }}"
                    class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>

            <!-- Deskripsi -->
            <div class="mb-4">
                <label for="description" class="block font-medium mb-2">Deskripsi</label>
                <textarea name="description" id="description" rows="4"
                    class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-green-500">{{ old('description', $product->description) }}</textarea>
            </div>

            <!-- Spesifikasi -->
            <div class="mb-4">
                <label for="spesification" class="block font-medium mb-2">Spesifikasi Produk</label>
                <textarea name="spesification" id="spesification" rows="4"
                    class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-green-500">{{ old('spesification', $product->spesification) }}</textarea>
            </div>

          

            <!-- Tombol Aksi -->
            <div class="flex justify-between mt-6">
                <a href="{{ route('products.index') }}"
                    class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition">
                    Kembali
                </a>
                <button type="submit"
                    class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>

    <!-- Script Preview Gambar Baru -->
    <script>
        function previewImage(event) {
            const reader = new FileReader();
            const imageField = document.getElementById('newImagePreview');

            reader.onload = function() {
                if (reader.readyState === 2) {
                    imageField.src = reader.result;
                    imageField.classList.remove('hidden');
                }
            }

            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
