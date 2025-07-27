<div class="flex flex-col lg:flex-row items-start w-full gap-12 px-20">
    <!-- Contact Form -->
    <div class="flex-1 bg-white rounded-xl shadow-lg p-8">
        <h2 class="text-3xl font-bold text-[#013370] mb-6">Send us a Message</h2>
        <form class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                    <input type="text" id="first_name" name="first_name" required 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#013370] focus:border-transparent transition-all duration-300">
                </div>
                <div>
                    <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                    <input type="text" id="last_name" name="last_name" required 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#013370] focus:border-transparent transition-all duration-300">
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                    <input type="email" id="email" name="email" required 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#013370] focus:border-transparent transition-all duration-300">
                </div>
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                    <input type="tel" id="phone" name="phone" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#013370] focus:border-transparent transition-all duration-300">
                </div>
            </div>
            
            <div>
                <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                <select id="subject" name="subject" required 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#013370] focus:border-transparent transition-all duration-300">
                    <option value="">Select a subject</option>
                    <option value="general">General Inquiry</option>
                    <option value="admissions">Admissions</option>
                    <option value="academic">Academic Programs</option>
                    <option value="financial">Financial Aid</option>
                    <option value="technical">Technical Support</option>
                    <option value="other">Other</option>
                </select>
            </div>
            
            <div>
                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                <textarea id="message" name="message" rows="6" required 
                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#013370] focus:border-transparent transition-all duration-300 resize-none"
                          placeholder="Tell us how we can help you..."></textarea>
            </div>
            
            <div class="flex items-center">
                <input type="checkbox" id="newsletter" name="newsletter" 
                       class="w-4 h-4 text-[#013370] border-gray-300 rounded focus:ring-[#013370]">
                <label for="newsletter" class="ml-2 text-sm text-gray-600">
                    Subscribe to our newsletter for updates and news
                </label>
            </div>
            
            <button type="submit" 
                    class="w-full bg-[#013370] text-white py-4 px-6 rounded-lg font-semibold hover:bg-[#185391] transition-all duration-300 transform hover:scale-105">
                <i class="fa-solid fa-paper-plane mr-2"></i>
                Send Message
            </button>
        </form>
    </div>

    <!-- Contact Information -->
    <div class="flex-1 space-y-8">
        <!-- Contact Info Cards -->
        <div class="bg-white rounded-xl shadow-lg p-8">
            <h3 class="text-2xl font-bold text-[#013370] mb-6">Get in Touch</h3>
            <div class="space-y-6">
                <div class="flex items-start gap-4">
                    <div class="bg-[#013370] text-white rounded-full w-12 h-12 flex items-center justify-center">
                        <i class="fa-solid fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-[#013370] mb-1">Address</h4>
                        <p class="text-gray-600">123 University Avenue<br>Education District<br>City, State 12345</p>
                    </div>
                </div>
                
                <div class="flex items-start gap-4">
                    <div class="bg-[#013370] text-white rounded-full w-12 h-12 flex items-center justify-center">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-[#013370] mb-1">Phone</h4>
                        <p class="text-gray-600">+1 (555) 123-4567<br>+1 (555) 123-4568</p>
                    </div>
                </div>
                
                <div class="flex items-start gap-4">
                    <div class="bg-[#013370] text-white rounded-full w-12 h-12 flex items-center justify-center">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-[#013370] mb-1">Email</h4>
                        <p class="text-gray-600">info@university.edu<br>admissions@university.edu</p>
                    </div>
                </div>
                
                <div class="flex items-start gap-4">
                    <div class="bg-[#013370] text-white rounded-full w-12 h-12 flex items-center justify-center">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-[#013370] mb-1">Office Hours</h4>
                        <p class="text-gray-600">Monday - Friday: 8:00 AM - 6:00 PM<br>Saturday: 9:00 AM - 2:00 PM</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Social Media -->
        <div class="bg-white rounded-xl shadow-lg p-8">
            <h3 class="text-2xl font-bold text-[#013370] mb-6">Follow Us</h3>
            <div class="flex gap-4">
                <a href="#" class="bg-[#013370] text-white rounded-full w-12 h-12 flex items-center justify-center hover:bg-[#185391] transition-all duration-300">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="#" class="bg-[#013370] text-white rounded-full w-12 h-12 flex items-center justify-center hover:bg-[#185391] transition-all duration-300">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="#" class="bg-[#013370] text-white rounded-full w-12 h-12 flex items-center justify-center hover:bg-[#185391] transition-all duration-300">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
                <a href="#" class="bg-[#013370] text-white rounded-full w-12 h-12 flex items-center justify-center hover:bg-[#185391] transition-all duration-300">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="#" class="bg-[#013370] text-white rounded-full w-12 h-12 flex items-center justify-center hover:bg-[#185391] transition-all duration-300">
                    <i class="fa-brands fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
</div> 