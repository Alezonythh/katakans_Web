<x-app-layout>
    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section class="hero-gradient py-24 lg:py-32 relative overflow-hidden">
            <!-- Background decorative elements -->
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute -top-40 -right-32 w-80 h-80 bg-katak-green-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-pulse"></div>
                <div class="absolute -bottom-40 -left-32 w-80 h-80 bg-katak-green-300 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-pulse"></div>
            </div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <!-- Left Content -->
                    <div class="space-y-10">
                        <div class="space-y-6">
                            <h1 class="text-5xl lg:text-7xl font-bold text-gray-900 leading-tight">
                                Many Styles, <br>
                                <span class="bg-gradient-to-r from-katak-green-600 via-katak-green-500 to-katak-green-700 bg-clip-text text-transparent">
                                    Many Ideas, <br>Just Katakan.
                                </span>
                            </h1>
                            <p class="text-xl text-gray-600 leading-relaxed max-w-lg">
                                Ubah ide jadi visual. Katak Studio hadir dengan solusi desain grafis kreatif untuk branding, ilustrasi, hingga konten sosial media.
                            </p>
                        </div>
                        
                        <div class="flex flex-col sm:flex-row gap-4">
                            <button class="btn-primary text-lg px-10 py-4 bg-gradient-to-r from-katak-green-500 to-katak-green-600 rounded-2xl shadow-2xl hover:shadow-3xl transform hover:scale-105 transition-all duration-300">
                                Order Now
                                <svg class="inline-block w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </button>
                            <button class="btn-outline text-lg px-10 py-4 rounded-2xl border-2 border-katak-green-500 text-katak-green-600 hover:bg-katak-green-50 transition-all duration-300">
                                View Portfolio
                            </button>
                        </div>
                    </div>

                    <!-- Right Content - Hero Image -->
                    <div class="relative flex justify-center items-center">
                        <div class="relative">
                            <!-- Background circle -->
                            <div class="absolute inset-0 bg-gradient-to-br from-katak-green-200 to-katak-green-300 rounded-full blur-3xl opacity-30 scale-110"></div>
                            
                            <!-- Main image -->
                            <div class="relative floating-animation">
                                <img src="{{ asset('storage/katami_jempol.png') }}" alt="Katami" class="w-80 h-80 lg:w-96 lg:h-96 object-contain drop-shadow-2xl">
                            </div>
                            
                            <!-- Floating elements -->
                            <div class="absolute -top-4 -left-4 w-12 h-12 bg-katak-green-400 rounded-full opacity-60 animate-bounce" style="animation-delay: 0.5s;"></div>
                            <div class="absolute -bottom-6 -right-6 w-8 h-8 bg-katak-green-300 rounded-full opacity-60 animate-bounce" style="animation-delay: 1s;"></div>
                            <div class="absolute top-1/4 -right-8 w-6 h-6 bg-katak-green-500 rounded-full opacity-60 animate-bounce" style="animation-delay: 1.5s;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Us Section -->
        <section class="py-24 bg-white relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <!-- Left - Image -->
                    <div class="relative">
                        <div class="relative group">
                            <div class="absolute inset-0 bg-gradient-to-br from-katak-green-200 to-katak-green-400 rounded-3xl transform rotate-3 group-hover:rotate-6 transition-transform duration-500"></div>
                            <div class="relative bg-white rounded-3xl p-8 shadow-2xl">
                                <img src="{{ asset('storage/katami_kagum.png') }}" alt="About Katak Studio" class="w-full h-80 object-contain">
                            </div>
                        </div>
                    </div>

                    <!-- Right - Content -->
                    <div class="space-y-8">
                        <div class="space-y-4">
                            <span class="inline-block px-4 py-2 bg-katak-green-100 text-katak-green-700 rounded-full text-sm font-medium">About Katak Studio</span>
                            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900">
                                Menciptakan Visual <br>
                                <span class="bg-gradient-to-r from-katak-green-600 to-katak-green-700 bg-clip-text text-transparent">
                                    yang Kuat dan Berkesan
                                </span>
                            </h2>
                            <p class="text-lg text-gray-600 leading-relaxed">
                                Katak Studio percaya bahwa setiap bisnis punya cerita unik. Lewat desain grafis, ilustrasi, dan branding, kami bantu ubah ide kamu jadi visual yang menarik dan mudah diingat.
                            </p>
                        </div>

                        <button class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-katak-green-500 to-katak-green-600 text-white rounded-2xl hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                            Learn More About Us
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Services Section -->
        <section class="py-24 bg-gradient-to-br from-gray-50 to-katak-green-50 relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto mb-20">
                    <span class="inline-block px-4 py-2 bg-katak-green-100 text-katak-green-700 rounded-full text-sm font-medium mb-4">Our Services</span>
                    <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                        What We 
                        <span class="bg-gradient-to-r from-katak-green-600 to-katak-green-700 bg-clip-text text-transparent">
                            Offer
                        </span>
                    </h2>
                    <p class="text-xl text-gray-600">From ideas to visuals, we provide creative graphic design solutions tailored to your brand.</p>
                </div>

                <!-- Services Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Service 1 -->
                    <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500">
                        <div class="mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-katak-green-400 to-katak-green-600 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">Visual Branding</h3>
                            <p class="text-gray-600 leading-relaxed">Desain logo, identitas merek, dan elemen visual yang mencerminkan nilai dan karakter unik bisnis kamu.</p>
                        </div>
                        <div class="text-katak-green-600 font-medium group-hover:text-katak-green-700 transition-colors">
                            Learn More →
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500">
                        <div class="mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-katak-green-400 to-katak-green-600 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">Packaging & Print Design</h3>
                            <p class="text-gray-600 leading-relaxed">Desain kemasan, brosur, label, hingga media promosi cetak yang menarik dan profesional.</p>
                        </div>
                        <div class="text-katak-green-600 font-medium group-hover:text-katak-green-700 transition-colors">
                            Learn More →
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500">
                        <div class="mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-katak-green-400 to-katak-green-600 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">Illustration & Character Design</h3>
                            <p class="text-gray-600 leading-relaxed">Kami menciptakan ilustrasi custom dan maskot karakter yang bisa memperkuat daya tarik visual brand-mu—cocok untuk konten digital, merchandise, atau campaign kreatif.</p>
                        </div>
                        <div class="text-katak-green-600 font-medium group-hover:text-katak-green-700 transition-colors">
                            Learn More →
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="py-24 bg-white relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto mb-20">
                    <span class="inline-block px-4 py-2 bg-katak-green-100 text-katak-green-700 rounded-full text-sm font-medium mb-4">Testimonials</span>
                    <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                        What Our 
                        <span class="bg-gradient-to-r from-katak-green-600 to-katak-green-700 bg-clip-text text-transparent">
                            Clients Say
                        </span>
                    </h2>
                    <p class="text-xl text-gray-600">Cerita nyata dari pelanggan yang sukses membangun identitas visual bersama Katak Studio.</p>
                </div>

                <!-- Testimonials Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- Testimonial 1 -->
                    <div class="group bg-gradient-to-br from-katak-green-50 to-white rounded-3xl p-8 border border-katak-green-100 hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-500">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('images/athala.jpg') }}" alt="Athala" class="w-16 h-16 rounded-full object-cover shadow-lg">
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center mb-4">
                                    <div class="flex space-x-1">
                                        @for($i = 0; $i < 5; $i++)
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        @endfor
                                    </div>
                                </div>
                                <blockquote class="text-gray-700 text-lg leading-relaxed mb-4">
                                    "Katak Studio berhasil menghidupkan brand kami. Mulai dari desain logo, warna, sampai kemasan—semuanya terasa profesional dan sesuai dengan karakter bisnis kami."
                                </blockquote>
                                <div>
                                    <div class="font-bold text-gray-900">Athala Rahman</div>
                                    <div class="text-katak-green-600 text-sm">Homeowner, Jakarta</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="group bg-gradient-to-br from-katak-green-50 to-white rounded-3xl p-8 border border-katak-green-100 hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-500">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('images/citra.jpg') }}" alt="Citra" class="w-16 h-16 rounded-full object-cover shadow-lg">
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center mb-4">
                                    <div class="flex space-x-1">
                                        @for($i = 0; $i < 5; $i++)
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        @endfor
                                    </div>
                                </div>
                                <blockquote class="text-gray-700 text-lg leading-relaxed mb-4">
                                    "Kerja sama dengan Katak Studio sangat menyenangkan. Timnya komunikatif, dan desain karakter maskot yang mereka buat bikin produk kami jadi lebih menonjol dan disukai pelanggan."
                                </blockquote>
                                <div>
                                    <div class="font-bold text-gray-900">Citra Dewi</div>
                                    <div class="text-katak-green-600 text-sm">Business Owner, Bandung</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section class="py-24 bg-gradient-to-br from-katak-green-900 via-katak-green-800 to-katak-green-900 text-white relative overflow-hidden">
            <!-- Background elements -->
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute top-20 right-20 w-64 h-64 bg-katak-green-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
                <div class="absolute bottom-20 left-20 w-48 h-48 bg-katak-green-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <!-- Left - Content -->
                    <div class="space-y-8">
                        <div class="space-y-4">
                            <span class="inline-block px-4 py-2 bg-katak-green-400 bg-opacity-20 text-katak-green-200 rounded-full text-sm font-medium">Why Choose Katak Studio</span>
                            <h2 class="text-4xl lg:text-5xl font-bold">
                                Visual Impianmu, 
                                <span class="bg-gradient-to-r from-katak-green-300 to-katak-green-400 bg-clip-text text-transparent">
                                    Kami Wujudkan
                                </span>
                            </h2>
                            <p class="text-xl text-katak-green-100 leading-relaxed">
                                Kami memadukan kreativitas, keahlian, dan semangat untuk menciptakan desain visual yang kuat, menarik, dan relevan untuk setiap brand.
                            </p>
                        </div>

                        <div class="space-y-6">
                            <!-- Feature 1 -->
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-katak-green-400 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-katak-green-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-white mb-2">Tim Profesional</h3>
                                    <p class="text-katak-green-100">Desainer kami berpengalaman dalam berbagai proyek branding, ilustrasi, dan konten visual untuk berbagai industri.</p>
                                </div>
                            </div>

                            <!-- Feature 2 -->
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-katak-green-400 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-katak-green-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-white mb-2">Pendekatan Personal</h3>
                                    <p class="text-katak-green-100">Setiap desain disesuaikan dengan gaya, kebutuhan, dan karakter brand kamu—bukan template instan.</p>
                                </div>
                            </div>

                            <!-- Feature 3 -->
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-katak-green-400 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-katak-green-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-white mb-2">Hasil Berkualitas</h3>
                                    <p class="text-katak-green-100">Kami menggunakan standar desain tinggi, mulai dari pemilihan warna, tipografi, hingga elemen ilustrasi, untuk hasil yang estetik dan fungsional.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right - Image -->
                    <div class="relative flex justify-center">
                        <div class="relative">
                            <div class="absolute inset-0 bg-gradient-to-br from-katak-green-400 to-katak-green-600 rounded-full blur-2xl opacity-30 scale-110"></div>
                            <div class="relative">
                                <img src="{{ asset('storage/cowboay_katami.png') }}" alt="Cowboy Katami" class="w-80 h-80 lg:w-96 lg:h-96 object-contain drop-shadow-2xl floating-animation">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white relative overflow-hidden">
            <!-- Background elements -->
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-katak-green-500 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
                <div class="absolute bottom-0 left-0 w-48 h-48 bg-katak-green-400 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
            </div>

            <div class="relative">
                <!-- Main Footer Content -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                        <!-- Company Info -->
                        <div class="lg:col-span-2 space-y-6">
                            <div class="flex items-center space-x-3">
                                <img src="{{ asset('storage/katami_miskin.png') }}" alt="Katak Studio" class="w-12 h-12 object-contain">
                                <h3 class="text-2xl font-bold bg-gradient-to-r from-katak-green-400 to-katak-green-500 bg-clip-text text-transparent">
                                    Katak Studio
                                </h3>
                            </div>
                            <p class="text-gray-300 leading-relaxed max-w-md">
                                Ubah identitas visual brand Anda menjadi karya yang berkarakter dengan layanan desain grafis, ilustrasi, dan branding dari Katak Studio.
                                <br>Many styles, Many Ideas, Just Katakan.
                            </p>
                            <div class="flex space-x-4">
                                <a href="#" class="w-10 h-10 bg-katak-green-600 rounded-lg flex items-center justify-center hover:bg-katak-green-500 transition-colors duration-300">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                    </svg>
                                </a>
                                <a href="#" class="w-10 h-10 bg-katak-green-600 rounded-lg flex items-center justify-center hover:bg-katak-green-500 transition-colors duration-300">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                                    </svg>
                                </a>
                                <a href="#" class="w-10 h-10 bg-katak-green-600 rounded-lg flex items-center justify-center hover:bg-katak-green-500 transition-colors duration-300">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.162-1.499-.698-2.436-2.888-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.357-.631-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z"/>
                                    </svg>
                                </a>
                                <a href="#" class="w-10 h-10 bg-katak-green-600 rounded-lg flex items-center justify-center hover:bg-katak-green-500 transition-colors duration-300">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12.007 0C5.382 0 0 5.382 0 12.007s5.382 12.007 12.007 12.007 12.007-5.382 12.007-12.007S18.632.001 12.007.001zM8.672 18.918H5.898V8.745h2.774v10.173zm-1.387-11.574c-.896 0-1.623-.727-1.623-1.623s.727-1.623 1.623-1.623 1.623.727 1.623 1.623-.728 1.623-1.623 1.623zm12.222 11.574h-2.774v-5.226c0-1.043-.02-2.386-1.456-2.386-1.456 0-1.679 1.136-1.679 2.312v5.3H10.824V8.745h2.664v1.39h.037c.37-.7 1.272-1.438 2.619-1.438 2.799 0 3.316 1.842 3.316 4.236v5.985z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- Services -->
                        <div class="space-y-6">
                            <h4 class="text-lg font-bold text-white">Services</h4>
                            <ul class="space-y-3">
                                <li><a href="#" class="text-gray-300 hover:text-katak-green-400 transition-colors duration-300">Desain Logo & Branding</a></li>
                                <li><a href="#" class="text-gray-300 hover:text-katak-green-400 transition-colors duration-300">Ilustrasi & Karakter</a></li>
                                <li><a href="#" class="text-gray-300 hover:text-katak-green-400 transition-colors duration-300">Kemasan Produk</a></li>
                                <li><a href="#" class="text-gray-300 hover:text-katak-green-400 transition-colors duration-300">Desain Media Sosial</a></li>
                            </ul>
                        </div>

                        <!-- Contact Info -->
                        <div class="space-y-6">
                            <h4 class="text-lg font-bold text-white">Contact Info</h4>
                            <div class="space-y-4">
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-katak-green-400 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <div class="text-gray-300">
                                        <div>Jl. Garden Paradise No. 123</div>
                                        <div>Jakarta Selatan, 12345</div>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-katak-green-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                    <span class="text-gray-300">+62 21 1234 5678</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-katak-green-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    <span class="text-gray-300">hello@katakstudio.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom Footer -->
                <div class="border-t border-gray-800">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                        <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                            <div class="text-gray-400 text-sm">
                                © {{ date('Y') }} Katak Studio. All rights reserved.
                            </div>
                            <div class="flex space-x-6 text-sm">
                                <a href="#" class="text-gray-400 hover:text-katak-green-400 transition-colors duration-300">Privacy Policy</a>
                                <a href="#" class="text-gray-400 hover:text-katak-green-400 transition-colors duration-300">Terms of Service</a>
                                <a href="#" class="text-gray-400 hover:text-katak-green-400 transition-colors duration-300">Cookie Policy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>

</x-app-layout>