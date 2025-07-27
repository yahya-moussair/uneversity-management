<footer class="bg-[#013370] text-white">
    <div class="max-w-7xl mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="col-span-1 md:col-span-2">
                <a href="{{ route('app.home') }}" class="flex items-center mb-4">
                    <img src="{{ asset('asset/images/logo.png') }}" alt="Logo" class="h-8 w-auto mr-3">
                    <h2 class="text-2xl font-bold">SmartEdu</h2>
                </a>
                <p class="text-gray-300 mb-4">
                    Empowering students with cutting-edge IT education and practical skills for the digital workforce.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-300 hover:text-white transition-colors">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('app.home') }}" class="text-gray-300 hover:text-white transition-colors">Home</a></li>
                    <li><a href="{{ route('app.about') }}" class="text-gray-300 hover:text-white transition-colors">About</a></li>
                    <li><a href="{{ route('app.courses') }}" class="text-gray-300 hover:text-white transition-colors">Specializations</a></li>
                    <li><a href="{{ route('app.contact') }}" class="text-gray-300 hover:text-white transition-colors">Contact</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Contact Info</h3>
                <ul class="space-y-2 text-gray-300">
                    <li>123 University Avenue</li>
                    <li>Education District</li>
                    <li>City, State 12345</li>
                    <li>Phone: +1 (555) 123-4567</li>
                    <li>Email: info@university.edu</li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-300">
            <p>&copy; 2024 SmartEdu. All rights reserved.</p>
        </div>
    </div>
</footer>
