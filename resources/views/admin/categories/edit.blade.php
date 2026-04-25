@extends('layouts.admin')

@section('title', 'Edit Kategori')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h1 class="text-xl font-bold mb-4">Edit Kategori</h1>

    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-medium">Nama Kategori</label>
            <input type="text" name="name" value="{{ old('name', $category->name) }}" 
                   class="w-full border rounded px-3 py-2" required>
        </div>

        <button type="submit" 
            class="px-4 py-2 bg-emerald-600 text-white rounded hover:bg-emerald-700">
            Update
        </button>
    </form>
</div>
@endsection
