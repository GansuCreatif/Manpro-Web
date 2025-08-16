<aside id="drawer-sidebar"
    class="fixed top-0 left-0 z-55 w-64 h-screen p-4 overflow-y-auto transition-transform bg-blue-900 text-white"
    tabindex="-1" aria-labelledby="drawer-sidebar-label">

    <!-- Logo + brand -->
    <div class="mt-0 mb-4">
        <div class="text-center">
            <img src="{{ asset('img/proman-sidebar-2.png') }}" alt="image-proman">
        </div>
    </div>

    <!-- Dashboard link -->
    <a href="{{ route('Dashboard') }}"
        class="flex items-center p-2 mb-4 text-white font-semibold rounded-lg hover:bg-blue-500 bg-blue-500">
        <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10 6.025A7.5 7.5 0 1 0 17.975 14H10V6.025Z" />
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M13.5 3c-.169 0-.334.014-.5.025V11h7.975c.011-.166.025-.331.025-.5A7.5 7.5 0 0 0 13.5 3Z" />
        </svg>
        <p class="ml-4">Dashboard</p>
    </a>
    </div>

    <!-- Icon only menu -->
    <ul class="space-y-2">
        <li class="mt-10">
            <a href="{{ route('Project-List') }}"
                class="flex items-center p-2 mb-4 text-white rounded-lg hover:bg-blue-950 bg-gray-700">
                <!-- Icon Home -->
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                        d="M9 8h10M9 12h10M9 16h10M4.99 8H5m-.02 4h.01m0 4H5" />
                </svg>
                <p class="ml-3">Project List</p>
            </a>
        </li>
        <li class="mb-5">
            <a href="{{ route('Project-List') }}"
                class="flex items-center p-2 text-white rounded-lg  hover:bg-blue-950 bg-blue-500">
                <!-- Icon Folder -->
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 3v4a1 1 0 0 1-1 1H5m4 8h6m-6-4h6m4-8v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z" />
                </svg>
                <p class="ml-3">Project Report</p>
            </a>
        </li>
        <li class="mt-5">
            <a href="{{ Route('Project-Issue') }}"
                class="flex items-center p-2 text-white rounded-lg hover:bg-blue-950 bg-blue-500">
                <!-- Icon Warning -->
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path
                        d="M10.29 3.86L1.82 18a1 1 0 0 0 .86 1.5h18.64a1 1 0 0 0 .86-1.5L13.71 3.86a1 1 0 0 0-1.72 0z" />
                    <line x1="12" y1="9" x2="12" y2="13" />
                    <line x1="12" y1="17" x2="12.01" y2="17" />
                </svg>
                <p class="ml-3">Project Issue</p>
            </a>
        </li>
        <li class="mt-5">
            <a href="{{ Route('Keuangan') }}"
                class="flex items-center p-2 text-white rounded-lg hover:bg-blue-950 bg-blue-500">
                <!-- Bar chart -->
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="2" width="20" height="20" rx="2" ry="2" />
                    <polyline points="8 16 10 14 13 17 16 12 20 16" />
                </svg>

                <p class="ml-3">Keuangan</p>
            </a>
        </li>
    </ul>
</aside>
