<x-app-layout>
    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section class="bg-gradient-to-br from-green-50 via-white to-green-50 py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6">
                    Our <span class="text-green-600">Portfolio</span>
                </h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-8">
                    Discover our passion for creating beautiful landscapes and garden designs that connect people with nature. Each project tells a unique story of transformation and harmony.
                </p>
                <div class="flex justify-center">
                    <div class="bg-white p-2 rounded-full shadow-lg">
                            <div class="w-16 h-16 bg-green-400 rounded-full flex items-center justify-center">
                                <img src="storage/logo_kodok1.png" alt="Logo Katak Studio">
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Grid -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div id="portfolioGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Portfolio Item 1 -->
                    <div class="portfolio-item h-80 animate-fade-in" data-category="landscape" onclick="openModal(1)">
                        <div class="w-full h-full bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center">
                            <div class="text-center text-white">
                                <div class="text-6xl mb-4">🏞️</div>
                                <h3 class="text-xl font-semibold">Modern Landscape</h3>
                            </div>
                        </div>
                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <h3 class="text-xl font-bold mb-2">Modern Residential Landscape</h3>
                                <p class="text-sm opacity-90">Contemporary design with native plants and sustainable features</p>
                                <span class="inline-block mt-2 px-3 py-1 bg-green-500 rounded-full text-xs">Landscape Design</span>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Item 2 -->
                    <div class="portfolio-item h-80 animate-fade-in" data-category="garden" onclick="openModal(2)">
                        <div class="w-full h-full bg-gradient-to-br from-emerald-400 to-teal-600 flex items-center justify-center">
                            <div class="text-center text-white">
                                <div class="text-6xl mb-4">🌸</div>
                                <h3 class="text-xl font-semibold">Zen Garden</h3>
                            </div>
                        </div>
                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <h3 class="text-xl font-bold mb-2">Zen Meditation Garden</h3>
                                <p class="text-sm opacity-90">Peaceful retreat with bamboo, stones, and water features</p>
                                <span class="inline-block mt-2 px-3 py-1 bg-emerald-500 rounded-full text-xs">Garden Design</span>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Item 3 -->
                    <div class="portfolio-item h-80 animate-fade-in" data-category="maintenance" onclick="openModal(3)">
                        <div class="w-full h-full bg-gradient-to-br from-lime-400 to-green-600 flex items-center justify-center">
                            <div class="text-center text-white">
                                <div class="text-6xl mb-4">✂️</div>
                                <h3 class="text-xl font-semibold">Topiary Art</h3>
                            </div>
                        </div>
                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <h3 class="text-xl font-bold mb-2">Artistic Topiary Maintenance</h3>
                                <p class="text-sm opacity-90">Precision sculpted plants and creative green arrangements</p>
                                <span class="inline-block mt-2 px-3 py-1 bg-lime-500 rounded-full text-xs">Maintenance</span>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Item 4 -->
                    <div class="portfolio-item h-80 animate-fade-in mt-20" data-category="indoor" onclick="openModal(4)">
                        <div class="w-full h-full bg-gradient-to-br from-teal-400 to-cyan-600 flex items-center justify-center">
                            <div class="text-center text-white">
                                <div class="text-6xl mb-4">🪴</div>
                                <h3 class="text-xl font-semibold">Indoor Oasis</h3>
                            </div>
                        </div>
                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <h3 class="text-xl font-bold mb-2">Corporate Indoor Landscape</h3>
                                <p class="text-sm opacity-90">Biophilic design for modern office spaces</p>
                                <span class="inline-block mt-2 px-3 py-1 bg-teal-500 rounded-full text-xs">Indoor Plants</span>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Item 5 -->
                    <div class="portfolio-item h-80 animate-fade-in mt-20" data-category="landscape" onclick="openModal(5)">
                        <div class="w-full h-full bg-gradient-to-br from-green-500 to-emerald-700 flex items-center justify-center">
                            <div class="text-center text-white">
                                <div class="text-6xl mb-4">🏡</div>
                                <h3 class="text-xl font-semibold">Family Garden</h3>
                            </div>
                        </div>
                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <h3 class="text-xl font-bold mb-2">Family-Friendly Backyard</h3>
                                <p class="text-sm opacity-90">Safe play areas integrated with beautiful landscaping</p>
                                <span class="inline-block mt-2 px-3 py-1 bg-green-500 rounded-full text-xs">Landscape Design</span>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Item 6 -->
                    <div class="portfolio-item h-80 animate-fade-in mt-20" data-category="garden" onclick="openModal(6)">
                        <div class="w-full h-full bg-gradient-to-br from-yellow-400 to-orange-500 flex items-center justify-center">
                            <div class="text-center text-white">
                                <div class="text-6xl mb-4">🌻</div>
                                <h3 class="text-xl font-semibold">Butterfly Garden</h3>
                            </div>
                        </div>
                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <h3 class="text-xl font-bold mb-2">Pollinator Paradise Garden</h3>
                                <p class="text-sm opacity-90">Native flowering plants to attract butterflies and bees</p>
                                <span class="inline-block mt-2 px-3 py-1 bg-yellow-500 rounded-full text-xs">Garden Design</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="py-16 bg-green-600 text-white mt-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                    <div>
                        <div class="text-4xl font-bold mb-2">150+</div>
                        <div class="text-green-100">Projects Completed</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold mb-2">98%</div>
                        <div class="text-green-100">Client Satisfaction</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold mb-2">5+</div>
                        <div class="text-green-100">Years Experience</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold mb-2">25+</div>
                        <div class="text-green-100">Awards Won</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
         <section class="py-16 bg-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                        Get In Touch
                    </h2>
                    <p class="text-xl text-gray-600">
                        Ready to start your next project? We'd love to hear from you.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- Contact Information -->
                    <div class="space-y-8">
                        <div>
                            <h3 class="text-2xl font-semibold text-gray-900 mb-6">Contact Information</h3>
                            
                            <div class="space-y-6">
                                <!-- Address -->
                                <div class="flex items-start space-x-4">
                                    <div class="w-6 h-6 text-green-600 mt-1 flex-shrink-0">
                                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">Address</h4>
                                        <p class="text-gray-600">Jl. Raya Bogor No. 123<br>Bogor, West Java 16680<br>Indonesia</p>
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="flex items-start space-x-4">
                                    <div class="w-6 h-6 text-green-600 mt-1 flex-shrink-0">
                                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">Phone</h4>
                                        <p class="text-gray-600">+62 21 8765 4321</p>
                                        <p class="text-gray-600">+62 812 3456 7890</p>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="flex items-start space-x-4">
                                    <div class="w-6 h-6 text-green-600 mt-1 flex-shrink-0">
                                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">Email</h4>
                                        <p class="text-gray-600">info@katakstudio.com</p>
                                        <p class="text-gray-600">projects@katakstudio.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Follow Us</h3>
                            <div class="flex space-x-4">
                                <a href="#" class="w-10 h-10 bg-green-500 text-white rounded-full flex items-center justify-center hover:bg-green-600 transition-colors">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                                    </svg>
                                </a>
                                <a href="#" class="w-10 h-10 bg-green-500 text-white rounded-full flex items-center justify-center hover:bg-green-600 transition-colors">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.083.402-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z"/>
                                    </svg>
                                </a>
                                <a href="https://www.instagram.com/katak.anstudio/" class="w-10 h-10 bg-green-500 text-white rounded-full flex items-center justify-center hover:bg-green-600 transition-colors">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div>
                        <h3 class="text-2xl font-semibold text-gray-900 mb-6">Send Us a Message</h3>
                        <form onsubmit="handleContactForm(event)" class="space-y-6">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div>
                                    <label for="firstName" class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                                    <input type="text" id="firstName" name="firstName" required 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors">
                                </div>
                                <div>
                                    <label for="lastName" class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                                    <input type="text" id="lastName" name="lastName" required 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors">
                                </div>
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                <input type="email" id="email" name="email" required 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors">
                            </div>

                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                                <input type="tel" id="phone" name="phone" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors">
                            </div>

                            <div>
                                <label for="service" class="block text-sm font-medium text-gray-700 mb-2">Service Interested In</label>
                                <select id="service" name="service" required 
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors">
                                    <option value="">Please select a service</option>
                                    <option value="landscape">Landscape Design</option>
                                    <option value="garden">Garden Design</option>
                                    <option value="maintenance">Garden Maintenance</option>
                                    <option value="indoor">Indoor Plants</option>
                                    <option value="consultation">Consultation</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                                <textarea id="message" name="message" rows="4" required 
                                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors" 
                                          placeholder="Tell us about your project..."></textarea>
                            </div>

                            <button type="submit" class="w-full btn-primary text-lg py-3">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Portfolio Modal -->
    <div id="portfolioModal" class="hidden fixed inset-0 bg-black bg-opacity-75 z-50 modal">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 id="modalTitle" class="text-2xl font-bold text-gray-900"></h2>
                        <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    
                    <div id="modalContent" class="space-y-6">
                        <!-- Modal content will be populated by JavaScript -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Portfolio data
        const portfolioData = {
            1: {
                title: "Modern Residential Landscape",
                category: "Landscape Design",
                description: "A contemporary landscape design featuring clean lines, native plants, and sustainable drainage solutions. This project transformed a traditional suburban yard into a modern outdoor living space that connects seamlessly with the home's architecture.",
                features: ["Drought-resistant native plants", "Permeable paving materials", "Integrated lighting system", "Low-maintenance design"],
                client: "Private Residence",
                location: "Jakarta, Indonesia",
                year: "2024",
                duration: "3 months"
            },
            2: {
                title: "Zen Meditation Garden",
                category: "Garden Design",
                description: "A tranquil meditation space inspired by Japanese garden principles. This design incorporates natural materials, water features, and carefully selected plants to create a peaceful retreat for contemplation and relaxation.",
                features: ["Bamboo water feature", "Stone pathways", "Meditation pavilion", "Seasonal flowering plants"],
                client: "Wellness Center",
                location: "Bogor, West Java",
                year: "2023",
                duration: "4 months"
            },
            3: {
                title: "Artistic Topiary Maintenance",
                category: "Maintenance",
                description: "Precision sculpted topiary art that showcases the beauty of living architecture. Our maintenance team provides regular care to keep these artistic creations in perfect form throughout the seasons.",
                features: ["Monthly pruning schedule", "Seasonal shape adjustments", "Health monitoring", "Artistic vision maintenance"],
                client: "Luxury Hotel",
                location: "Bandung, West Java",
                year: "2023-Ongoing",
                duration: "Ongoing maintenance"
            },
            4: {
                title: "Corporate Indoor Landscape",
                category: "Indoor Plants",
                description: "Biophilic design implementation for a modern office space, improving air quality and employee wellbeing through strategic placement of indoor plants and living walls.",
                features: ["Air-purifying plant selection", "Automated irrigation system", "Living wall installation", "Monthly maintenance service"],
                client: "Tech Company",
                location: "Jakarta, Indonesia",
                year: "2024",
                duration: "2 months installation"
            },
            5: {
                title: "Family-Friendly Backyard",
                category: "Landscape Design",
                description: "A comprehensive backyard transformation that balances beauty with functionality for family life. Safe play areas are seamlessly integrated with sophisticated landscaping elements.",
                features: ["Child-safe plant selection", "Soft-surface play areas", "Outdoor entertainment space", "Edible garden section"],
                client: "Private Family",
                location: "Tangerang, Banten",
                year: "2023",
                duration: "5 months"
            },
            6: {
                title: "Pollinator Paradise Garden",
                category: "Garden Design",
                description: "An ecological garden designed to support local wildlife, particularly butterflies and bees. Native flowering plants create a vibrant display while supporting biodiversity.",
                features: ["Native flowering plants", "Butterfly habitat zones", "Bee-friendly flowers", "Seasonal bloom succession"],
                client: "Environmental NGO",
                location: "Depok, West Java",
                year: "2024",
                duration: "3 months"
            }
        };

        // Filter functionality
        function filterProjects(category) {
            const items = document.querySelectorAll('.portfolio-item');
            const buttons = document.querySelectorAll('.filter-btn');
            
            // Update active button
            buttons.forEach(btn => {
                btn.classList.remove('active');
                if (btn.dataset.filter === category) {
                    btn.classList.add('active');
                }
            });
            
            // Filter items
            items.forEach(item => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.classList.add('animate-fade-in');
                    }, 100);
                } else {
                    item.style.display = 'none';
                    item.classList.remove('animate-fade-in');
                }
            });
        }

        function closeModal() {
            const modal = document.getElementById('portfolioModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.toggle('hidden');
        }

        // Close modal when clicking outside
        document.getElementById('portfolioModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Escape key to close modal
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });
    </script>
</x-app-layout>
    @include('layouts.footer')