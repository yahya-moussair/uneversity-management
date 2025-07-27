<nav class="fixed z-50 w-full bg-white shadow-lg">
    <div class="px-4 mx-auto max-w-7xl">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="{{ route('app.home') }}" class="flex items-center">
                    <img src="{{ asset('asset/images/logo.png') }}" alt="Logo" class="w-auto h-8">
                </a>
            </div>
            <div class="items-center hidden space-x-8 md:flex">
                <a href="{{ route('app.home') }}" class="text-gray-700 hover:text-[#013370] px-3 py-2 rounded-md text-sm font-medium">Home</a>
                <a href="{{ route('app.about') }}" class="text-gray-700 hover:text-[#013370] px-3 py-2 rounded-md text-sm font-medium">About</a>
                <a href="{{ route('app.courses') }}" class="text-gray-700 hover:text-[#013370] px-3 py-2 rounded-md text-sm font-medium">Specializations</a>
                <a href="{{ route('app.contact') }}" class="text-gray-700 hover:text-[#013370] px-3 py-2 rounded-md text-sm font-medium">Contact</a>
            </div>
            <div class="flex items-center space-x-4">
                <a href="#" class="text-gray-700 hover:text-[#013370] px-3 py-2 rounded-md text-sm font-medium">Login</a>
                <a href="{{ route('register') }}" class="bg-[#013370] text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-[#185391] transition-colors">Register</a>
            </div>
        </div>
    </div>
</nav>
