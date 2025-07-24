<x-app-layout>
    <!-- AlpineJS -->
    <script src="https://unpkg.com/alpinejs" defer></script>

    <!-- Smooth Scroll -->
    <style>
        html {
            scroll-behavior: smooth;
        }
        [x-cloak] {
            display: none !important;
        }
    </style>

    <!-- Hero Banner -->
    <div class="relative h-[400px] overflow-hidden" id="top">
        <img src="{{ asset('storage/products/young-man-being-ill-hospital-bed.jpg') }}" alt="Medical Banner" class="absolute inset-0 w-full h-full object-cover">
        <div class="relative h-full flex items-center bg-black bg-opacity-50">
            <div class="max-w-7xl mx-auto px-4 w-full">
                <h1 class="text-5xl font-bold text-white mb-2">Medical Technology</h1>
            </div>
        </div>
    </div>

    <!-- Navigation Tabs -->
    <div class="bg-white border-b">
        <div class="max-w-7xl mx-auto px-4">
            <nav class="flex space-x-4 py-6 justify-center">
                <a href="#about-section" class="px-4 py-2 rounded-md font-semibold transition bg-green-500 text-white hover:bg-green-600">
                    About Us
                </a>
                <a href="#history-section" class="px-4 py-2 rounded-md font-semibold transition bg-white text-green-600 border border-green-500 hover:bg-green-50">
                    Certificates and Facilities
                </a>
                <a href="#milestone-section" class="px-4 py-2 rounded-md font-semibold transition bg-white text-green-600 border border-green-500 hover:bg-green-50">
                    Milestones
                </a>
            </nav>
        </div>
    </div>

    <!-- About Us Section -->
    <div id="about-section" class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 space-y-8">
            <h2 class="text-3xl font-bold text-gray-800">About Us</h2>
            <p class="text-gray-700 leading-relaxed">
                <span class="font-semibold text-green-800">CV. JAYAGIRY</span> is a company engaged in the medical equipment industry, medical support, and fabrication services, located at Jl. Siliwangi Kp. Padamelang RT. 007 RW. 003 Padaasih Village, Cisaat District, Sukabumi Regency. As a company in the industry sector, CV. JAYAGIRY is the best solution with excellent, reliable, and experienced human resources, resulting in high-quality, innovative products that are able to compete nationally and globally.
            </p>
            <img src="{{ asset('storage/products/company.png') }}" alt="Company Image" class="w-full rounded-lg shadow-lg">
        </div>
    </div>

<!-- Certificates and Facilities Section -->
<div id="history-section" class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 space-y-10">
        <h2 class="text-3xl font-bold text-gray-800 text-center">Certificates and Facilities</h2>

        <!-- Grid of Images -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
            <!-- Item 1 - Full Cover -->
            <div class="space-y-3 pb-4">
                <img src="{{ asset('storage/products/Certificate1.jpg') }}" alt="Certificate 1"
                     class="w-full h-full object-cover rounded-lg shadow-md">
                <h3 class="text-xl font-bold text-gray-800 text-center">Sertifikat Merek</h3>
            </div>

            <!-- Item 2 - Full Cover -->
            <div class="space-y-3 pb-4">
                <img src="{{ asset('storage/products/certificate2.jpg') }}" alt="Sertifikat Kementrian"
                     class="w-full h-full object-cover rounded-lg shadow-md">
                <h3 class="text-xl font-bold text-gray-800 text-center">Sertifikat Kementrian Perindustrian</h3>
            </div>

            <!-- Item 3 - Contain (utuh) -->
            <div class="space-y-3 pb-4">
                <div class="bg-gray-100 h-64 flex items-center justify-center rounded-lg shadow-md">
                    <img src="{{ asset('storage/products/LaserCNCPhotonTECH.jpg') }}" alt="Laser CNC"
                         class="max-h-full max-w-full object-contain">
                </div>
                <h3 class="text-xl font-bold text-gray-800 text-center">Laser CNC PhotonTECH</h3>
            </div>

            <!-- Item 4 - Contain (utuh) -->
            <div class="space-y-3 pb-4">
                <div class="bg-gray-100 h-64 flex items-center justify-center rounded-lg shadow-md">
                    <img src="{{ asset('storage/products/CNCPressBrakeBendingMachine.jpg') }}" alt="CNC Machine"
                         class="max-h-full max-w-full object-contain">
                </div>
                <h3 class="text-xl font-bold text-gray-800 text-center">CNC Press Brake/Bending Machine</h3>
            </div>
                 <!-- Item 5 - Contain (utuh) -->
            <div class="space-y-3 pb-4">
                <div class="bg-gray-100 h-64 flex items-center justify-center rounded-lg shadow-md">
                    <img src="{{ asset('storage/products/CompressoreHighPressure.jpg') }}" alt="Laser CNC"
                         class="max-h-full max-w-full object-contain">
                </div>
                <h3 class="text-xl font-bold text-gray-800 text-center">Compressore High Pressure</h3>
            </div>

            <!-- Item 6 - Contain (utuh) -->
            <div class="space-y-3 pb-4">
                <div class="bg-gray-100 h-64 flex items-center justify-center rounded-lg shadow-md">
                    <img src="{{ asset('storage/products/PowderCoating.jpg') }}" alt="CNC Machine"
                         class="max-h-full max-w-full object-contain">
                </div>
                <h3 class="text-xl font-bold text-gray-800 text-center">Powder Coating</h3>
            </div>
                   <!-- Item 7 - Contain (utuh) -->
            <div class="space-y-3 pb-4">
                <div class="bg-gray-100 h-64 flex items-center justify-center rounded-lg shadow-md">
                    <img src="{{ asset('storage/products/LatheMachine.png') }}" alt="Laser CNC"
                         class="max-h-full max-w-full object-contain">
                </div>
                <h3 class="text-xl font-bold text-gray-800 text-center">Lathe Machine</h3>
            </div>

            <!-- Item 8 - Contain (utuh) -->
            <div class="space-y-3 pb-4">
                <div class="bg-gray-100 h-64 flex items-center justify-center rounded-lg shadow-md">
                    <img src="{{ asset('storage/products/WeldingMachine.jpg') }}" alt="CNC Machine"
                         class="max-h-full max-w-full object-contain">
                </div>
                <h3 class="text-xl font-bold text-gray-800 text-center">Welding Machine</h3>
            </div>
                   <!-- Item 9 - Contain (utuh) -->
            <div class="space-y-3 pb-4">
                <div class="bg-gray-100 h-64 flex items-center justify-center rounded-lg shadow-md">
                    <img src="{{ asset('storage/products/CNCMilling.jpg') }}" alt="Laser CNC"
                         class="max-h-full max-w-full object-contain">
                </div>
                <h3 class="text-xl font-bold text-gray-800 text-center">CNC Milling</h3>
            </div>

     
        </div>
    </div>
</div>

    <!-- Milestones Section -->
    <div id="milestone-section" class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 space-y-6">
            <h2 class="text-3xl font-bold text-gray-800">Company Milestones</h2>
            <img src="{{ asset('storage/products/milestone.png') }}" alt="Company Milestones Timeline" class="w-full rounded-lg shadow-md">
        </div>
    </div>


    <!-- Contact Us Section -->
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Get in Touch with Us</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    We're here to help! Contact us through any of these channels and we'll respond as soon as possible.
                </p>
            </div>

            <div class="flex justify-center">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 w-full max-w-6xl">
                    <!-- Card 1 -->
                    <div class="bg-white p-10 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="text-center mb-4">
                            <div class="bg-green-50 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-3">Contact Person</h3>
                        </div>
                        <div class="space-y-4 text-center">
                            <a href="https://wa.me/628111114109" class="flex items-center justify-center space-x-2 p-4 bg-green-50 rounded-lg hover:bg-green-100 transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M.057 24l1.687-6.163..."></path>
                                </svg>
                                <span class="font-medium text-green-500">Person 1 : +62 811-1114-109</span>
                            </a>
                            <a href="https://wa.me/6281355000854" class="flex items-center justify-center space-x-2 p-4 bg-green-50 rounded-lg hover:bg-green-100 transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M.057 24l1.687-6.163..."></path>
                                </svg>
                                <span class="font-medium text-green-500">Person 2 : +62 813-5500-0854</span>
                            </a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white p-10 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="text-center mb-4">
                            <div class="bg-green-50 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-3">Office Contact</h3>
                        </div>
                        <div class="space-y-4 text-center">
                            <div class="flex items-center justify-center space-x-2 p-4 bg-green-50 rounded-lg hover:bg-green-100 transition-all duration-300">
                                <a href="tel:" class="font-medium text-green-500">(0266) 2500130</a>
                            </div>
                            <div class="flex items-center justify-center space-x-2 p-4 bg-green-50 rounded-lg hover:bg-green-100 transition-all duration-300">
                                <div class="font-medium text-green-500">
                                    <a href="mailto:jg.alkes@gmail.com">jg.alkes@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- Sticky Back to Top Button -->
        <div class="fixed bottom-6 right-6 z-50">
            <a href="#about-section"
                class="px-4 py-3 bg-green-600 text-white font-bold rounded-full shadow-lg hover:bg-green-700 transition">
                ↑ Back to Top
            </a>
        </div>
    </div>

</x-app-layout>
@include('layouts.footer')
