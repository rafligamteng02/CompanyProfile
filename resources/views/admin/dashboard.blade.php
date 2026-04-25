@extends('layouts.sidebar')

@section('title', 'Dashboard')
@section('header', 'Dashboard')

@section('content')
    <div class="space-y-6">

        <!-- Pesan Terbaru -->
        <div class="bg-white p-6 rounded-2xl shadow">
            <h2 class="text-xl font-semibold mb-4">Pesan Terbaru</h2>
            <div class="overflow-x-auto">
                <table class="w-full text-left text-gray-700 text-sm">
                    <thead class="bg-gray-200 uppercase text-xs">
                        <tr>
                            <th class="px-4 py-2">Nama</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Pesan</th>
                            <th class="px-4 py-2">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recentPesans ?? [] as $pesan)
                            <tr class="border-b hover:bg-gray-50 transition">
                                <td class="px-4 py-2">{{ $pesan->nama }}</td>
                                <td class="px-4 py-2">{{ $pesan->email }}</td>
                                <td class="px-4 py-2 truncate max-w-xs">{{ $pesan->pesan }}</td>
                                <td class="px-4 py-2 text-gray-500">{{ $pesan->created_at->format('d M Y') }}</td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
