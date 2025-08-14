    <div class="flex justify-between items-center mb-4 rounded-b-none">
        <!-- Search bar minimalis -->
        <div class="relative w-full max-w-xs">
            <!-- Icon Search -->
            <span class="absolute inset-y-0 left-0 flex items-center pl-1 text-gray-400">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z" />
                </svg>
            </span>

            <!-- Input -->
            <input id="tableSearch" type="text" placeholder="Search..."
                class="w-full pl-9 pr-3 py-2 border border-gray-300 rounded-md text-sm text-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500" />
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
        <div class="w-auto overflow-x-auto lg:overflow-x-visible">
            <table class="min-w-full table-200 text-xs text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-100 text-center">
                    <tr>
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
                            class="border-b text-center
                                    {{ $isOdd ? 'bg-yellow-50 hover:bg-yellow-100' : 'bg-blue-100 hover:bg-blue-50' }}
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
