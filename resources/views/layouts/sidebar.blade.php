<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('-translate-x-full');
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="flex bg-gray-300 min-h-screen text-gray-800">

    {{-- Sidebar --}}
    <aside id="sidebar"
        class="fixed inset-y-0 left-0 w-64 bg-gradient-to-b from-emerald-600 to-emerald-700 text-white transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out z-50 flex flex-col justify-between">
        <div class="p-6">
            <a href="{{ url('/admin/pesan') }}">
                <h2 class="text-xl font-bold mb-6">Admin Panel</h2>
            </a>
            <ul class="space-y-3">
                <li>
                    <a href="{{ url('/admin/pesan') }}"
                        class="flex items-center gap-2 p-4 rounded-lg transition-colors duration-300 ease-in-out
                        {{ request()->is('admin/pesan')
                            ? 'bg-emerald-700 text-white'
                            : 'text-gray-200 hover:bg-emerald-600 hover:text-white' }}">
                        <!-- Icon Pesan -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                        <span>Pesan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/admin/products') }}"
                        class="flex items-center gap-2 p-4 rounded-lg transition-colors duration-300 ease-in-out
                        {{ request()->is('admin/products*')
                            ? 'bg-emerald-700 text-white'
                            : 'text-gray-200 hover:bg-emerald-600 hover:text-white' }}">
                        <!-- Icon Produk -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                        </svg>
                        <span>Produk</span>
                    </a>
                </li>
                   <li>
        <a href="{{ url('/admin/categories') }}"
            class="flex items-center gap-2 p-4 rounded-lg transition-colors duration-300 ease-in-out
            {{ request()->is('admin/categories*')
                ? 'bg-emerald-700 text-white'
                : 'text-gray-200 hover:bg-emerald-600 hover:text-white' }}">
            <!-- Icon Kategori -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 7.5h18M3 12h18M3 16.5h18" />
            </svg>
            <span>Kategori</span>
        </a>
    </li>
            </ul>
        </div>

        {{-- Logout --}}
        <form action="{{ route('logout') }}" method="POST" class="m-6">
            @csrf
            <button type="submit"
                class="w-full flex items-center gap-2 p-4 rounded-lg bg-gray-200 text-red-600 text-left hover:bg-red-600 hover:text-white transition-colors duration-300 ease-in-out">
                <!-- Icon logout -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6A2.25 2.25 0 0 0 5.25 5.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m0-6l4.5 4.5m0 0l-4.5 4.5m4.5-4.5H9" />
                </svg>
                <span>Logout</span>
            </button>
        </form>
    </aside>

    {{-- Konten Utama --}}
    <div class="flex-1 flex flex-col md:ml-64">
        {{-- Header --}}
        <header class="bg-white shadow p-4 flex items-center justify-between md:hidden">
            <button onclick="toggleSidebar()" class="p-2 rounded-lg bg-emerald-600 text-white">
                ☰
            </button>
            <h1 class="font-bold text-lg">Admin Panel</h1>
        </header>

        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>

</body>

</html>
