<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <style>
        [x-cloak] {
            display: none !important;
        }

        .mobile-menu-overlay {
            transition: opacity 0.3s ease-in-out;
        }

        .mobile-menu-container {
            transition: transform 0.3s ease-in-out;
        }
    </style>
</head>
<body>
<nav x-data="{
        open: false,
        atTop: true,
        isHome: {{ request()->is('/') ? 'true' : 'false' }},
        isProductPage: {{ request()->is('products*') ? 'true' : 'false' }},
        mobileMenuOpen: false,
        scrolled: false,
        resetDropdowns() {
            this.open = false;
            this.mobileMenuOpen = false;
        },
        toggleMobileMenu() {
            this.mobileMenuOpen = !this.mobileMenuOpen;
        }
    }"
     x-init="() => {
        window.addEventListener('scroll', () => {
            atTop = (window.pageYOffset < 50);
            scrolled = window.pageYOffset > 10;
        });
        window.addEventListener('popstate', () => resetDropdowns());
        document.addEventListener('click', (e) => {
            if (e.target.tagName === 'A' && e.target.href && e.target.href.startsWith(window.location.origin)) {
                resetDropdowns();
            }
        });
    }"
     :class="{
        'bg-white shadow-md': scrolled,
        'bg-transparent': !scrolled && isHome,
        'bg-white': !scrolled && !isHome
    }"
     class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="shrink-0 flex items-center space-x-2">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('storage/logo_kodok1.png') }}" alt="Logo" class="h-8 transition-opacity duration-300">
                    <span class="ml-2 text-lg font-bold text-gray-900 md:text-lg"
                          :class="{
                                'text-gray-900': scrolled || !isHome,
                                'text-white': !scrolled && isHome
                            }">
                        <span class="hidden md:inline">KATAKANS STUDIO</span>
                        <span class="md:hidden">JG</span>
                    </span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex flex-1 justify-center">
                @php
                    $navItems = [
                        '/' => 'HOME',
                        '/about' => 'ABOUT US',
                        '/products' => 'PRODUCTS',
                        '/news' => 'NEWS',
                        '/service' => 'SERVICE',
                    ];
                @endphp

                <div class="flex items-center space-x-1">
                    @foreach ($navItems as $route => $label)
                        @if (!$loop->first)
                            <div :class="{
                                'bg-gray-400 bg-opacity-50': !isHome || !atTop,
                                'bg-gray-400 bg-opacity-25': isHome && atTop
                            }" class="h-4 w-px mx-1"></div>
                        @endif

                        @if ($route === '/products')
                            <div class="relative" x-data="{ open: false }">
                                <button @click="open = !open" @click.away="open = false"
                                        :class="{
                                            'text-green-500': isProductPage && !atTop,
                                            'text-white': isHome && atTop,
                                            'text-gray-700': !isProductPage && (!isHome || !atTop),
                                            'text-gray-300': !isProductPage && isHome && atTop,
                                            'hover:text-green-500': !isHome || !atTop,
                                            'hover:text-white': isHome && atTop
                                        }"
                                        class="inline-flex items-center px-1 pt-1 transition duration-150 ease-in-out">
                                    {{ $label }}
                                    <svg :class="{'rotate-180': open}" class="ml-1 h-4 w-4 transform transition-transform duration-200"
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </button>
                                <div x-show="open" x-cloak
                                     x-transition:enter="transition ease-out duration-100"
                                     x-transition:leave="transition ease-in duration-75"
                                     class="absolute z-50 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                                    <div class="py-1">
                                        <a href="{{ route('products') }}"
                                           class="block px-3 py-2 text-sm text-gray-700 hover:bg-gray-100">All Products</a>
                                        @foreach ($categories as $category)
                                            <a href="{{ route('products', ['category_id' => $category->id]) }}"
                                               class="block px-3 py-2 text-sm text-gray-700 hover:bg-gray-100">{{ $category->name }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @else
                            <a href="{{ $route }}"
                               :class="{
                                    'text-green-500': '{{ request()->is(ltrim($route, "/")) }}' && !atTop,
                                    'text-white': '{{ $route }}' === '/' && isHome && atTop,
                                    'text-gray-700': !'{{ request()->is(ltrim($route, "/")) }}' && (!isHome || !atTop),
                                    'text-gray-300': !'{{ request()->is(ltrim($route, "/")) }}' && isHome && atTop,
                                    'hover:text-green-500': !isHome || !atTop,
                                    'hover:text-white': isHome && atTop
                                }"
                               class="inline-flex items-center px-1 pt-1 transition duration-150 ease-in-out">{{ $label }}</a>
                        @endif
                    @endforeach
                </div>
            </div>

<!-- Login/Profile Button (Desktop) -->
<div class="hidden md:flex items-center space-x-4">
    @auth
        <div class="relative" x-data="{ openProfile: false }" @mouseenter="openProfile = true" @mouseleave="openProfile = false">
            <button
                class="flex items-center space-x-2 text-gray-800 hover:text-green-600 focus:outline-none"
                type="button"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M5.121 17.804A9.953 9.953 0 0112 15c2.1 0 4.06.648 5.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
            </button>
            <!-- Dropdown Profile -->
            <div
                x-show="openProfile"
                x-cloak
                x-transition
                class="absolute right-0 mt-2 w-56 bg-white border rounded shadow-lg py-4 z-50"
            >
                <div class="mb-2 text-center">
                    <div class="font-semibold text-lg mb-2">{{ Auth::user()->name }}</div>
                    @if(Auth::user()->is_admin ?? false)
                        <a href="{{ route('admin.dashboard') }}"
                           class="block mb-2 text-green-600 hover:underline font-medium">Admin Dashboard</a>
                    @endif
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                            class="w-full px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    @else
        <a href="{{ route('login') }}"
           class="text-green hover:text-green-600 border border-green-600 px-4 py-1 rounded-md font-medium">
            Login
        </a>
        <a href="{{ route('register') }}"
           class="text-white bg-green-600 hover:bg-green-700 px-4 py-1 rounded-md font-medium">
            Register
        </a>
    @endauth
</div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button @click="toggleMobileMenu()" class="text-gray-700 hover:text-gray-900">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!mobileMenuOpen" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                        <path x-show="mobileMenuOpen" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" x-cloak
         x-transition:enter="transition-opacity ease-out duration-300"
         x-transition:leave="transition-opacity ease-in duration-300"
         class="fixed inset-0 bg-black bg-opacity-50 z-40 mobile-menu-overlay">
        <div x-show="mobileMenuOpen" x-cloak
             x-transition:enter="transition ease-out duration-300"
             x-transition:leave="transition ease-in duration-300"
             class="bg-white w-64 h-full p-6 overflow-y-auto absolute left-0 mobile-menu-container">
            <button @click="toggleMobileMenu()" class="text-gray-700 text-2xl absolute top-4 right-4">×</button>
            <div class="flex flex-col space-y-4 mt-8">
                <div class="text-lg font-semibold text-gray-800 mb-4">CV JAYA GIRY</div>
                @foreach ($navItems as $route => $label)
                    @if ($route === '/products')
                        <div x-data="{ open: false }">
                            <button @click="open = !open" class="w-full text-left text-gray-700 font-semibold">{{ $label }}</button>
                            <div x-show="open" x-cloak class="ml-4 space-y-2 mt-2">
                                <a href="{{ route('products') }}" class="block text-gray-600 hover:text-green-500">All Products</a>
                                @foreach ($categories as $category)
                                    <a href="{{ route('products', ['category_id' => $category->id]) }}"
                                       class="block text-gray-600 hover:text-green-500">
                                        {{ $category->name }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <a href="{{ $route }}"
                           class="block text-gray-700 font-semibold hover:text-green-500">{{ $label }}</a>
                    @endif
                @endforeach

        <!-- Mobile Login/Profile Section -->
@auth
    <div class="border-t pt-4 mt-4" x-data="{ openProfile: false }">
        <button
            @click="openProfile = !openProfile"
            class="w-full flex items-center justify-between text-gray-700 font-semibold hover:text-green-500 focus:outline-none"
            type="button"
        >
            <span>Hi, {{ Auth::user()->name }}</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M5.121 17.804A9.953 9.953 0 0112 15c2.1 0 4.06.648 5.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
        </button>
        <!-- Dropdown Profile (Mobile) -->
        <div
            x-show="openProfile"
            x-cloak
            x-transition
            class="mt-2 bg-white border rounded shadow-lg py-4 px-4"
        >
            <div class="mb-2 text-center">
                <div class="font-semibold text-lg mb-2">{{ Auth::user()->name }}</div>
                @if(Auth::user()->is_admin ?? false)
                    <a href="{{ route('admin.dashboard') }}"
                       class="block mb-2 text-green-600 hover:underline font-medium">Admin Dashboard</a>
                @endif
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                        class="w-full px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition">
                    Logout
                </button>
            </form>
        </div>
    </div>
@else
    <div class="border-t pt-4 mt-4">
        <a href="{{ route('login') }}" class="block text-gray-700 font-semibold hover:text-green-500">Login</a>
        <a href="{{ route('register') }}" class="block text-green-700 hover:text-green-500">Register</a>
    </div>
@endauth
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        window.dispatchEvent(new CustomEvent('nav-loaded'));
    });
</script>
</body>
</html> 