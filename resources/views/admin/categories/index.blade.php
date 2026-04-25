@extends('layouts.sidebar')

@section('content')
  <div class="bg-white min-h-screen p-6 rounded-2xl shadow-lg">
    <h1 class="text-xl font-bold mb-4">Daftar Kategori</h1>

    <a href="{{ route('admin.categories.create') }}" 
       class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg shadow">
       + Tambah Kategori
    </a>

    <table class="w-full mt-6 border border-gray-200 rounded-lg overflow-hidden">
        <thead>
            <tr class="bg-gray-100 text-gray-700">
                <th class="border px-4 py-2">No.</th>
                <th class="border px-4 py-2">Name</th>
                <th class="border px-4 py-2">Slug</th>
                <th class="border px-4 py-2 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr class="hover:bg-gray-50">
                <td class="border px-4 py-2">{{ $category->id }}</td>
                <td class="border px-4 py-2">{{ $category->name }}</td>
                <td class="border px-4 py-2">{{ $category->slug }}</td>
                <td class="border px-4 py-2 text-center flex items-center justify-center gap-2">
                    <a href="{{ route('admin.categories.edit', $category) }}" 
                       class="px-3 py-1 bg-blue-500 text-white text-sm rounded-lg shadow hover:bg-blue-600 transition">
                         Edit
                    </a>
                    <form action="{{ route('admin.categories.destroy', $category) }}" 
                          method="POST" 
                          onsubmit="return confirm('Yakin hapus kategori ini?')">
                        @csrf @method('DELETE')
                        <button type="submit" 
                            class="px-3 py-1 bg-red-500 text-white text-sm rounded-lg shadow hover:bg-red-600 transition">
                             Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
