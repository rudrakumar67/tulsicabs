<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
            {{ config("app.name", "Tulsi Cabs - Jamnagar Taxi Service") }}
        </title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        />
        <meta name="description" content="{{ $settings->description }}">
        <link rel="icon" href="{{ asset('Uploads/images/logos/' . $settings->favicon) }}">
    </head>
    <body class="bg-gray-50">
        <header class="bg-white shadow-md">
            <div
                class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center"
            >
                <a href="{{ route('home') }}" class="text-2xl font-bold text-yellow-500">
                    <img src="{{ asset('Uploads/images/logos/' . $settings->logo) }}" alt="{{ $settings->site_name }}" style="width:150px; height:auto;">
                </a>

                <!-- Desktop Menu -->
                <nav class="hidden md:flex space-x-8 font-medium">
                    <a href="{{ route('home') }}" class="hover:text-yellow-500">Home</a>
                    <a href="{{ route('cabs') }}" class="hover:text-yellow-500">Cabs</a>
                    <a href="{{ route('services') }}" class="hover:text-yellow-500">Services</a>
                    <a href="{{ route('booking') }}" class="hover:text-yellow-500">Booking</a>
                    <a href="{{ route('about') }}" class="hover:text-yellow-500">About</a>
                    <a href="{{ route('contact') }}" class="hover:text-yellow-500">Contact</a>
                </nav>
                <a
                    href="{{ route('booking') }}"
                    class="bg-yellow-500 text-white px-5 py-2 rounded-lg hidden md:block"
                >
                    Book Now
                </a>
                <!-- Mobile Button -->
                <button id="menuBtn" class="md:hidden text-3xl">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </header>
        <!-- Overlay -->
        <div id="overlay" class="fixed inset-0 bg-black/40 hidden z-40"></div>

        <!-- Drawer Menu -->

        <div
            id="mobileMenu"
            class="fixed top-0 left-0 w-72 h-full bg-white shadow-lg transform -translate-x-full transition-transform duration-300 z-50"
        >
            <div class="p-6 border-b flex justify-between items-center">
                <h2 class="text-xl font-bold text-yellow-500">Tulsi Cabs</h2>

                <button id="closeMenu" class="text-2xl">
                    <i class="fa-solid fa-times"></i>
                </button>
            </div>

            <nav class="flex flex-col text-lg">
                <a
                    href="{{ route('home') }}"
                    class="px-6 py-4 border-b hover:bg-gray-100"
                >
                    Home
                </a>

                <a
                    href="{{ route('services') }}"
                    class="px-6 py-4 border-b hover:bg-gray-100"
                >
                    Services
                </a>

                <a
                    href="{{ route('cabs') }}"
                    class="px-6 py-4 border-b hover:bg-gray-100"
                >
                    Cabs
                </a>

                <a
                    href="{{ route('booking') }}"
                    class="px-6 py-4 border-b hover:bg-gray-100"
                >
                    Booking
                </a>

                <a
                    href="{{ route('about') }}"
                    class="px-6 py-4 border-b hover:bg-gray-100"
                >
                    About
                </a>

                <a href="{{ route('contact') }}" class="px-6 py-4 hover:bg-gray-100">
                    Contact
                </a>
            </nav>

            <div class="p-6">
                <a
                    href="{{ route('booking') }}"
                    class="block bg-yellow-500 text-white text-center py-3 rounded-lg font-semibold"
                >
                    Book Taxi
                </a>
            </div>
        </div>
            @yield('content')
        <!-- CTA -->
        <section class="bg-yellow-500 py-16 text-center">
            <div class="grid lg:grid-cols-2 items-center space-y-6 justify-items-center max-w-7xl mx-auto px-6">
                <h2 class="text-3xl font-bold text-white mx-auto my-0">
                    Ready to Ride with Tulsi Cabs?
                </h2>
                <a
                    href="{{ route('booking') }}"
                    class="bg-white text-yellow-500 px-6 py-3 rounded-lg font-semibold inline-block max-w-xs mx-auto"
                >
                    Book Your Taxi Now
                </a>
            </div>
        </section>
        <!-- Footer -->
        <footer class="bg-black text-gray-300 py-12">
            <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-10">
                <div>
                    <h3 class="text-xl font-bold text-white mb-4">
                        {{ $settings->site_name }}
                    </h3>
                    <p>
                        {{ $settings->site_description }}
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold text-white mb-4">Quick Links</h4>
                    <ul class="space-y-2 list-disc list-inside">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('cabs') }}">Cabs</a></li>
                        <li><a href="{{ route('booking') }}">Booking</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold text-white mb-4">Contact</h4>
                    <p><i class="fas fa-map-marker-alt"></i> {{ $settings->address }}</p>
                    <p><i class="fas fa-phone"></i> {{ $settings->phone_number }}</p>
                    <p><i class="fas fa-envelope"></i> {{ $settings->email }}</p>
                    <div class="flex space-x-4 mt-4">
                        <a href="{{ $settings->facebook }}" class="text-gray-300 hover:text-white" target="_blank"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="{{ $settings->instagram }}" class="text-gray-300 hover:text-white" target="_blank"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="{{ $settings->whatsapp }}" class="text-gray-300 hover:text-white" target="_blank"><i class="fab fa-whatsapp fa-lg"></i></a>

                    </div>
                </div>
            </div>

            <div class="text-center text-gray-500 mt-10">
                &copy; {{ date('Y') }} {{ $settings->site_name }}. All rights reserved.
            </div>
        </footer>

        <script>
            const menuBtn = document.getElementById("menuBtn");
            const closeBtn = document.getElementById("closeMenu");
            const menu = document.getElementById("mobileMenu");
            const overlay = document.getElementById("overlay");

            menuBtn.onclick = () => {
                menu.classList.remove("-translate-x-full");
                overlay.classList.remove("hidden");
            };

            closeBtn.onclick = () => {
                menu.classList.add("-translate-x-full");
                overlay.classList.add("hidden");
            };

            overlay.onclick = () => {
                menu.classList.add("-translate-x-full");
                overlay.classList.add("hidden");
            };
        </script>
    </body>
</html>
