<div class="container mx-auto px-4 py-6">
    {{-- Header --}}
    <div class="mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">Detail Progress – Week 1</h1>
        <p class="text-sm text-gray-500">Periode: 2 Januari 2025 – 4 Januari 2025</p>
        <span
            class="inline-block px-3 py-1 text-sm font-medium bg-green-100 text-green-800 rounded-full mt-2">Fast</span>
    </div>

    {{-- Summary Section --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
        <div class="bg-white shadow rounded p-4">
            <p class="text-sm text-gray-500">Total Work</p>
            <p class="text-xl font-bold text-gray-800">4</p>
        </div>
        <div class="bg-white shadow rounded p-4">
            <p class="text-sm text-gray-500">Progress Plan (%)</p>
            <p class="text-xl font-bold text-gray-800">2.55%</p>
        </div>
        <div class="bg-white shadow rounded p-4">
            <p class="text-sm text-gray-500">Progress Actual (%)</p>
            <p class="text-xl font-bold text-gray-800">2.75%</p>
        </div>
        <div class="bg-white shadow rounded p-4 border-l-4 border-green-500">
            <p class="text-sm text-gray-500">Gap Progress</p>
            <p class="text-xl font-bold text-gray-800">+0.20%</p>
        </div>
    </div>

    {{-- Chart Section --}}
    <div class="mt-8">
        <h2 class="text-lg font-semibold text-gray-700 mb-2">Progress Chart</h2>
        <div class="bg-white shadow rounded p-4">
            <div class="flex items-end space-x-4 h-32">
                <div class="flex-1 text-center">
                    <div class="bg-blue-500 w-8 mx-auto" style="height: 65%"></div>
                    <p class="text-sm mt-2">Plan</p>
                </div>
                <div class="flex-1 text-center">
                    <div class="bg-green-500 w-8 mx-auto" style="height: 70%"></div>
                    <p class="text-sm mt-2">Actual</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Task Breakdown --}}
    <div class="mt-10">
        <h2 class="text-lg font-semibold text-gray-700 mb-4">Task Breakdown</h2>
        <table class="min-w-full bg-white shadow rounded overflow-hidden">
            <thead class="bg-gray-100 text-gray-600 text-sm">
                <tr>
                    <th class="px-4 py-2 text-left">Task</th>
                    <th class="px-4 py-2 text-left">PIC</th>
                    <th class="px-4 py-2 text-left">Durasi</th>
                    <th class="px-4 py-2 text-left">Status</th>
                </tr>
            </thead>
            <tbody class="text-sm text-gray-700">
                <tr>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                </tr>
                <tr>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                </tr>
            </tbody>
        </table>
    </div>

    {{-- Weekly Notes --}}
    <div class="mt-10">
        <h2 class="text-lg font-semibold text-gray-700 mb-4">Komentar Mingguan</h2>
        <div class="bg-white shadow rounded p-4 space-y-2">
            <p class="text-sm text-gray-600">📌 “Progress minggu ini lebih cepat dari rencana. Tim bekerja
                efisien.”</p>
            <p class="text-sm text-gray-600">📌 “Perlu review ulang perihal pekerjaan tersebut.”</p>
        </div>
    </div>

    {{-- Actions --}}
    <div class="mt-10 flex justify-between items-center">
        <a href="#" class="border border-gray-300 px-4 py-2 rounded text-sm hover:bg-gray-100">Export PDF</a>
    </div>
</div>
</div>
