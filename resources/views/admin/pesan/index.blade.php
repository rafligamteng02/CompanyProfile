@extends('layouts.sidebar')

@section('content')
    <div class="bg-white min-h-screen p-6 rounded-2xl shadow-lg">
        <h1 class="text-xl font-bold mb-8 text-gray-700 flex items-center gap-2">
            Pesan Masuk
        </h1>

        {{-- Notifikasi --}}
        @if (session('success'))
            <div class="mb-6 p-4 rounded-lg bg-green-100 text-green-700 border border-green-300 shadow">
                ✅ {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-300 text-sm text-gray-700">
                <thead class="bg-gray-100 hidden md:table-header-group">
                    <tr>
                        <th class="px-4 py-2 border">No</th>
                        <th class="px-4 py-2 border">Nama</th>
                        <th class="px-4 py-2 border">E-mail</th>
                        <th class="px-4 py-2 border">Whatsapp</th>
                        <th class="px-4 py-2 border">Pesan</th>
                        <th class="px-4 py-2 border">Dikirim</th>
                        <th class="px-4 py-2 border text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pesans as $index => $pesan)
                        <tr class="flex flex-col md:table-row border-b md:border-0">
                            {{-- No --}}
                            <td
                                class="px-4 py-2 border md:table-cell text-center font-semibold before:content-['No:'] md:before:content-none before:block md:before:hidden">
                                {{ $pesans->firstItem() + $index }}
                            </td>

                            {{-- Nama --}}
                            <td
                                class="px-4 py-2 border md:table-cell before:content-['Nama:'] md:before:content-none before:block md:before:hidden">
                                {{ $pesan->nama }}
                            </td>

                            {{-- Email --}}
                            <td
                                class="px-4 py-2 border md:table-cell before:content-['Email:'] md:before:content-none before:block md:before:hidden">
                                {{ $pesan->email }}
                            </td>

                            {{-- Whatsapp --}}
                            <td
                                class="px-4 py-2 border md:table-cell before:content-['Whatsapp:'] md:before:content-none before:block md:before:hidden">
                                @if ($pesan->whatsapp)
                                    <a href="https://wa.me/{{ $pesan->whatsapp }}" target="_blank"
                                        class="text-green-600 hover:underline">
                                        {{ $pesan->whatsapp }}
                                    </a>
                                @else
                                    <span class="text-gray-400 italic">-</span>
                                @endif
                            </td>

                            {{-- Pesan --}}
                            <td
                                class="px-4 py-2 border md:table-cell before:content-['Pesan:'] md:before:content-none before:block md:before:hidden">
                                {{ $pesan->pesan }}
                            </td>

                            {{-- Dikirim --}}
                            <td
                                class="px-4 py-2 border md:table-cell before:content-['Dikirim:'] md:before:content-none before:block md:before:hidden text-gray-500">
                                {{ $pesan->created_at->diffForHumans() }}
                            </td>

                            {{-- Aksi --}}
                            <td
                                class="px-4 py-2 border md:table-cell before:content-['Aksi:'] md:before:content-none before:block md:before:hidden text-center">
                                <form action="{{ route('pesan.destroy', $pesan->id) }}" method="POST"
                                    onsubmit="return confirm('Hapus pesan ini?')" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        class="px-3 py-1 bg-red-600 hover:bg-red-500 text-white rounded-lg shadow text-xs">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-6 text-center text-gray-500">
                                📭 Belum ada pesan
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- Pagination --}}
        <div class="mt-4 flex flex-col md:flex-row justify-between items-start md:items-center text-sm text-gray-600 gap-2">
            <p>
                Menampilkan <span class="font-medium">{{ $pesans->firstItem() }}</span>
                - <span class="font-medium">{{ $pesans->lastItem() }}</span>
                dari <span class="font-medium">{{ $pesans->total() }}</span> pesan
            </p>
            <div>
                {{ $pesans->links() }}
            </div>
        </div>
    </div>
@endsection
