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
            <table class="min-w-full table-200 text-xs text-left text-black">
                <thead class="text-xs text-blue-900 uppercase bg-blue-50 text-center">
                    <tr class="border-b-[3px] border-blue-700">
                        <th class="px-2 py-3">No</th>
                        <th class="px-2 py-3">Code</th>
                        <th class="px-2 py-3">Description</th>
                        <th class="px-2 py-3">Location</th>
                        <th class="px-2 py-3">Unit</th>
                        <th class="px-2 py-3">Project Manager</th>
                        <th class="px-2 py-3">Project Value</th>
                        <th class="px-2 py-3">User</th>
                        <th class="px-2 py-3">Start Date</th>
                        <th class="px-2 py-3">Finish Date</th>
                        <th class="px-2 py-3">Status</th>
                        <th class="px-2 py-3 text-center">Action</th>
                    </tr>
                </thead>
                <tbody id="projectTable">
                    @forelse ($projects as $index => $project)
                        @php
                            preg_match('/\d+/', $project['code_project'], $matches);
                            $number = isset($matches[0]) ? intval($matches[0]) : 0;
                            $isOdd = $number % 2 === 1;
                        @endphp
                        <tr
                            class="text-center
                                    {{ $isOdd ? 'bg-white hover:bg-white' : 'bg-blue-50 hover:bg-blue-50' }}
                        ">
                            <td class="px-2 py-3">{{ $index + 1 }}</td>
                            <td class="px-2 py-3 whitespace-nowrap">{{ $project['code_project'] }}</td>
                            <td class="px-2 py-3">{{ $project['desc_project'] }}</td>
                            <td class="px-2 py-3">{{ $project['location'] ?? 'Palembang' }}</td>
                            <td class="px-2 py-3">{{ $project['unit_projects']['unit_desc'] }}</td>
                            <td class="px-2 py-3">{{ $project['project_manager']['name'] ?? '-' }}
                            </td>
                            <td class="px-2 py-3 whitespace-nowrap">
                                Rp {{ number_format($project['contract_value'] ?? 0, 0, ',', '.') }}
                            </td>
                            <td class="px-2 py-3">PCC</td>
                            <td class="px-2 py-3">
                                {{ \Carbon\Carbon::parse($project['start_date'])->translatedFormat('j F Y') }}
                            </td>
                            <td class="px-2 py-3">
                                {{ \Carbon\Carbon::parse($project['start_date'])->translatedFormat('j F Y') }}
                            </td>
                            <td class="px-2 py-3">{{ $project['status'] }}</td>
                            <td class="px-2 py-3 flex justify-center gap-2">
                                <a href="{{ route('Project-Details', ['code' => 'PRJ003']) }}"
                                    class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                                    Details
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="12" class="px-2 py-3 text-center text-gray-500">
                                Tidak ada data.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
