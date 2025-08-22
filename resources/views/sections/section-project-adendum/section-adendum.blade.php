<div class="bg-blue-50">
    <!-- General & Period -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-2">
        <!-- Card 1: General -->
        <div class="bg-white shadow-md rounded-lg w-full h-100 flex flex-col">
            <div class="bg-white p-4 rounded-t-2xl">
                <h5 class="border-blue-500 pb-1 text-2xl font-bold tracking-tight text-blue-900">General</h5>
                <div class="h-1 w-full bg-blue-500 rounded-sm"></div>
            </div>
            <div class="overflow-y-auto px-4 pb-4 flex-1">
                <table class="w-full text-sm text-left text-black-500">
                    <tbody>
                        @include('components.project-detail.table-general', ['project' => $project])
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Card 2: Period -->
        <div class="bg-white shadow-md rounded-lg w-full h-100 flex flex-col">
            <div class="bg-white p-4 rounded-t-2xl">
                <h5 class="inline-block border-blue-500 pb-1 text-2xl font-bold tracking-tight text-blue-900">Period
                </h5>
                <div class="h-1 w-full bg-blue-500 rounded-sm"></div>
            </div>

            <!-- Scrollable Content -->
            <div class="overflow-y-auto px-4 pb-4 flex-1">
                <!-- Tabel Period -->
                @include('components.project-detail.table-periode', ['project' => $project])
            </div>
        </div>
    </div>
    <!-- form Adendum -->
    <div class="mt-6">
        <!-- Addendum Section Title -->
        <div class="mb-4">
            <h3 class="text-lg font-semibold text-blue-900 pb-1">Addendum</h3>
            <div class="h-1 w-full bg-blue-500 rounded-sm"></div>
        </div>

        <!-- Addendum Form -->
        <form id="addendum-form" class="bg-white p-6 rounded-lg shadow w-full">
            <div class="grid grid-cols-2 gap-6 items-start">

                <!-- Kolom Kiri -->
                <div class="space-y-4">
                    <!-- Type -->
                    <div class="flex items-center space-x-2">
                        <label for="type" class="w-24 text-sm font-medium text-gray-900">
                            Type <span class="text-red-500">*</span> :
                        </label>
                        <select id="type" name="type" required
                            class="flex-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5">
                            <option value="">Select Type</option>
                            <option value="Time">Time</option>
                            <option value="Cost">Cost</option>
                            <option value="Time ; Cost" selected>Time ; Cost</option>
                        </select>
                    </div>

                    <!-- Before -->
                    <div class="flex items-center space-x-2">
                        <label for="before" class="w-24 text-sm font-medium text-gray-900">
                            Before <span class="text-red-500">*</span> :
                        </label>
                        <input type="text" id="before" name="before" required
                            placeholder="2 January 2025 ; 5.000.000.000"
                            class="flex-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5">
                    </div>

                    <!-- After -->
                    <div class="flex items-center space-x-2">
                        <label for="after" class="w-24 text-sm font-medium text-gray-900">
                            After <span class="text-red-500">*</span> :
                        </label>
                        <input type="text" id="after" name="after" required
                            placeholder="2 January 2025 ; 5.000.000.000"
                            class="flex-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5">
                    </div>
                </div>

                <!-- Kolom Kanan -->
                <div class="flex flex-col space-y-4">
                    <!-- Document -->
                    <div class="flex items-center space-x-2">
                        <label for="document" class="w-28 text-sm font-medium text-gray-900">
                            Document <span class="text-red-500">*</span> :
                        </label>
                        <div class="flex-1 relative">
                            <input type="file" id="document" name="document" required
                                class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10"
                                accept=".pdf,.doc,.docx,.jpg,.jpeg,.png">
                            <div
                                class="flex items-center justify-center w-full h-10 border-2 border-blue-300 border-dashed rounded-lg cursor-pointer bg-blue-50 hover:bg-blue-100">
                                <span class="text-sm text-blue-500 font-medium">Upload</span>
                            </div>
                        </div>
                    </div>

                    <!-- Add Button -->
                    <div class="flex justify-end">
                        <button type="submit"
                            class="px-4 py-2 text-sm font-medium text-white bg-sky-500 rounded-md hover:bg-sky-600 focus:ring-4 focus:outline-none focus:ring-sky-300">
                            Add
                        </button>
                    </div>
                </div>
            </div>
            <!-- Addendum Table -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-h-64 overflow-y-auto mt-2">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-blue-950 uppercase bg-orange-500 sticky top-0">
                        <tr>
                            <th scope="col" class="px-4 py-3 text-center">No.</th>
                            <th scope="col" class="px-4 py-3 text-center">Type</th>
                            <th scope="col" class="px-4 py-3 text-center">Before</th>
                            <th scope="col" class="px-4 py-3 text-center">After</th>
                            <th scope="col" class="px-4 py-3 text-center">Document</th>
                            <th scope="col" class="px-4 py-3 text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody id="addendum-table-body">
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="px-4 py-3 text-center font-medium text-gray-900">1</td>
                            <td class="px-4 py-3 text-center">Time</td>
                            <td class="px-4 py-3 text-center">2 January 2025</td>
                            <td class="px-4 py-3 text-center">2 January 2025</td>
                            <td class="px-4 py-3 text-center text-blue-600 hover:underline cursor-pointer">Nota Dinas
                                Internal.pdf</td>
                            <td class="px-4 py-3 text-center">
                                <span
                                    class="bg-orange-100 text-orange-800 text-xs font-medium px-2.5 py-0.5 rounded">Request</span>
                            </td>
                        </tr>
                        <tr class="bg-blue-50 border-b hover:bg-blue-100">
                            <td class="px-4 py-3 text-center font-medium text-gray-900">2</td>
                            <td class="px-4 py-3 text-center">Cost</td>
                            <td class="px-4 py-3 text-center">Rp 5.000.000.000</td>
                            <td class="px-4 py-3 text-center">Rp 5.000.000.000</td>
                            <td class="px-4 py-3 text-center text-blue-600 hover:underline cursor-pointer">Nota Dinas
                                Internal.pdf</td>
                            <td class="px-4 py-3 text-center">
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Approve</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </form>
        <!-- NEXT Button -->
        <div class="flex justify-end mt-5 mb-5">
            <button type="submit"
                class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300">
                NEXT
            </button>
        </div>
    </div>
</div>
