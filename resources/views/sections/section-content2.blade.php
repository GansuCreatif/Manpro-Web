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
        <input id="tableSearch" type="text" placeholder="Search..."
            class="w-full pl-8 pr-2 py-1.5 border border-gray-300 rounded text-xs text-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500" />
    </div>

    <div class="flex items-center gap-2">
        <!-- Button Sinkron Data -->
        <button type="button"
            class="inline-flex items-center px-2.5 py-1.5 text-xs font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-300">
            <!-- Sync Icon (scaled down) -->
            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                class="mr-1">
                <path
                    d="M14.3935 5.37371C18.0253 6.70569 19.8979 10.7522 18.5761 14.4118C17.6363 17.0135 15.335 18.7193 12.778 19.0094M12.778 19.0094L13.8253 17.2553M12.778 19.0094L14.4889 20M9.60651 18.6263C5.97465 17.2943 4.10205 13.2478 5.42394 9.58823C6.36371 6.98651 8.66504 5.28075 11.222 4.99059M11.222 4.99059L10.1747 6.74471M11.222 4.99059L9.51114 4"
                    stroke="#F0EFF7FF" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            Sync SAP PS
        </button>
        <!-- Export Icon -->
        <div class="flex flex-end items-center">
            Export to :
            <!-- Export PDF -->
            <a href="{{ route('project-report-PDF') }}" class="p-1" title="Export PDF">
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
            </a>

            <!-- Export CSV -->
            <a href="{{ route('export.csv') }}" class="p-1" title="Export CSV">
                <svg width="24" height="24" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="csvGradient" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0%" stop-color="#43A047" />
                            <stop offset="100%" stop-color="#66BB6A" />
                        </linearGradient>
                        <filter id="shadow" x=" -20%" y="-20%" width="140%" height="140%">
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
            </a>

            <!-- Export Excel -->
            <button type="button" class="p-1"title="Export Excel">
                <svg width="24" height="24" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="xlsxGradient" x1="0" y1="0" x2="1"
                            y2="1">
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

<!-- Wrapper: auto scroll di layar kecil -->
<div class="grid grid-cols-1 xl:grid-cols-1 gap-6">
    <!-- Scrollable Table Container -->
    <div class="">
        <div class="overflow-x-auto overflow-y-auto max-h-96 border border-gray-200 rounded-lg">
            <table class="min-w-full text-xs text-left text-black">
                <thead class="text-blue-900 uppercase bg-blue-50 text-center">
                    <tr class="border-b-[3px] border-blue-700">
                        <th class="px-2 py-2 text-center cursor-pointer" onclick="sortTable(0)">No</th>
                        <th class="px-2 py-2 text-center cursor-pointer" onclick="sortTable(1)">Code 🔽
                        </th>
                        <th class="px-2 py-2 text-center cursor-pointer whitespace-nowrap" onclick="sortTable(2)">
                            Description🔽</th>
                        <th class="px-2 py-2 text-center cursor-pointer whitespace-nowrap" onclick="sortTable(3)">
                            Location🔽</th>
                        <th class="px-2 py-2 text-center cursor-pointer whitespace-nowrap" onclick="sortTable(4)">
                            Unit🔽
                        </th>
                        <th class="px-2 py-2 text-center cursor-pointer whitespace-nowrap" onclick="sortTable(5)">
                            Project
                            Manager🔽</th>
                        <th class="px-2 py-2 text-center cursor-pointer whitespace-nowrap" onclick="sortTable(6)">
                            Project
                            Value🔽</th>
                        <th class="px-2 py-2 text-center cursor-pointer whitespace-nowrap" onclick="sortTable(7)">
                            Project
                            Owner🔽</th>
                        <th class="px-2 py-2 text-center cursor-pointer whitespace-nowrap" onclick="sortTable(8)">
                            Start
                            Date🔽</th>
                        <th class="px-2 py-2 text-center cursor-pointer whitespace-nowrap" onclick="sortTable(9)">
                            Finish
                            Date🔽</th>
                        <th class="px-2 py-2 text-center cursor-pointer whitespace-nowrap" onclick="sortTable(10)">
                            Status
                            🔽</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody id="projectTable">
                    @forelse ($projects as $index => $project)
                        <tr
                            class="text-center {{ $index % 2 == 0 ? 'bg-white hover:bg-white' : 'bg-blue-50 hover:bg-blue-50' }}">
                            <td>{{ $projects->firstItem() + $index }}</td>
                            <td class="px-3 py-2 whitespace-nowrap">{{ $project['project_def'] }}</td>
                            <td class="px-3 py-2 whitespace-nowrap">{{ $project['project_desc'] }}</td>
                            <td class="px-3 py-2">{{ $project['project_location'] }}</td>
                            <td class="px-3 py-2">{{ $project['project_profile']['unit_desc'] ?? '-' }}</td>
                            <td class="px-3 py-2">{{ $project['project_responsible']['name'] ?? '-' }}</td>
                            <td class="px-3 py-2 whitespace-nowrap">
                                Rp
                                {{ $formatted_value = number_format((int) str_replace(',', '', $project['contract_value']), 0, ',', '.') }}
                            </td>
                            <td class="px-3 py-2">
                                {{ $project['project_owner'] }}
                            </td>
                            <td class="px-3 py-2 whitespace-nowrap">
                                {{ \Carbon\Carbon::parse($project['start_date'])->translatedFormat('d F Y') }}
                            </td>
                            <td class="px-3 py-2 whitespace-nowrap">
                                {{ \Carbon\Carbon::parse($project['end_date'])->translatedFormat('d F Y') }}
                            </td>
                            <td class="px-3 py-2 font-bold">
                                @php $statusInfo = projectStatus($project['status']); @endphp
                                <span class="{{ $statusInfo['text'] }}">
                                    {{ $statusInfo['label'] }}
                                </span>
                            </td>
                            <td class="px-5 py-5 flex justify-center gap-2">
                                <a href="{{ route('Form-Async', ['code' => $project['project_def']]) }}"
                                    class="p-2 bg-green-500 hover:bg-green-600 text-white rounded">
                                    Edit
                                </a>
                                <a href="{{ route('Project-Details', ['code' => $project['project_def']]) }}"
                                    class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                                    Details
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="12" class="text-center py-3">Tidak ada data proyek</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Pagination + Show entries -->
<div class="flex flex-col md:flex-row items-center justify-between gap-3 mt-4">
    <!-- Pagination kiri -->
    <div class="order-2 md:order-1">
        {{ $projects->appends(['perPage' => request('perPage')])->onEachSide(2)->links('pagination::tailwind') }}
    </div>

    <!-- Show entries kanan -->
    <div class="order-1 md:order-2 flex items-center gap-2 text-sm text-gray-700">
        <form method="GET" action="" class="flex items-center gap-2" id="perPageForm">
            <label for="perPage" class="whitespace-nowrap">Show entries</label>
            <select id="perPage" name="perPage" class="border rounded px-2 py-1 text-sm w-15">
                <option value="5" {{ request('perPage') == 5 ? 'selected' : '' }}>5</option>
                <option value="10" {{ request('perPage') == 10 ? 'selected' : '' }}>10</option>
                <option value="25" {{ request('perPage') == 25 ? 'selected' : '' }}>25</option>
                <option value="50" {{ request('perPage') == 50 ? 'selected' : '' }}>50</option>
                <option value="100" {{ request('perPage') == 100 ? 'selected' : '' }}>100</option>
            </select>
        </form>
    </div>
</div>


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
    document.getElementById("tableSearch").addEventListener("input", function() {
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
