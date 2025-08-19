<div class="flex justify-between items-center mb-4">
    <!-- Search bar kecil -->
    <div class="relative w-full max-w-xl mx-md">
        <!-- Icon Search -->
        <span class="absolute inset-y-0 left-0 flex items-center pl-2 text-gray-400">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z" />
            </svg>
        </span>

        <!-- Input -->
        <input id="extraSmallSearch" type="text" placeholder="Search..."
            class="w-full pl-8 pr-2 py-1.5 border border-gray-300 rounded text-xs text-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500" />
    </div>

    <div class="flex items-center gap-2">
        <!-- Button Sinkron Data -->
        {{-- 
<button type="button" hidden
    class="inline-flex items-center px-2.5 py-1.5 text-xs font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-300">
    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
        class="mr-1">
        <path
            d="M14.3935 5.37371C18.0253 6.70569 19.8979 10.7522 18.5761 14.4118C17.6363 17.0135 15.335 18.7193 12.778 19.0094M12.778 19.0094L13.8253 17.2553M12.778 19.0094L14.4889 20M9.60651 18.6263C5.97465 17.2943 4.10205 13.2478 5.42394 9.58823C6.36371 6.98651 8.66504 5.28075 11.222 4.99059M11.222 4.99059L10.1747 6.74471M11.222 4.99059L9.51114 4"
            stroke="#F0EFF7FF" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
    Sync SAP PS
</button>
--}}
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
</div>


<div>
    <!-- Wrapper: auto scroll di layar kecil -->
    <div class="w-full overflow-x-auto scrollbar-thin scrollbar-thumb-blue-300 scrollbar-track-blue-100">
        <table class="min-w-full table-200 text-xs text-left text-black">
            <thead class="text-sm font-semibold text-blue-900 bg-blue-50">
                <tr class="border-b-[3px] border-blue-700">
                    <th class="px-2 py-2 text-center">No</th>
                    <th class="px-2 py-2 text-center cursor-pointer whitespace-nowrap" onclick="sortTable(1)">
                        Week🔽</th>
                    <th class="px-2 py-2 text-center cursor-pointer whitespace-nowrap" onclick="sortTable(2)">
                        Start Date🔽</th>
                    <th class="px-2 py-2 text-center cursor-pointer whitespace-nowrap" onclick="sortTable(3)">
                        End Date🔽</th>
                    <th class="px-2 py-2 text-center cursor-pointer whitespace-nowrap" onclick="sortTable(4)">
                        Total Work🔽</th>
                    <th class="px-2 py-2 text-center cursor-pointer whitespace-nowrap" onclick="sortTable(5)">
                        Progress Plan (%)🔽</th>
                    <th class="px-2 py-2 text-center cursor-pointer whitespace-nowrap" onclick="sortTable(6)">
                        Progress Actual (%)🔽</th>
                    <th class="px-2 py-2 text-center cursor-pointer whitespace-nowrap" onclick="sortTable(7)">Status
                        🔽</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>

            <tbody id="projectTable">
                <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">Week 1</td>
                    <td class="text-center">2 January 2025</td>
                    <td class="text-center">4 January 2025</td>
                    <td class="text-center">4</td>
                    <td class="text-center">2.55</td>
                    <td class="text-center">2.75</td>
                    <td class="text-center font-bold text-blue-400">Fast</td>
                    <td class="px-5 py-5 flex justify-center gap-2">
                        <a href="#" class="p-2 bg-green-500 hover:bg-green-600 text-white rounded">
                            Edit
                        </a>
                        <a href="#" class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                            Details
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">2</td>
                    <td class="text-center">Week 2</td>
                    <td class="text-center">5 January 2025</td>
                    <td class="text-center">11 January 2025</td>
                    <td class="text-center">3</td>
                    <td class="text-center">4.24</td>
                    <td class="text-center">4.24</td>
                    <td class="text-center text-green-400 font-bold">On Time</td>
                    <td class="px-5 py-5 flex justify-center gap-2">
                        <a href="#" class="p-2 bg-green-500 hover:bg-green-600 text-white rounded">
                            Edit
                        </a>
                        <a href="#" class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                            Details
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">3</td>
                    <td class="text-center">Week 3</td>
                    <td class="text-center">12 January 2025</td>
                    <td class="text-center">18 January 2025</td>
                    <td class="text-center">2</td>
                    <td class="text-center">6.75</td>
                    <td class="text-center">6.75</td>
                    <td class="text-center text-green-400 font-bold">On Time</td>
                    <td class="px-5 py-5 flex justify-center gap-2">
                        <a href="#" class="p-2 bg-green-500 hover:bg-green-600 text-white rounded">
                            Edit
                        </a>
                        <a href="#" class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                            Details
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">4</td>
                    <td class="text-center">Week 4</td>
                    <td class="text-center">19 January 2025</td>
                    <td class="text-center">26 January 2025</td>
                    <td class="text-center">1</td>
                    <td class="text-center">9.3</td>
                    <td class="text-center">9.3</td>
                    <td class="text-center text-green-400 font-bold">On Time</td>
                    <td class="px-5 py-5 flex justify-center gap-2">
                        <a href="#" class="p-2 bg-green-500 hover:bg-green-600 text-white rounded">
                            Edit
                        </a>
                        <a href="#" class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                            Details
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">5</td>
                    <td class="text-center">Week 5</td>
                    <td class="text-center">26 January 2025</td>
                    <td class="text-center">1 February 2025</td>
                    <td class="text-center">3</td>
                    <td class="text-center">11.2</td>
                    <td class="text-center">11.2</td>
                    <td class="text-center text-green-400 font-bold">On Time</td>
                    <td class="px-5 py-5 flex justify-center gap-2">
                        <a href="#" class="p-2 bg-green-500 hover:bg-green-600 text-white rounded">
                            Edit
                        </a>
                        <a href="#" class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                            Details
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">6</td>
                    <td class="text-center">Week 6</td>
                    <td class="text-center">2 February 2025</td>
                    <td class="text-center">8 February 2025</td>
                    <td class="text-center">2</td>
                    <td class="text-center">14</td>
                    <td class="text-center">14</td>
                    <td class="text-center text-green-400 font-bold">On Time</td>
                    <td class="px-5 py-5 flex justify-center gap-2">
                        <a href="#" class="p-2 bg-green-500 hover:bg-green-600 text-white rounded">
                            Edit
                        </a>
                        <a href="#" class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                            Details
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">7</td>
                    <td class="text-center">Week 7</td>
                    <td class="text-center">9 February 2025</td>
                    <td class="text-center">15 February 2025</td>
                    <td class="text-center">1</td>
                    <td class="text-center">15.2</td>
                    <td class="text-center">15.2</td>
                    <td class="text-center font-bold text-green-400">On Time</td>
                    <td class="px-5 py-5 flex justify-center gap-2">
                        <a href="#" class="p-2 bg-green-500 hover:bg-green-600 text-white rounded">
                            Edit
                        </a>
                        <a href="#" class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                            Details
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">8</td>
                    <td class="text-center">Week 8</td>
                    <td class="text-center">16 February 2025</td>
                    <td class="text-center">22 February 2025</td>
                    <td class="text-center">4</td>
                    <td class="text-center">17.1</td>
                    <td class="text-center">17.1</td>
                    <td class="text-center text-green-400 font-bold">On Time</td>
                    <td class="px-5 py-5 flex justify-center gap-2">
                        <a href="#" class="p-2 bg-green-500 hover:bg-green-600 text-white rounded">
                            Edit
                        </a>
                        <a href="#" class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                            Details
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">9</td>
                    <td class="text-center">Week 9</td>
                    <td class="text-center">23 February 2025</td>
                    <td class="text-center">1 March 2025</td>
                    <td class="text-center">5</td>
                    <td class="text-center">18.31</td>
                    <td class="text-center">18.31</td>
                    <td class="text-center text-green-400 font-bold">On Time</td>
                    <td class="px-5 py-5 flex justify-center gap-2">
                        <a href="#" class="p-2 bg-green-500 hover:bg-green-600 text-white rounded">
                            Edit
                        </a>
                        <a href="#" class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                            Details
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">10</td>
                    <td class="text-center">Week 10</td>
                    <td class="text-center">2 March 2025</td>
                    <td class="text-center">8 March 2025</td>
                    <td class="text-center">3</td>
                    <td class="text-center">18.98</td>
                    <td class="text-center">18.98</td>
                    <td class="text-center text-green-400 font-bold">On Time</td>
                    <td class="px-5 py-5 flex justify-center gap-2">
                        <a href="#" class="p-2 bg-green-500 hover:bg-green-600 text-white rounded">
                            Edit
                        </a>
                        <a href="#" class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                            Details
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">11</td>
                    <td class="text-center">Week 11</td>
                    <td class="text-center">9 March 2025</td>
                    <td class="text-center">15 March 2025</td>
                    <td class="text-center">2</td>
                    <td class="text-center">19.5</td>
                    <td class="text-center">19.5</td>
                    <td class="text-center text-green-400 font-bold">On Time</td>
                    <td class="px-5 py-5 flex justify-center gap-2">
                        <a href="#" class="p-2 bg-green-500 hover:bg-green-600 text-white rounded">
                            Edit
                        </a>
                        <a href="#" class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                            Details
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">12</td>
                    <td class="text-center">Week 12</td>
                    <td class="text-center">16 March 2025</td>
                    <td class="text-center">22 March 2025</td>
                    <td class="text-center">2</td>
                    <td class="text-center">20.89</td>
                    <td class="text-center">20.89</td>
                    <td class="text-center text-green-400 font-bold">On Time</td>
                    <td class="px-5 py-5 flex justify-center gap-2">
                        <a href="#" class="p-2 bg-green-500 hover:bg-green-600 text-white rounded">
                            Edit
                        </a>
                        <a href="#" class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                            Details
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">13</td>
                    <td class="text-center">Week 13</td>
                    <td class="text-center">23 March 2025</td>
                    <td class="text-center">29 March 2025</td>
                    <td class="text-center">3</td>
                    <td class="text-center">21.76</td>
                    <td class="text-center">21.76</td>
                    <td class="text-center text-green-400 font-bold">On Time</td>
                    <td class="px-5 py-5 flex justify-center gap-2">
                        <a href="#" class="p-2 bg-green-500 hover:bg-green-600 text-white rounded">
                            Edit
                        </a>
                        <a href="#" class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                            Details
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">14</td>
                    <td class="text-center">Week 14</td>
                    <td class="text-center">30 March 2025</td>
                    <td class="text-center">5 April 2025</td>
                    <td class="text-center">2</td>
                    <td class="text-center">23.1</td>
                    <td class="text-center">23.5</td>
                    <td class="text-center text-blue-400 font-bold">Fast</td>
                    <td class="px-5 py-5 flex justify-center gap-2">
                        <a href="#" class="p-2 bg-green-500 hover:bg-green-600 text-white rounded">
                            Edit
                        </a>
                        <a href="#" class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                            Details
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">15</td>
                    <td class="text-center">Week 15</td>
                    <td class="text-center">6 April 2025</td>
                    <td class="text-center">12 April 2025</td>
                    <td class="text-center">3</td>
                    <td class="text-center">24.8</td>
                    <td class="text-center">24.8</td>
                    <td class="text-center text-green-400 font-bold">On Time</td>
                    <td class="px-5 py-5 flex justify-center gap-2">
                        <a href="#" class="p-2 bg-green-500 hover:bg-green-600 text-white rounded">
                            Edit
                        </a>
                        <a href="#" class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                            Details
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">16</td>
                    <td class="text-center">Week 16</td>
                    <td class="text-center">13 April 2025</td>
                    <td class="text-center">19 April 2025</td>
                    <td class="text-center">2</td>
                    <td class="text-center">26.3</td>
                    <td class="text-center">25.9</td>
                    <td class="text-center text-red-400 font-bold">Late</td>
                    <td class="px-5 py-5 flex justify-center gap-2">
                        <a href="#" class="p-2 bg-green-500 hover:bg-green-600 text-white rounded">
                            Edit
                        </a>
                        <a href="#" class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                            Details
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">17</td>
                    <td class="text-center">Week 17</td>
                    <td class="text-center">20 April 2025</td>
                    <td class="text-center">26 April 2025</td>
                    <td class="text-center">4</td>
                    <td class="text-center">28.7</td>
                    <td class="text-center">28.7</td>
                    <td class="text-center text-green-400 font-bold">On Time</td>
                    <td class="px-5 py-5 flex justify-center gap-2">
                        <a href="#" class="p-2 bg-green-500 hover:bg-green-600 text-white rounded">
                            Edit
                        </a>
                        <a href="#" class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                            Details
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">18</td>
                    <td class="text-center">Week 18</td>
                    <td class="text-center">27 April 2025</td>
                    <td class="text-center">3 May 2025</td>
                    <td class="text-center">3</td>
                    <td class="text-center">30.5</td>
                    <td class="text-center">30.9</td>
                    <td class="text-center text-blue-400 font-bold">Fast</td>
                    <td class="px-5 py-5 flex justify-center gap-2">
                        <a href="#" class="p-2 bg-green-500 hover:bg-green-600 text-white rounded">
                            Edit
                        </a>
                        <a href="#" class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                            Details
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">19</td>
                    <td class="text-center">Week 19</td>
                    <td class="text-center">4 May 2025</td>
                    <td class="text-center">10 May 2025</td>
                    <td class="text-center">2</td>
                    <td class="text-center">32.1</td>
                    <td class="text-center">32.1</td>
                    <td class="text-center text-green-400 font-bold">On Time</td>
                    <td class="px-5 py-5 flex justify-center gap-2">
                        <a href="#" class="p-2 bg-green-500 hover:bg-green-600 text-white rounded">
                            Edit
                        </a>
                        <a href="#" class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                            Details
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">20</td>
                    <td class="text-center">Week 20</td>
                    <td class="text-center">11 May 2025</td>
                    <td class="text-center">17 May 2025</td>
                    <td class="text-center">1</td>
                    <td class="text-center">33.2</td>
                    <td class="text-center">33.2</td>
                    <td class="text-center text-green-400 font-bold">On Time</td>
                    <td class="px-5 py-5 flex justify-center gap-2">
                        <a href="#" class="p-2 bg-green-500 hover:bg-green-600 text-white rounded">
                            Edit
                        </a>
                        <a href="#" class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                            Details
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Pagination + Show entries -->
    <div class="flex flex-col md:flex-row items-center justify-between gap-3 mt-4">
        <!-- Pagination kiri -->
        <div class="order-2 md:order-1">
            <nav class="flex items-center space-x-1">
                <!-- Previous Button -->
                <button id="prevBtn"
                    class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-white bg-blue-500 rounded-l-md hover:bg-blue-500 disabled:opacity-50 disabled:cursor-not-allowed">
                    <span class="sr-only">Previous</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>

                <!-- Page Numbers -->
                <div id="pageNumbers" class="flex">
                    <!-- Page numbers akan diisi oleh JavaScript -->
                </div>

                <!-- Next Button -->
                <button id="nextBtn"
                    class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-white bg-blue-500 rounded-r-md hover:bg-blue-500 disabled:opacity-50 disabled:cursor-not-allowed">
                    <span class="sr-only">Next</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </nav>

            <!-- Showing info -->
            <div class="text-sm text-gray-700 mt-2">
                Showing <span id="showingStart">1</span> to <span id="showingEnd">5</span> of <span
                    id="totalRows">20</span> results
            </div>
        </div>

        <!-- Show entries kanan -->
        <div class="order-1 md:order-2 flex items-center gap-2 text-sm text-gray-700">
            <label for="rowsPerPage" class="whitespace-nowrap">Show entries</label>
            <select id="rowsPerPage" class="rounded px-2 py-1 text-sm w-15">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>
    </div>
</div>
</div>


</div>
</div>
</div>
</div>

<script>
    // Data project (dari HTML yang diberikan)
    const projectData = [{
            no: 1,
            week: "Week 1",
            start: "2 January 2025",
            end: "4 January 2025",
            days: 4,
            progress: 2.55,
            target: 2.75,
            status: "Fast"
        },
        {
            no: 2,
            week: "Week 2",
            start: "5 January 2025",
            end: "11 January 2025",
            days: 3,
            progress: 4.24,
            target: 4.24,
            status: "Normal"
        },
        {
            no: 3,
            week: "Week 3",
            start: "12 January 2025",
            end: "18 January 2025",
            days: 2,
            progress: 6.75,
            target: 6.75,
            status: "Normal"
        },
        {
            no: 4,
            week: "Week 4",
            start: "19 January 2025",
            end: "26 January 2025",
            days: 1,
            progress: 9.3,
            target: 9.3,
            status: "Normal"
        },
        {
            no: 5,
            week: "Week 5",
            start: "26 January 2025",
            end: "1 February 2025",
            days: 3,
            progress: 11.2,
            target: 11.2,
            status: "Normal"
        },
        {
            no: 6,
            week: "Week 6",
            start: "2 February 2025",
            end: "8 February 2025",
            days: 2,
            progress: 14,
            target: 14,
            status: "Normal"
        },
        {
            no: 7,
            week: "Week 7",
            start: "9 February 2025",
            end: "15 February 2025",
            days: 1,
            progress: 15.2,
            target: 15.2,
            status: "Normal"
        },
        {
            no: 8,
            week: "Week 8",
            start: "16 February 2025",
            end: "22 February 2025",
            days: 4,
            progress: 17.1,
            target: 17.1,
            status: "Normal"
        },
        {
            no: 9,
            week: "Week 9",
            start: "23 February 2025",
            end: "1 March 2025",
            days: 5,
            progress: 18.31,
            target: 18.31,
            status: "Normal"
        },
        {
            no: 10,
            week: "Week 10",
            start: "2 March 2025",
            end: "8 March 2025",
            days: 3,
            progress: 18.98,
            target: 18.98,
            status: "Normal"
        },
        {
            no: 11,
            week: "Week 11",
            start: "9 March 2025",
            end: "15 March 2025",
            days: 2,
            progress: 19.5,
            target: 19.5,
            status: "Normal"
        },
        {
            no: 12,
            week: "Week 12",
            start: "16 March 2025",
            end: "22 March 2025",
            days: 2,
            progress: 20.89,
            target: 20.89,
            status: "Normal"
        },
        {
            no: 13,
            week: "Week 13",
            start: "23 March 2025",
            end: "29 March 2025",
            days: 3,
            progress: 21.76,
            target: 21.76,
            status: "Normal"
        },
        {
            no: 14,
            week: "Week 14",
            start: "30 March 2025",
            end: "5 April 2025",
            days: 2,
            progress: 23.1,
            target: 23.5,
            status: "Fast"
        },
        {
            no: 15,
            week: "Week 15",
            start: "6 April 2025",
            end: "12 April 2025",
            days: 3,
            progress: 24.8,
            target: 24.8,
            status: "Normal"
        },
        {
            no: 16,
            week: "Week 16",
            start: "13 April 2025",
            end: "19 April 2025",
            days: 2,
            progress: 26.3,
            target: 25.9,
            status: "TooLate"
        },
        {
            no: 17,
            week: "Week 17",
            start: "20 April 2025",
            end: "26 April 2025",
            days: 4,
            progress: 28.7,
            target: 28.7,
            status: "Normal"
        },
        {
            no: 18,
            week: "Week 18",
            start: "27 April 2025",
            end: "3 May 2025",
            days: 3,
            progress: 30.5,
            target: 30.9,
            status: "Fast"
        },
        {
            no: 19,
            week: "Week 19",
            start: "4 May 2025",
            end: "10 May 2025",
            days: 2,
            progress: 32.1,
            target: 32.1,
            status: "Normal"
        },
        {
            no: 20,
            week: "Week 20",
            start: "11 May 2025",
            end: "17 May 2025",
            days: 1,
            progress: 33.2,
            target: 33.2,
            status: "Normal"
        }
    ];

    // Fungsi untuk menentukan status styling
    function getStatusStyle(status) {
        const statusMap = {
            'Fast': 'text-sky-400',
            'Normal': 'text-green-400',
            'TooLate': 'text-orange-600',
            'Critical': 'text-red-600'
        };
        return statusMap[status] || 'text-gray-600';
    }

    function getStatusLabel(status) {
        const labelMap = {
            'Fast': 'Fast',
            'Normal': 'On Time',
            'TooLate': 'Too Late',
            'Critical': 'Critical'
        };
        return labelMap[status] || status;
    }

    // Variabel pagination
    let currentPage = 1;
    let rowsPerPage = 5;
    const totalRows = projectData.length;

    // Fungsi untuk menampilkan data table
    function displayTable(page, rows) {
        const startIndex = (page - 1) * rows;
        const endIndex = startIndex + rows;
        const paginatedData = projectData.slice(startIndex, endIndex);

        const tableBody = document.getElementById('projectTable');
        tableBody.innerHTML = '';

        paginatedData.forEach(project => {
            const statusClass = getStatusStyle(project.status);
            const statusLabel = getStatusLabel(project.status);

            const row = `
                    <tr>
                        <td class="text-center">${project.no}</td>
                        <td class="text-center">${project.week}</td>
                        <td class="text-center">${project.start}</td>
                        <td class="text-center">${project.end}</td>
                        <td class="text-center">${project.days}</td>
                        <td class="text-center">${project.progress}</td>
                        <td class="text-center">${project.target}</td>
                        <td class="text-center">
                            <span class="font-bold ${statusClass}">${statusLabel}</span>
                        </td>
                        <td class=" px-3 py-2">
                            <div class="flex justify-center gap-2">
                                <button class="px-3 py-1 bg-green-500 hover:bg-green-600 text-white text-sm rounded">Edit</button>
                                <button class="px-3 py-1 bg-blue-500 hover:bg-blue-600 text-white text-sm rounded">Details</button>
                            </div>
                        </td>
                    </tr>
                `;
            tableBody.innerHTML += row;
        });

        updatePaginationInfo(startIndex + 1, Math.min(endIndex, totalRows), totalRows);
    }

    // Fungsi untuk update info pagination
    function updatePaginationInfo(start, end, total) {
        document.getElementById('showingStart').textContent = start;
        document.getElementById('showingEnd').textContent = end;
        document.getElementById('totalRows').textContent = total;
    }

    // Fungsi untuk membuat tombol halaman
    function createPageButtons() {
        const totalPages = Math.ceil(totalRows / rowsPerPage);
        const pageNumbersDiv = document.getElementById('pageNumbers');
        pageNumbersDiv.innerHTML = '';

        for (let i = 1; i <= totalPages; i++) {
            const pageBtn = document.createElement('button');
            pageBtn.textContent = i;

            if (i === currentPage) {
                pageBtn.className =
                    'relative inline-flex items-center px-4 py-2 text-sm font-medium text-indigo-600 bg-blue-500 hover:bg-indigo-100';
            } else {
                pageBtn.className =
                    'relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50';
            }

            pageBtn.addEventListener('click', () => {
                currentPage = i;
                displayTable(currentPage, rowsPerPage);
                createPageButtons();
                updateNavigationButtons();
            });

            pageNumbersDiv.appendChild(pageBtn);
        }
    }

    // Fungsi untuk update tombol navigasi
    function updateNavigationButtons() {
        const totalPages = Math.ceil(totalRows / rowsPerPage);
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        prevBtn.disabled = currentPage === 1;
        nextBtn.disabled = currentPage === totalPages;
    }

    // Event listeners
    document.getElementById('prevBtn').addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;
            displayTable(currentPage, rowsPerPage);
            createPageButtons();
            updateNavigationButtons();
        }
    });

    document.getElementById('nextBtn').addEventListener('click', () => {
        const totalPages = Math.ceil(totalRows / rowsPerPage);
        if (currentPage < totalPages) {
            currentPage++;
            displayTable(currentPage, rowsPerPage);
            createPageButtons();
            updateNavigationButtons();
        }
    });

    document.getElementById('rowsPerPage').addEventListener('change', (e) => {
        rowsPerPage = parseInt(e.target.value);
        currentPage = 1;
        displayTable(currentPage, rowsPerPage);
        createPageButtons();
        updateNavigationButtons();
    });

    // Inisialisasi
    displayTable(currentPage, rowsPerPage);
    createPageButtons();
    updateNavigationButtons();
</script>

<script>
    let sortDirection = {}; // Simpan arah sort per kolom

    function sortTable(columnIndex) {
        const table = document.querySelector("table");
        const rows = Array.from(table.rows).slice(1); // Skip header
        const isAsc = sortDirection[columnIndex] = !sortDirection[columnIndex];

        rows.sort((a, b) => {
            const cellA = a.cells[columnIndex].innerText.trim();
            const cellB = b.cells[columnIndex].innerText.trim();

            // Coba parse sebagai angka, jika gagal pakai string
            const valA = isNaN(cellA) ? cellA.toLowerCase() : parseFloat(cellA);
            const valB = isNaN(cellB) ? cellB.toLowerCase() : parseFloat(cellB);

            return isAsc ? (valA > valB ? 1 : -1) : (valA < valB ? 1 : -1);
        });

        rows.forEach(row => table.tBodies[0].appendChild(row));
    }
</script>
<script>
    document.getElementById("extraSmallSearch").addEventListener("input", function() {
        const searchValue = this.value.toLowerCase();
        const rows = document.querySelectorAll("#projectTable tr");

        rows.forEach(row => {
            const rowText = row.textContent.toLowerCase();
            row.style.display = rowText.includes(searchValue) ? "" : "none";
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const perPageSelect = document.getElementById('perPage');
        const perPageForm = document.getElementById('perPageForm');

        if (perPageSelect && perPageForm) {
            perPageSelect.addEventListener('change', function() {
                perPageForm.submit();
            });
        }
    });
</script>
