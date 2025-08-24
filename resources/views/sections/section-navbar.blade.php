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
            <!-- Judul Halaman -->
            @php
                $titles = [
                    'dashboard' => 'Dashboard',
                    'Project-List' => 'Project List / Project Active',
                    'Project-Data-Sync' => 'Project List / Project Sync',
                    'Project-Histori' => 'Project List / Project History',
                    'Project-Report' => 'Project Report',
                    'Project-Issue' => 'Project Issue',
                    'project.finance.cashin' => 'Project Finance / Cash In',
                    'project-finance-cashout' => 'Project Finance / Cash Out',
                    'Project-List-Active' => 'Project List / Project Active',
                    'Project-Details' => 'Project List / Project Active / Details',
                    'Form-Async' => 'Project List / Project Sync / Form-Async',
                    'Form-Async-Period' => 'Project List / Project Sync / Form-Async-Period',
                    'Form-Async-Organization' => 'Project List / Project Sync / Form-Async-Organization',
                    'Form-Async-Finance' => 'Project List / Project Sync / Form-Async-Finance',
                    'Form-Async-Report' => 'Project List / Project Sync / Form-Async-Report',
                    'Project-Report-Detail' => 'Project Report / Details',
                    'Project-Issue-Detail' => 'Project Issue / Details',
                    'project-cashin-detail-awal' => 'Project Finance / Cash In / Details',
                    'Project-Finance-Cashin-Detail' => 'Project Finance / Cashi In / Details',
                    'project-cashout-detail-awal' => 'Project Finance / Cash Out / Details',
                ];
                $pageTitle = $titles[Route::currentRouteName()] ?? 'Dashboard';
            @endphp
            <h1 class="text-xs  text-gray-300">
                {{ $pageTitle }}
            </h1>
        </div>

        <!-- Kanan -->
        <div class="flex items-center space-x-4">
            <span class="text-gray-500 text-xs">{{ navbarDate() }}</span>
            <!-- Outline bell -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-600" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V4a2 2 0 10-4 0v1.341C8.67 6.165 8 7.444 8 9v5.159c0 .538-.214 1.055-.595 1.436L6 17h9z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.73 21a2 2 0 01-3.46 0" />
            </svg>
            <div class="relative w-6 h-6 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                <svg class="absolute w-8 h-8 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
        </div>
    </div>
</nav>
