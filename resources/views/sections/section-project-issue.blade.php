<div class="flex justify-between items-center mb-4">
    <!-- Search bar kecil -->
    <div class="relative w-full max-w-xs">
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

    <div class="flex items-center gap-2">
        <!-- Export CSV -->
        <button type="button"
            class="p-2 bg-green-500 hover:bg-green-600 text-white rounded-lg shadow focus:outline-none focus:ring-2 focus:ring-green-400"
            title="Export CSV">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 4h16v4H4zm0 8h16v8H4z" />
            </svg>
        </button>

        <!-- Export Excel -->
        <button type="button"
            class="p-2 bg-emerald-500 hover:bg-emerald-600 text-white rounded-lg shadow focus:outline-none focus:ring-2 focus:ring-emerald-400"
            title="Export Excel">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 4h16v16H4z" />
            </svg>
        </button>

        <!-- Export PDF -->
        <button type="button"
            class="p-2 bg-red-500 hover:bg-red-600 text-white rounded-lg shadow focus:outline-none focus:ring-2 focus:ring-red-400"
            title="Export PDF">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
            </svg>
        </button>
    </div>
</div>

<div class="bg-white rounded-lg shadow p-4">
    <!-- Wrapper: auto scroll di layar kecil -->
    <div class="w-full overflow-x-auto lg:overflow-x-visible">
        <table class="min-w-full table-auto text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                <tr>
                    <th class="px-2 py-3">No</th>
                    <th class="px-2 py-3">Code</th>
                    <th class="px-2 py-3">Description</th>
                    <th class="px-2 py-3">Location</th>
                    <th class="px-2 py-3">Unit</th>
                    <th class="px-2 py-3">Project Manager</th>
                    <th class="px-2 py-3 whitespace-nowrap">Project Value</th>
                    <th class="px-2 py-3">User</th>
                    <th class="px-2 py-3 whitespace-nowrap">Start Date</th>
                    <th class="px-2 py-3 whitespace-nowrap">Finish Date</th>
                    <th class="px-2 py-3">Status</th>
                    <th class="px-2 py-3 text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-2 py-3">1</td>
                    <td class="px-2 py-3">P001</td>
                    <td class="px-2 py-3">KAI Terrace Ahmad Palembang</td>
                    <td class="px-2 py-3">Palembang</td>
                    <td class="px-2 py-3">PPC</td>
                    <td class="px-2 py-3">Damandaru Harumandoyo</td>
                    <td class="px-2 py-3 whitespace-nowrap">Rp 1.000.000.000</td>
                    <td class="px-2 py-3">Investasi</td>
                    <td class="px-2 py-3 whitespace-nowrap">2025-01-10</td>
                    <td class="px-2 py-3 whitespace-nowrap">2025-12-31</td>
                    <td class="px-2 py-3">
                        <span class="px-2 py-1 text-xs font-medium text-green-800 bg-green-100 rounded">
                            Active
                        </span>
                    </td>
                    <td class="px-2 py-3 flex justify-center gap-2">
                        <button class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded" title="Edit">
                            <a href="{{ route('Project-Details') }}"> Details </a>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
