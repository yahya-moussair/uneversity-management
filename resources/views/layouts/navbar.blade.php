<nav class="fixed top-0 z-20 w-full mb-10 bg-white border-b border-gray-200 rounded-b-lg shadow-lg start-0">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
        <a href="{{ route('app.index') }}"
            class="flex items-center space-x-3 transition-all duration-300 rtl:space-x-reverse hover:scale-110">
            <img src="{{ asset('asset/images/logo.png') }}" class="w-[5rem]" alt="Flowbite Logo">
            <h2 class="text-2xl font-extrabold text-[#013370]">SmartEdu</h2>
        </a>
        <div class="items-center justify-between hidden w-full gap-5 md:flex md:w-auto md:order-1" id="navbar-sticky">
            <div class="flex gap-2 md:order-2 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="px-4 py-2 text-[1.1rem]  text-center text-white rounded-lg hover focus:ring-4 focus:outline-none focus:ring-blue-300 bg-[#013370] hover:bg-[#185391] duration-300 transition-all">Log
                    In</button>
                <button type="button"
                    class="px-4 py-2 text-[1.1rem]  text-center text-white rounded-lg hover focus:ring-4 focus:outline-none focus:ring-blue-300 bg-[#013370] hover:bg-[#185391] duration-300 transition-all">Sign
                    Up</button>

            </div>
            <ul
                class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg md:p-0 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                <li>
                    <a href="#"
                        class="block px-3 py-2 text-[1.1rem] gray-900 transition-all duration-300 text- hover:scale-105"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-3 py-2 text-[1.1rem] gray-900 transition-all duration-300 text- hover:scale-105">About</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-3 py-2 text-[1.1rem] gray-900 transition-all duration-300 text- hover:scale-105">Services</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-3 py-2 text-[1.1rem] gray-900 transition-all duration-300 text- hover:scale-105">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
