<header id="navbar" class="fixed w-full top-0 left-0 z-30 transition-all duration-300 bg-transparent">
    <div class="container mx-auto flex justify-between items-center py-5 px-8">
        <!-- Logo -->
        <div class="flex items-center">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logopy1.png') }}" alt="Logo" class="h-12 w-auto md:h-14">
            </a>
        </div>

        <!-- Navigation (Desktop) -->
        <nav class="hidden md:flex space-x-8 font-semibold ml-auto text-base tracking-wide"
            style="font-family: 'Poppins', sans-serif;">
            <a href="{{ url('/') }}"
                class="px-4 py-2 rounded-full text-white hover:bg-green-500/30 transition">HOME</a>
            <a href="{{ url('/about') }}"
                class="px-4 py-2 rounded-full text-white hover:bg-green-500/30 transition">ABOUT</a>
            <a href="{{ url('/produk') }}"
                class="px-4 py-2 rounded-full text-white hover:bg-green-500/30 transition">PRODUK</a>
            <a href="{{ url('/services') }}"
                class="px-4 py-2 rounded-full text-white hover:bg-green-500/30 transition">SERVICES</a>
            <a href="{{ url('/social') }}"
                class="px-4 py-2 rounded-full text-white hover:bg-green-500/30 transition">SOCIAL</a>
            <a href="{{ url('/contact') }}"
                class="px-4 py-2 rounded-full text-white hover:bg-green-500/30 transition">CONTACT</a>
            <a href="{{ url('/login') }}"
                class="px-4 py-2 rounded-full text-white hover:bg-green-500/30 transition">LOGIN</a>
        </nav>

        <!-- Mobile Menu Button -->
        <div class="md:hidden pr-3">
            <button id="menu-btn" class="flex flex-col space-y-1.5 z-50 relative">
                <span class="block w-8 h-0.5 bg-white rounded transition-all"></span>
                <span class="block w-8 h-0.5 bg-white rounded transition-all"></span>
                <span class="block w-8 h-0.5 bg-white rounded transition-all"></span>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white">
        <nav class="flex flex-col p-5 space-y-3 text-lg font-medium">
            <a href="{{ url('/') }}" class="text-green-600 hover:text-green-800">Home</a>
            <a href="{{ url('/about') }}" class="text-green-600 hover:text-green-800">About</a>
            <a href="{{ url('/produk') }}" class="text-green-600 hover:text-green-800">Product</a>
            <a href="{{ url('/services') }}" class="text-green-600 hover:text-green-800">Services</a>
            <a href="{{ url('/social') }}" class="text-green-600 hover:text-green-800">Social</a>
            <a href="{{ url('/contact') }}" class="text-green-600 hover:text-green-800">Contact</a>
            <a href="{{ url('/login') }}" class="text-green-600 hover:text-green-800">Login</a>
        </nav>
    </div>
</header>

<script>
    const navbar = document.getElementById("navbar");
    window.addEventListener("scroll", () => {
        if (window.scrollY > 50) {
            navbar.classList.remove("bg-transparent");
            navbar.classList.add("bg-green-500", "shadow-lg");
        } else {
            navbar.classList.remove("bg-green-500", "shadow-lg");
            navbar.classList.add("bg-transparent");
        }
    });
</script>
