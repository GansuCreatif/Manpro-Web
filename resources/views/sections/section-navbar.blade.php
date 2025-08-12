<nav id = "main-navbar"
    class="bg-white border-b 
            border-gray-200 px-4 py-3 
            fixed top-0 left-64
            right-0 z-50 shadow">
    <div class="flex justify-between items-center">
        <!-- Kiri -->
        <div class="flex items-center space-x-3">
            <!-- Tombol Hamburger -->
            <button id="hamburger-btn" type="button" aria-controls="drawer-sidebar"
                class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M3 5h14a1 1 0 010 2H3a1 1 0 010-2zm0 4h14a1 1 0 010 2H3a1 1 0 010-2zm0 4h14a1 1 0 010 2H3a1 1 0 010-2z"
                        clip-rule="evenodd" />
                </svg>
            </button>
            <!-- Search bar kecil -->
            <div class="relative w-full">
                <!-- Icon Search -->
                <span class="absolute inset-y-0 left-0 flex items-center pl-2 text-gray-400">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z" />
                    </svg>
                </span>

                <!-- Input -->
                <input id="tableSearch" type="text" placeholder="Search..."
                    class="w-full pl-8 pr-2 py-1.5 border border-gray-300 rounded text-xs text-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500" />
            </div>
        </div>

        <!-- Kanan -->
        <div class="flex items-center space-x-4">
            <span class="text-gray-500">{{ navbarDate() }}</span>
            <!-- Outline bell -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V4a2 2 0 10-4 0v1.341C8.67 6.165 8 7.444 8 9v5.159c0 .538-.214 1.055-.595 1.436L6 17h9z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.73 21a2 2 0 01-3.46 0" />
            </svg>
            <span class="text-sm text-gray-600">Hi, Ahmad</span>
            <img class="w-8 h-8 rounded-full" src="https://ui-avatars.com/api/?name=Ahmad&background=0D8ABC&color=fff"
                alt="Avatar">

        </div>
    </div>
</nav>
