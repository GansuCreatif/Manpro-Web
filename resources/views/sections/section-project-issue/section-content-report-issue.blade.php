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

<!-- Wrapper: auto scroll di layar kecil -->
<div class="grid grid-cols-1 xl:grid-cols-1 gap-6">
    <!-- Scrollable Table Container -->
    <div class="">
        <div class="overflow-x-auto overflow-y-auto max-h-96 border border-gray-200 rounded-lg">
            <table class="min-w-full text-xs text-left text-black">
                <thead class="text-blue-900 uppercase bg-blue-50 text-center">
                    <tr class="border-b-[3px] border-blue-700">
                        <th class="px-2 py-2 text-center">No</th>
                        <th class="px-2 py-2 text-center cursor-pointer whitespace-nowrap" onclick="sortTable(1)">
                            Type🔽</th>
                        <th class="px-2 py-2 text-center cursor-pointer whitespace-nowrap" onclick="sortTable(2)">
                            Problem🔽</th>
                        <th class="px-2 py-2 text-center cursor-pointer whitespace-nowrap" onclick="sortTable(3)">
                            Date Problem🔽</th>
                        <th class="px-2 py-2 text-center cursor-pointer whitespace-nowrap" onclick="sortTable(4)">
                            Response Plan🔽</th>
                        <th class="px-2 py-2 text-center cursor-pointer whitespace-nowrap" onclick="sortTable(5)">
                            Response Actual🔽</th>
                        <th class="px-2 py-2 text-center cursor-pointer whitespace-nowrap" onclick="sortTable(7)">
                            Status
                            🔽</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody id="projectTable">
                    <!-- Di isi javascript -->
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
                        class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-white bg-blue-500 rounded-l-md hover:bg-blue-50 disabled:opacity-50 disabled:cursor-not-allowed">
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
                        class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-white bg-blue-500 rounded-r-md hover:bg-blue-50 disabled:opacity-50 disabled:cursor-not-allowed">
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


<script>
    // Data project (dari HTML yang diberikan)
    const projectData = [{
            no: 1,
            type: "Security",
            problem: "Ormas sekitar meminta pekerjaan sebagai bagian keamanan",
            dateproblem: "4 January 2025",
            actionplan: "Mempekerjakan anggota Ormas",
            realization: "Mempekerjaan 2 orang dari Ormas",
            status: "Closed"
        },
        {
            no: 2,
            type: "Logistics",
            problem: "Kedatangan barang terlambat karena harus PO 14 hari",
            dateproblem: "5 March  2025",
            actionplan: "Menunggu Kedatangan Barang",
            realization: "",
            status: "Open"
        },
        {
            no: 3,
            type: "Weather",
            problem: "Pengecoran tertunda karena hujan lebat di lokasi proyek",
            dateproblem: "12 April  2025",
            actionplan: "Pengecoran di hari berikutnya",
            realization: "",
            status: "Open"
        },
        {
            no: 4,
            type: "Finance  ",
            problem: "Pencarian UMD 5 menunggu tutupan dari UMD 1",
            dateproblem: "5 May 2025",
            actionplan: "Melakukan tutupan UMD 1",
            realization: "",
            status: "Open"
        },
    ];

    // Fungsi untuk menentukan status styling
    function getStatusStyle(status) {
        const statusMap = {
            'Open': 'text-sky-400',
            'Closed': 'text-red-600'
        };
        return statusMap[status] || 'text-gray-600';
    }

    function getStatusLabel(status) {
        const labelMap = {
            'Open': 'Open',
            'Closed': 'Closed'
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
                        <td class="text-center">${project.type}</td>
                        <td class="text-center whitespace-nowrap">${project.problem}</td>
                        <td class="text-center">${project.dateproblem}</td>
                        <td class="px-2 py-2 text-center whitespace-nowrap">${project.actionplan}</td>
                        <td class="text-center whitespace-nowrap">${project.realization}</td>
                        <td class="text-center">
                            <span class="font-bold ${statusClass}">${statusLabel}</span>
                        </td>
                        <td class="px-3 py-2">
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
