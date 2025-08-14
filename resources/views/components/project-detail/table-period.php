<div class="bg-blue-50 rounded-2xl">
            <div class="">
                <h5 class="inline-block  border-blue-500 pb-1 text-2xl font-bold tracking-tight text-blue-900">
                    Period
                </h5>
                <div class="h-1 w-full bg-blue-500 rounded-sm"></div>
            </div>
            <div class="overflow-x-auto mt-2 bg-white">
                <table class="w-full text-sm text-left rtl:text-right text-black-500 bg-blue">
                    <tbody>
                        <tr>
                            <td class="px-4 text font-bold">Fiscal Year</td>
                            <td>: 2025</td>
                            <td class="px-4 font-bold">Date Contract</td>
                            <td>: 1 Jul 2025</td>
                        </tr>
                        <tr>
                            <td class="px-4 font-bold">Start Date</td>
                            <td>: 2 Jan 2025</td>
                            <td class="px-4 font-bold">Date SPMK</td>
                            <td>: 15 Jun 2025</td>
                        </tr>
                        <tr>
                            <td class="px-4 font-bold">Finish Date</td>
                            <td class="">: 15 Jun 2025</td>
                            <td class="px-4 font-bold">Actual Start Date</td>
                            <td class="">: 15 Jun 2025</td>
                        </tr>
                        <tr>
                            <td class="px-4 font-bold">Total Days</td>
                            <td class="">: 250 Days</td>
                            <td class="px-4 font-bold">Reason</td>
                            <td class="">: Contract</td>
                        </tr>
                        <tr>
                            <td class="pt-4 pb-1 px-4">Adendum</td>
                            <!-- Tombol di dalam tabel -->
                            <td colspan="4" class="text-right">
                                <x-modal.select-modal id="select-modal" title="Pilih Tipe" :options="[
                                    ['id' => 'job-1', 'title' => 'Cost', 'subtitle' => 'Cost'],
                                    ['id' => 'job-2', 'title' => 'Time', 'subtitle' => 'Time'],
                                ]">
                                    <button
                                        class="text-white inline-flex w-full justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                        Next step
                                    </button>
                                </x-modal.select-modal>
                                <button type="button" data-modal-target="select-modal" data-modal-toggle="select-modal"
                                    class="inline-flex items-center px-2 py-1 bg-orange-500 hover:bg-orange-600 text-white text-xs font-medium rounded-md shadow focus:outline-none focus:ring-1 focus:ring-orange-400">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                    </svg>
                                    Add New
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="w-full overflow-x-auto lg:overflow-x-visible mb-6">
                    <table class="min-w-full table-auto text-sm text-left bg-blue">
                        <thead class="bg-orange-500 text-orange-900 font-bold">
                            <tr class="text-center">
                                <th class="py-2 px-4">No</th>
                                <th class="py-2 px-4">Type</th>
                                <th class="py-2 px-4 whitespace-nowrap">Before</th>
                                <th class="py-2 px-4 whitespace-nowrap">After</th>
                                <th class="py-2 px-4">Status</th>
                                <th class="py-2 px-4">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-2 px-4">1</td>
                                <td class="py-2 px-4">Cost</td>
                                <td class="py-2 px-4">Rp.2.455.305.900</td>
                                <td class="py-2 px-4">Rp.2.600.000.000</td>
                                <td class="py-2 px-4">Approve</td>
                                <td class="py-2 px-4">Penambahan Pekerjaan..</td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td class="py-2 px-4">2</td>
                                <td class="py-2 px-4">Time</td>
                                <td class="py-2 px-4">15 Juni 2025</td>
                                <td class="py-2 px-4">30 Juni 2025</td>
                                <td class="py-2 px-4">Approve</td>
                                <td class="py-2 px-4">Penambahan Pekerjaan..</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>