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
            @include('icons.syncro')
            Sync SAP PS
        </button>
        <!-- Export Icon -->
        <div class="flex flex-end items-center">
            Export to :
            <!-- Export PDF -->
            <a href="{{ route('project-report-PDF') }}" class="p-1" title="Export PDF">
                @include('icons.pdf')
            </a>

            <!-- Export CSV -->
            <a href="{{ route('export.csv') }}" class="p-1" title="Export CSV">
                @include('icons.csv')
            </a>

            <!-- Export Excel -->
            <button type="button" class="p-1"title="Export Excel">
                @include('icons.excel')
            </button>
        </div>
    </div>
</div>

<!-- Wrapper: auto scroll di layar kecil -->
<div class="grid grid-cols-1 xl:grid-cols-1 gap-6">
    <!-- Scrollable Table Container -->
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

{{-- Pagination --}}
<div class="flex flex-col md:flex-row items-center justify-between gap-3 mt-4">
    <div class="order-2 md:order-1">
        {{ $projects->appends(['perPage' => request('perPage')])->links('pagination::tailwind') }}
    </div>
    <div class="order-1 md:order-2 flex items-center gap-2 text-sm text-gray-700">
        <form method="GET" id="perPageForm" class="flex items-center gap-2">
            <label for="perPage">Show entries</label>
            <select id="perPage" name="perPage" class="border rounded px-2 py-1 text-sm w-20">
                @foreach ([5, 10, 25, 50, 100] as $size)
                    <option value="{{ $size }}" {{ request('perPage') == $size ? 'selected' : '' }}>
                        {{ $size }}
                    </option>
                @endforeach
            </select>
        </form>
    </div>
</div>
