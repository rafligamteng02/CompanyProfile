@extends('layouts.sidebar')

@section('title', 'Daftar Produk')
@section('header', 'Daftar Produk')

@section('content')
    <div class="bg-white min-h-screen p-6 rounded-2xl shadow-lg">

        {{-- Notifikasi --}}
        @if (session('success'))
            <div class="mb-6 p-4 rounded-lg bg-green-100 text-green-700 border border-green-300 shadow">
                ✅ {{ session('success') }}
            </div>
        @endif

        <div class="flex justify-between items-center mb-6">
            <h2 class="text-lg font-semibold text-gray-700"> List Produk</h2>
            <a href="{{ route('products.create') }}"
                class="px-4 py-2 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 shadow">
                + Tambah Produk
            </a>
        </div>

        {{-- Tabel Produk --}}
        <div class="overflow-x-auto">
            <table class="w-full border border-gray-300 text-sm text-left text-gray-700">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 border text-center">No.</th>
                        <th class="px-4 py-2 border text-center">Nama</th>
                        <th class="px-4 py-2 border text-center">Harga</th>
                        <th class="px-4 py-2 border text-center ">Stok</th>
                        <th class="px-4 py-2 border text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $index => $product)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 border text-center">
                                {{ $products->firstItem() + $index }}
                            </td>
                            <td class="px-4 py-2 border font-medium">{{ $product->name }}</td>
                            <td class="px-4 py-2 border">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                            <td class="px-4 py-2 border">{{ $product->stock }}</td>
                            <td class="px-4 py-2 border text-center">
                                <div class="flex justify-center gap-2">
                                    <a href="{{ route('products.edit', $product->id) }}"
                                        class="px-3 py-1 bg-blue-500 text-white rounded-lg shadow text-xs hover:bg-blue-600">
                                        Edit
                                    </a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                        onsubmit="return confirm('Yakin hapus produk ini?')" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="px-3 py-1 bg-red-600 hover:bg-red-500 text-white rounded-lg shadow text-xs">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-6 text-center text-gray-500">
                                📭 Belum ada produk
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- Pagination --}}
        <div class="mt-4 flex justify-between items-center text-sm text-gray-600">
            <p>
                Menampilkan <span class="font-medium">{{ $products->firstItem() ?? 0 }}</span>
                - <span class="font-medium">{{ $products->lastItem() ?? 0 }}</span>
                dari <span class="font-medium">{{ $products->total() }}</span> produk
            </p>
            <div>
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection
