<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Katak Studio') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'figtree': ['Figtree', 'sans-serif'],
                    },
                    colors: {
                        'katak-green': {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            200: '#bbf7d0',
                            300: '#86efac',
                            400: '#4ade80',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                        }
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
        }
        .nav-link {
            @apply text-gray-700 hover:text-katak-green-600 px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 relative;
        }
        .nav-link:hover {
            @apply bg-katak-green-50 transform -translate-y-0.5;
        }
        .nav-link.active {
            @apply text-katak-green-600 bg-katak-green-50;
        }
        .btn-primary {
            @apply bg-gradient-to-r from-katak-green-500 to-katak-green-600 hover:from-katak-green-600 hover:to-katak-green-700 text-white px-6 py-2.5 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5;
        }
        .btn-outline {
            @apply border-2 border-katak-green-500 text-katak-green-600 hover:bg-katak-green-500 hover:text-white px-6 py-2.5 rounded-xl font-semibold transition-all duration-300 hover:shadow-lg transform hover:-translate-y-0.5;
        }
        .search-container {
            position: relative;
        }
        .search-results {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            border: 1px solid #e5e7eb;
            border-top: none;
            border-radius: 0 0 1rem 1rem;
            max-height: 300px;
            overflow-y: auto;
            z-index: 50;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .search-result-item {
            padding: 1rem;
            cursor: pointer;
            border-bottom: 1px solid #f3f4f6;
            transition: all 0.2s ease;
        }
        .search-result-item:hover {
            background: linear-gradient(to right, #f0fdf4, #dcfce7);
            transform: translateX(0.25rem);
        }
        .search-result-item:last-child {
            border-bottom: none;
        }
        .glass-effect {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.9);
        }
                .hero-gradient {
            background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 50%, #bbf7d0 100%);
        }

        .floating-animation {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
            100% {
                transform: translateY(0px);
            }
        }

        .btn-primary {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            box-shadow: 0 20px 40px rgba(16, 185, 129, 0.4);
            transform: translateY(-2px);
        }

        .btn-outline {
            border: 2px solid #10b981;
            color: #059669;
            background: transparent;
            transition: all 0.3s ease;
        }

        .btn-outline:hover {
            background: #10b981;
            color: white;
            transform: translateY(-2px);
        }

        /* Define katak-green colors for Tailwind-like usage */
        .bg-katak-green-50 { background-color: #f0fdf4; }
        .bg-katak-green-100 { background-color: #dcfce7; }
        .bg-katak-green-200 { background-color: #bbf7d0; }
        .bg-katak-green-300 { background-color: #86efac; }
        .bg-katak-green-400 { background-color: #4ade80; }
        .bg-katak-green-500 { background-color: #22c55e; }
        .bg-katak-green-600 { background-color: #16a34a; }
        .bg-katak-green-700 { background-color: #15803d; }
        .bg-katak-green-800 { background-color: #166534; }
        .bg-katak-green-900 { background-color: #14532d; }

        .text-katak-green-50 { color: #f0fdf4; }
        .text-katak-green-100 { color: #dcfce7; }
        .text-katak-green-200 { color: #bbf7d0; }
        .text-katak-green-300 { color: #86efac; }
        .text-katak-green-400 { color: #4ade80; }
        .text-katak-green-500 { color: #22c55e; }
        .text-katak-green-600 { color: #16a34a; }
        .text-katak-green-700 { color: #15803d; }
        .text-katak-green-800 { color: #166534; }
        .text-katak-green-900 { color: #14532d; }

        .border-katak-green-100 { border-color: #dcfce7; }
        .border-katak-green-500 { border-color: #22c55e; }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
    <body class="font-figtree antialiased bg-gray-50">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <!-- Scripts with fallback -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            <!-- Vite already loaded scripts -->
        @else
            <!-- Fallback CDN Scripts -->
            <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
            <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        @endif

        <!-- Local Flowbite (jika ada) -->
        @if (file_exists(public_path('node_modules/flowbite/dist/flowbite.min.js')))
            <script src="{{ asset('node_modules/flowbite/dist/flowbite.min.js') }}"></script>
        @endif
    </body>
</html>
