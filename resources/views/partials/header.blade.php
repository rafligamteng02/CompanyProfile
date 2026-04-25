 <header id="navbar" class="fixed w-full top-0 left-0 z-30 transition-all duration-300">
     <div class="container mx-auto flex justify-between items-center py-1.5 p-4">

         <!-- Logo -->
         <div class="flex items-center pl-8">
             <a href="#home">
                 <img src="{{ asset('images/logopy1.png') }}" alt="Logo" class="h-12 w-auto">
             </a>
         </div>
         <!-- Navigation (Center) -->
         <nav class="hidden md:flex space-x-8 absolute left-1/2 transform -translate-x-1/2 font-bold"
             style="font-family: 'Poppins', sans-serif;">
             <a href="{{ url('/') }}" class="text-white">Home</a>
             <a href="{{ url('/about') }}" class="text-white">About</a>
             <a href="{{ url('/product') }}" class="text-white">Product</a>
             <a href="{{ url('/services') }}" class="text-white">Services</a>
             <a href="{{ url('/contact') }}" class="text-white">Contact</a>
             <a href="{{ url('/login') }}" class="text-white">Login</a>
         </nav>

         <!-- Mobile Menu Button (Right) -->
         <div class="md:hidden">
             <button id="menu-btn" class="text-white text-2xl focus:outline-none">
                 ☰
             </button>
         </div>
     </div>

     <!-- Mobile Menu -->
     <div id="mobile-menu" class="hidden md:hidden bg-white">
         <nav class="flex flex-col p-4 space-y-3">
             <a href="{{ url('/') }}" class="text-green-500">Home</a>
             <a href="{{ url('/about') }}" class="text-green-500">About</a>
             <a href="{{ url('/product') }}" class="text-green-500">Product</a>
             <a href="{{ url('/services') }}" class="text-green-500">Services</a>
             <a href="{{ url('/contact') }}" class="text-green-500">Contact</a>
         </nav>
     </div>
 </header>
