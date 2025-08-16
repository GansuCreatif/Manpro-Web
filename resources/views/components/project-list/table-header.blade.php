<div class="flex justify-between items-center mb-4 gap-5">
    <!-- Search -->
    <div class="relative w-full max-w-lg">
        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z" />
            </svg>
        </span>
        <input id="tableSearch" type="text" placeholder="Search..."
            class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-md text-base text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" />
    </div>

    <!-- Export buttons -->
    <div class="flex items-center gap-2">
        <x-export-button color="green" title="Export CSV" icon="csv" />
        <x-export-button color="emerald" title="Export Excel" icon="excel" />
        <x-export-button color="red" title="Export PDF" icon="pdf" />
    </div>
</div>
