    <div class="flex justify-between items-center mb-4 rounded-b-none">
        <!-- Search -->
        <div class="relative w-full max-w-xl mx-md">
            <span class="absolute inset-y-0 left-0 flex items-center pl-2 text-gray-400">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z" />
                </svg>
            </span>
            <input id="extraSmallSearch" type="text" placeholder="Search..."
                class="search-input w-full pl-8 pr-3 py-2 border border-gray-300 rounded text-sm text-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500" />
        </div>

        <!-- Export Icon -->
        <div class="flex flex-end items-center">
            Export to :
            <!-- Export PDF -->
            <button type="button" class="p-1" title="Export PDF">
                <svg width="24" height="24" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="pdfGradient" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0%" stop-color="#C62828" />
                            <stop offset="100%" stop-color="#E53935" />
                        </linearGradient>
                        <filter id="shadow" x="-20%" y="-20%" width="140%" height="140%">
                            <feDropShadow dx="2" dy="2" stdDeviation="2" flood-color="#000"
                                flood-opacity="0.2" />
                        </filter>
                    </defs>
                    <rect x="8" y="8" width="48" height="56" rx="4" fill="url(#pdfGradient)"
                        filter="url(#shadow)" />
                    <polygon points="48,8 56,16 48,16" fill="#FFCDD2" />
                    <text x="32" y="38" font-size="16" font-family="Arial" fill="white" text-anchor="middle"
                        font-weight="bold">PDF</text>
                </svg>
            </button>

            <!-- Export CSV -->
            <button type="button" class="p-1" title="Export CSV">
                <svg width="24" height="24" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="csvGradient" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0%" stop-color="#43A047" />
                            <stop offset="100%" stop-color="#66BB6A" />
                        </linearGradient>
                        <filter id="shadow" x="-20%" y="-20%" width="140%" height="140%">
                            <feDropShadow dx="2" dy="2" stdDeviation="2" flood-color="#000"
                                flood-opacity="0.2" />
                        </filter>
                    </defs>
                    <rect x="8" y="8" width="48" height="56" rx="4" fill="url(#csvGradient)"
                        filter="url(#shadow)" />
                    <polygon points="48,8 56,16 48,16" fill="#C8E6C9" />
                    <text x="32" y="38" font-size="16" font-family="Arial" fill="white" text-anchor="middle"
                        font-weight="bold">CSV</text>
                </svg>
            </button>

            <!-- Export Excel -->
            <button type="button" class="p-1"title="Export Excel">
                <svg width="24" height="24" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="xlsxGradient" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0%" stop-color="#2E7D32" />
                            <stop offset="100%" stop-color="#388E3C" />
                        </linearGradient>
                        <filter id="shadow" x="-20%" y="-20%" width="140%" height="140%">
                            <feDropShadow dx="2" dy="2" stdDeviation="2" flood-color="#000"
                                flood-opacity="0.2" />
                        </filter>
                    </defs>
                    <rect x="8" y="8" width="48" height="56" rx="4" fill="url(#xlsxGradient)"
                        filter="url(#shadow)" />
                    <polygon points="48,8 56,16 48,16" fill="#A5D6A7" />
                    <text x="32" y="38" font-size="16" font-family="Arial" fill="white" text-anchor="middle"
                        font-weight="bold">XLSX</text>
                </svg>
            </button>
        </div>
    </div>

    <div class="p-1">
        <!-- Wrapper: auto scroll di layar kecil -->
        <div class="w-auto overflow-x-auto lg:overflow-x-visible">
            <table id="cashinTable" class="min-w-full table-200 text-xs text-left text-black">
                <thead class="text-xs text-blue-900 uppercase bg-blue-50 text-center">
                    <tr class="border-b-[3px] border-blue-700">
                        <th class="px-2 py-3">No</th>
                        <th class="px-2 py-3">Type</th>
                        <th class="px-2 py-3">Date Plan</th>
                        <th class="px-2 py-3">Date Actual</th>
                        <th class="px-2 py-3">Value Plan</th>
                        <th class="px-2 py-3">Value Actual</th>
                        <th class="px-2 py-3">Persentage</th>
                        <th class="px-2 py-3">Status</th>
                        <th class="px-2 py-3 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white">
                        <td class="text-center">1</td>
                        <td class="text-center">Down Payment</td>
                        <td class="text-center">15 January 2025</td>
                        <td class="text-center">15 January 2025</td>
                        <td class="text-center">Rp.300.000.000</td>
                        <td class="text-center">Rp.300.000.000</td>
                        <td class="text-center">10%</td>
                        <td class="text-center text-green-500 font-bold">RECEIPT</td>
                        <td class="py-2 flex justify-center gap-2">
                            <a href="{{ route('Project-Finance-Cashin-Detail') }}"
                                class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                                Details
                            </a>
                        </td>
                    </tr>
                    <tr class="bg-blue-50">
                        <td class="text-center">2</td>
                        <td class="text-center">Term 1</td>
                        <td class="text-center">4 May 2025</td>
                        <td class="text-center">-</td>
                        <td class="text-center">Rp.1.000.000.000</td>
                        <td class="text-center">-</td>
                        <td class="text-center">-</td>
                        <td class="text-center text-orange-500 font-bold">SEND</td>
                        <td class="py-2 flex justify-center gap-2">
                            <a href="{{ route('Project-Finance-Cashin-Detail') }}"
                                class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                                Details
                            </a>
                        </td>
                    </tr>
                    <tr class="bg-white">
                        <td class=" text-center">3</td>
                        <td class=" text-center">Term 2</td>
                        <td class=" text-center">4 June 2025</td>
                        <td class=" text-center">-</td>
                        <td class=" text-center">Rp.1.500.000.000</td>
                        <td class=" text-center">-</td>
                        <td class=" text-center">-</td>
                        <td class=" text-center text-blue-900 font-bold">CHECK</td>
                        <td class="py-2 flex justify-center gap-2">
                            <a href="{{ route('Project-Finance-Cashin-Detail') }}"
                                class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                                Details
                            </a>
                        </td>
                    </tr>
                    <tr class="bg-blue-50">
                        <td class="text-center">4</td>
                        <td class="text-center">Term 3</td>
                        <td class="text-center">4 August 2025</td>
                        <td class="text-center">-</td>
                        <td class="text-center">Rp.2.500.000.000</td>
                        <td class="text-center">-</td>
                        <td class="text-center">-</td>
                        <td class="text-center text-blue-500 font-bold">REQUEST</td>
                        <td class="py-2 flex justify-center gap-2">
                            <a href="{{ route('Project-Finance-Cashin-Detail') }}"
                                class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                                Details
                            </a>
                        </td>
                    </tr>
                    <tr class="bg-white">
                        <td class=" text-center">5</td>
                        <td class=" text-center">Term 4</td>
                        <td class=" text-center">4 Oktober 2025</td>
                        <td class=" text-center">-</td>
                        <td class=" text-center">Rp.5.000.000.000</td>
                        <td class=" text-center">-</td>
                        <td class=" text-center">-</td>
                        <td class=" text-center">-</td>
                        <td class="py-2 flex justify-center gap-2">
                            <a href="{{ route('Project-Finance-Cashin-Detail') }}"
                                class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                                Details
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        document.getElementById('extraSmallSearch').addEventListener('input', function() {
            const keyword = this.value.toLowerCase();
            const rows = document.querySelectorAll('#cashinTable tbody tr');

            rows.forEach(row => {
                const rowText = row.textContent.toLowerCase();
                row.style.display = rowText.includes(keyword) ? '' : 'none';
            });
        });
    </script>
