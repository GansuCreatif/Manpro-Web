<aside id="drawer-sidebar"
    class="fixed top-0 left-0 z-55 w-64 h-screen p-4 overflow-y-auto transition-transform bg-blue-700 text-white"
    tabindex="-1" aria-labelledby="drawer-sidebar-label">

    <!-- Logo + Brand (Gen Z Style - White Clean) -->
    <div class="flex flex-col items-center mb-6">
        <!-- Brand Name -->
        <h1 class="text-3xl font-extrabold tracking-tight text-white">
            Pro<span class="italic font-light">Manage</span>
        </h1>

        <!-- Sub Brand -->
        <p class="text-[0.7rem] tracking-wide text-gray-200 mt-1">
            by <span class="font-bold text-white">KAI</span> Properti
        </p>
    </div>


    <!-- Dashboard link -->
    <a href="{{ route('Dashboard') }}"
        class="flex items-center p-2 mb-10 text-white font-semibold rounded-lg hover:bg-blue-500 bg-blue-500">
        <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10 6.025A7.5 7.5 0 1 0 17.975 14H10V6.025Z" />
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M13.5 3c-.169 0-.334.014-.5.025V11h7.975c.011-.166.025-.331.025-.5A7.5 7.5 0 0 0 13.5 3Z" />
        </svg>
        <p class="ml-4">Dashboard</p>
    </a>

    <ul class="space-y-5">

        <!-- Induk Project List -->
        <li>
            <button type="button"
                class="flex items-center w-full p-2 text-white rounded-lg transition
        {{ request()->routeIs('Project-List*') || request()->routeIs('Project.Data.Sync') || request()->routeIs('Project-Histori') ? 'bg-gray-700' : 'bg-blue-500' }}"
                data-collapse-toggle="project-list-submenu">

                <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                        d="M9 8h10M9 12h10M9 16h10M4.99 8H5m-.02 4h.01m0 4H5" />
                </svg>
                <p class="ml-3 flex-1 text-left">Project List</p>
                <svg class="w-4 h-4 ml-auto transition-transform" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <ul id="project-list-submenu"
                class="space-y-1 pl-8 mt-2 {{ request()->routeIs('Project-List*') || request()->routeIs('Project-Data-Sync') || request()->routeIs('Project-Histori') ? '' : 'hidden' }}">

                <!-- Submenu Project Active -->
                <li>
                    <a href="{{ route('Project-List') }}"
                        class="submenu block px-4 py-2 rounded transition
               {{ request()->routeIs('Project-List*') ? 'bg-gray-700 text-white' : 'bg-blue-500 hover:bg-gray-700' }}">
                        Project Active
                    </a>
                </li>

                <!-- Submenu Project Sync -->
                <li>
                    <a href="{{ route('Project-Data-Sync') }}"
                        class="submenu block px-4 py-2 rounded transition
               {{ request()->routeIs('Project-Data-Sync') ? 'bg-gray-700 text-white' : 'bg-blue-500 hover:bg-gray-700' }}">
                        Project Sync
                    </a>
                </li>

                <!-- Submenu Project History -->
                <li>
                    <a href="{{ route('Project-Histori') }}"
                        class="submenu block px-4 py-2 rounded transition
               {{ request()->routeIs('Project-Histori') ? 'bg-gray-700 text-white' : 'bg-blue-500 hover:bg-gray-700' }}">
                        Projects History
                    </a>
                </li>
            </ul>
        </li>


        <!-- Project Report -->
        <li>
            <a href="{{ route('Project-Report') }}"
                class="flex items-center w-full p-2 text-white rounded-lg transition
       {{ request()->routeIs('Project-Report') ? 'bg-gray-700' : 'bg-blue-500 hover:bg-gray-700' }}">
                <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 3v4a1 1 0 0 1-1 1H5m4 8h6m-6-4h6m4-8v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z" />
                </svg>
                <p class="ml-3 flex-1 text-left">Project Report</p>
            </a>
        </li>

        <!-- Project Issue -->
        <li>
            <a href="{{ route('Project-Issue') }}"
                class="flex items-center w-full p-2 text-white rounded-lg transition
                    {{ request()->routeIs('Project-Issue') ? 'bg-gray-700' : 'bg-blue-500 hover:bg-gray-700' }}">
                <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 9v2m0 4h.01M10.29 3.86l-7.4 12.78A1 1 0 0 0 3.88 18h16.24a1 1 0 0 0 .85-1.36l-7.4-12.78a1 1 0 0 0-1.72 0z" />
                </svg>
                <p class="ml-3 flex-1 text-left">Project Issue</p>
            </a>
        </li>
        <!-- Project Finance -->
        <li>
            <button type="button"
                class="flex items-center w-full p-2 text-white rounded-lg transition
        {{ request()->routeIs('project.finance.cashin') || request()->routeIs('project-finance-cashout') ? 'bg-gray-700' : 'bg-blue-500 hover:bg-gray-700' }}"
                data-collapse-toggle="project-finance-submenu">

                <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path
                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.105 0 2-.672 2-1.5S13.105 5 12 5s-2 .672-2 1.5S10.895 8 12 8Zm0 8c-1.105 0-2 .672-2 1.5s.895 1.5 2 1.5 2-.672 2-1.5-.895-1.5-2-1.5Z" />
                </svg>
                <p class="ml-3 flex-1 text-left">Project Finance</p>
                <svg class="w-4 h-4 ml-auto transition-transform" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <ul id="project-finance-submenu"
                class="space-y-1 pl-8 mt-2 {{ request()->routeIs('project.finance.cashin') || request()->routeIs('project-finance-cashout') ? '' : 'hidden' }}">

                <li>
                    <a href="{{ route('project.finance.cashin') }}"
                        class="submenu block px-4 py-2 rounded transition
               {{ request()->routeIs('project.finance.cashin') ? 'bg-gray-700 text-white' : 'bg-blue-500 hover:bg-gray-700' }}">
                        Cash In
                    </a>
                </li>

                <li>
                    <a href="{{ route('project-finance-cashout') }}"
                        class="submenu block px-4 py-2 rounded transition
               {{ request()->routeIs('project-finance-cashout') ? 'bg-gray-700 text-white' : 'bg-blue-500 hover:bg-gray-700' }}">
                        Cash Out
                    </a>
                </li>
            </ul>
        </li>

    </ul>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Toggle induk menu
            document.querySelectorAll("[data-collapse-toggle]").forEach(btn => {
                btn.addEventListener("click", () => {
                    const targetId = btn.getAttribute("data-collapse-toggle");
                    const target = document.getElementById(targetId);

                    target.classList.toggle("hidden");

                    if (!target.classList.contains("hidden")) {
                        // Induk aktif
                        btn.classList.remove("bg-blue-500");
                        btn.classList.add("bg-gray-700");
                    } else {
                        // Induk ditutup → reset induk & submenu
                        btn.classList.remove("bg-gray-700");
                        btn.classList.add("bg-blue-500");

                        target.querySelectorAll(".submenu").forEach(link => {
                            link.classList.remove("bg-gray-700", "text-white");
                            link.classList.add("bg-blue-500");
                        });
                    }
                });
            });

            // Klik submenu
            document.querySelectorAll(".submenu").forEach(link => {
                link.addEventListener("click", () => {
                    const parent = link.closest("ul");
                    const parentButton = document.querySelector(
                        `[data-collapse-toggle="${parent.id}"]`
                    );

                    // Reset submenu dalam UL ini
                    parent.querySelectorAll(".submenu").forEach(sib => {
                        sib.classList.remove("bg-gray-700", "text-white");
                        sib.classList.add("bg-blue-500");
                    });

                    // Aktifkan submenu terpilih
                    link.classList.remove("bg-blue-500");
                    link.classList.add("bg-gray-700", "text-white");

                    // Pastikan induk tetap abu-abu
                    parentButton.classList.remove("bg-blue-500");
                    parentButton.classList.add("bg-gray-700");

                    // Jangan collapse
                    parent.classList.remove("hidden");
                });
            });
        });
    </script>


</aside>
