<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body
    class="flex items-center justify-center min-h-screen bg-gradient-to-r from-emerald-500 via-emerald-600 to-emerald-700">

    <!-- Card -->
    <div class="bg-white/90 backdrop-blur-md p-8 rounded-2xl shadow-2xl w-full max-w-md">
        <!-- Logo / Icon -->
        <div class="flex justify-center mb-6">
            <div class="w-16 h-16 bg-emerald-600 flex items-center justify-center rounded-full shadow-lg">
                <!-- Icon User -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="white" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
            </div>
        </div>

        <h2 class="text-2xl font-bold mb-2 text-center text-emerald-700">Login</h2>
        <p class="text-sm text-gray-500 mb-6 text-center">Silakan login untuk melanjutkan</p>

        @if (session('success'))
            <div class="mb-4 p-3 rounded-lg bg-green-100 border border-green-400 text-green-700">
                <h3 class="font-semibold">Berhasil!</h3>
                <p>{{ session('success') }}</p>
            </div>
        @endif


        <!-- Error Block -->
        @if ($errors->any())
            <div class="mb-4 p-3 rounded-lg bg-red-100 border border-red-400 text-red-700">
                <h3 class="font-semibold mb-1">Terjadi Kesalahan:</h3>
                <ul class="list-disc list-inside text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ url('/login') }}" class="space-y-4">
            @csrf
            <!-- Email -->
            <div>
                <label class="block text-gray-600 text-sm mb-1">Email</label>
                <input type="email" name="email" placeholder="Email"
                    class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 text-gray-700"
                    required>
            </div>

            <!-- Password -->
            <div>
                <label class="block text-gray-600 text-sm mb-1">Password</label>
                <input type="password" name="password" placeholder="••••••••"
                    class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 text-gray-700"
                    required>
            </div>

            <!-- Button -->
            <button type="submit"
                class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-semibold py-3 rounded-lg transition transform hover:scale-[1.02] shadow-md">
                Masuk
            </button>
        </form>

        <!-- Footer -->
        <p class="text-xs text-gray-500 text-center mt-6">© {{ date('Y') }} Admin Panel. All rights reserved.</p>
    </div>

</body>

</html>
