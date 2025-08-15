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
                <table class="w-full text-sm text-left text-black-500">
                    <tbody>
                        <tr>
                            <td class="px-4 font-bold">Fiscal Year</td>
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
                            <td>: 15 Jun 2025</td>
                            <td class="px-4 font-bold">Actual Start Date</td>
                            <td>: 15 Jun 2025</td>
                        </tr>
                        <tr>
                            <td class="px-4 font-bold">Total Days</td>
                            <td>: 250 Days</td>
                            <td class="px-4 font-bold">Reason</td>
                            <td>: Contract</td>
                        </tr>
                    </tbody>
                </table>

                <!-- Header Adendum + Tombol -->
                <div class="flex justify-between items-center mt-2">
                    <span class="text-sm font-semibold text-black-900">Adendum</span>

                    <!-- Tombol Add New -->
                    <button type="button" data-modal-target="select-modal" data-modal-toggle="select-modal"
                        class="inline-flex items-center px-3 py-2 bg-orange-500 hover:bg-orange-600 text-white text-sm font-medium rounded-md shadow">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                        </svg>
                        Add New
                    </button>

                    <!-- Panggil modal + form -->
                    <x-modal.select-modal id="select-modal" costUrl="{{ route('Form-Cost') }}"
                        timeUrl="{{ route('Form-Time') }}" />


                </div>

                <!-- Tabel Adendum -->
                <div class="w-full overflow-x-auto mt-2">
                    <table class="min-w-full table-auto text-sm text-left bg-blue">
                        <thead class="bg-orange-500 text-orange-900 font-bold">
                            <tr class="text-center">
                                <th class="py-1 px-2">No</th>
                                <th class="py-1 px-2">Type</th>
                                <th class="py-1 px-2 whitespace-nowrap">Before</th>
                                <th class="py-1 px-2 whitespace-nowrap">After</th>
                                <th class="py-1 px-2">Status</th>
                                <th class="py-1 px-2">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">Cost</td>
                                <td class="px-1">Rp.2.455.305.900</td>
                                <td class="px-1">Rp.2.600.000.000</td>
                                <td class="text-center">Approve</td>
                                <td class="text-center">Penambahan Pekerjaan..</td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="text-center">Time</td>
                                <td class="text-center">15 Juni 2025</td>
                                <td class="text-center">30 Juni 2025</td>
                                <td class="text-center">Approve</td>
                                <td class="text-center">Penambahan Pekerjaan..</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Finance & Structure Organization -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-2">
        <!-- Card 1: Finance -->
        <div class="bg-white shadow-md rounded-lg w-full h-100 flex flex-col">
            <!-- Header -->
            <div class="bg-white-50 p-4 rounded-t-2xl">
                <h5 class="inline-block border-blue-500 pb-1 text-2xl font-bold tracking-tight text-blue-900">Finance
                </h5>
                <div class="h-1 w-full bg-blue-500 rounded-sm"></div>
            </div>

            <!-- Scrollable Content -->
            <div class="overflow-y-auto px-4 pb-4 flex-1">
                <!-- Informasi Finance -->
                <div class="overflow-x-auto bg-white">
                    <table class="min-w-full text-sm text-left text-black-500 bg-blue">
                        <tbody>
                            <tr>
                                <td class="px-2">Payment Type</td>
                                <td>: Termin</td>
                            </tr>
                            <tr>
                                <td class="px-2">PPN</td>
                                <td>: 11%</td>
                            </tr>
                            <tr>
                                <td class="px-2">Bank</td>
                                <td>: Mandiri</td>
                            </tr>
                            <tr>
                                <td class="px-2">Atas Nama</td>
                                <td>: -</td>
                            </tr>
                            <tr>
                                <td class="px-2">Virtual Account</td>
                                <td>: 1234-5678-9012-1234</td>
                            </tr>
                            <tr>
                                <td colspan="4" class="text-right">
                                    <!-- Tombol Add New -->
                                    <button type="button" data-modal-target="select-modal"
                                        data-modal-toggle="select-modal"
                                        class="inline-flex items-center px-2 py-1 bg-orange-500 hover:bg-orange-600 text-white text-xs font-medium rounded-md shadow focus:outline-none focus:ring-1 focus:ring-orange-400">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                        </svg>
                                        Add New
                                    </button>

                                    <!-- Modal Select -->
                                    <x-modal.select-modal id="select-modal" title="Pilih Tipe" :options="[
                                        ['id' => 'job-1', 'title' => 'Cost', 'subtitle' => 'Cost'],
                                        ['id' => 'job-2', 'title' => 'Time', 'subtitle' => 'Time'],
                                    ]">
                                        <button
                                            class="text-white inline-flex w-full justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                            Next step
                                        </button>
                                    </x-modal.select-modal>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Tabel Termin -->
                <div class="w-full overflow-x-auto lg:overflow-x-visible mt-2">
                    <table class="min-w-full table-auto text-sm text-left">
                        <thead class="bg-orange-500 text-orange-900 font-bold">
                            <tr class="text-center">
                                <th>No</th>
                                <th>Period</th>
                                <th>Percentage</th>
                                <th>Total</th>
                                <th class="whitespace-nowrap">Date Plan</th>
                                <th class="whitespace-nowrap">Date Actual</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-1 text-center">1</td>
                                <td class="py-1 text-center">Down Payment</td>
                                <td class="py-1 text-center">10%</td>
                                <td class="py-1">Rp.244.530.590</td>
                                <td class="py-1 text-center">5 Jan 2025</td>
                                <td class="py-1 text-center">5 Jan 2025</td>
                            </tr>
                            <tr>
                                <td class="py-1 text-center">2</td>
                                <td class="py-1 text-center">Term 1</td>
                                <td class="py-1 text-center">20%</td>
                                <td class="py-1">Rp.489.061.180</td>
                                <td class="py-1 text-center">5 May 2025</td>
                                <td class="py-1 text-center">5 May 2025</td>
                            </tr>
                            <tr>
                                <td class="py-1 text-center">3</td>
                                <td class="py-1 text-center">Term 2</td>
                                <td class="py-1 text-center">25%</td>
                                <td class="py-1">Rp.733.591.770</td>
                                <td class="py-1 text-center">5 May 2025</td>
                                <td class="py-1 text-center">5 May 2025</td>
                            </tr>
                            <tr>
                                <td class="py-1 text-center">4</td>
                                <td class="py-1 text-center">Term 3</td>
                                <td class="py-1 text-center">30%</td>
                                <td class="py-1">Rp.978.122.360</td>
                                <td class="py-1 text-center">15 Jun 2025</td>
                                <td class="py-1 text-center">5 May 2025</td>
                            </tr>
                            <tr>
                                <td class="py-1 text-center">5</td>
                                <td class="py-1 text-center">Term 4</td>
                                <td class="py-1 text-center">15%</td>
                                <td class="py-1">Rp.100.000.000</td>
                                <td class="py-1 text-center">30 Jun 2025</td>
                                <td class="py-1 text-center">30 Jun 2025</td>
                            </tr>
                            <tr>
                                <td class="py-1 text-center">6</td>
                                <td class="py-1 text-center">Term 5</td>
                                <td class="py-1 text-center">25%</td>
                                <td class="py-1">Rp.733.591.770</td>
                                <td class="py-1 text-center">5 May 2025</td>
                                <td class="py-1 text-center">5 May 2025</td>
                            </tr>
                            <tr>
                                <td class="py-1 text-center">7</td>
                                <td class="py-1 text-center">Term 6</td>
                                <td class="py-1 text-center">30%</td>
                                <td class="py-1">Rp.978.122.360</td>
                                <td class="py-1 text-center">30 Jun 2025</td>
                                <td class="py-1 text-center">30 Jun 2025</td>
                            </tr>
                            <tr>
                                <td class="py-1 text-center">8</td>
                                <td class="py-1 text-center">Term 7</td>
                                <td class="py-1 text-center">15%</td>
                                <td class="py-1">Rp.1.000.000.000</td>
                                <td class="py-1 text-center">30 Jun 2025</td>
                                <td class="py-1 text-center">30 Jun 2025</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Card 2: Structure Organization -->
        <div class="bg-white shadow-md rounded-lg w-full h-100 flex flex-col">
            <!-- Header -->
            <div class="bg-white p-4 rounded-t-2xl">
                <h5 class="inline-block border-blue-500 pb-1 text-2xl font-bold tracking-tight text-blue-900">
                    Structure Organization
                </h5>
                <div class="h-1 w-full bg-blue-500 rounded-sm"></div>
            </div>

            <!-- Scrollable Content -->
            <div class="overflow-y-auto px-4 pb-4 flex-1 bg-white">
                <!-- Informasi Utama -->
                <table class="w-full text-sm text-left text-black-500 bg-blue">
                    <tbody>
                        <tr>
                            <td class="py-2 px-4">Project Manager</td>
                            <td class="py-2 px-4">: Damandaru Handoyo</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4">Project Owner</td>
                            <td class="py-2 px-4">: -</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-right">
                                <!-- Tombol Add New -->
                                <button type="button" data-modal-target="select-modal"
                                    data-modal-toggle="select-modal"
                                    class="inline-flex items-center px-2 py-1 bg-orange-500 hover:bg-orange-600 text-white text-xs font-medium rounded-md shadow focus:outline-none focus:ring-1 focus:ring-orange-400">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                    </svg>
                                    Add New
                                </button>

                                <!-- Modal Select -->
                                <x-modal.select-modal id="select-modal" title="Pilih Tipe" :options="[
                                    ['id' => 'job-1', 'title' => 'Cost', 'subtitle' => 'Cost'],
                                    ['id' => 'job-2', 'title' => 'Time', 'subtitle' => 'Time'],
                                ]">
                                    <button
                                        class="text-white inline-flex w-full justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                        Next step
                                    </button>
                                </x-modal.select-modal>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- Tabel Struktur -->
                <table class="w-full text-sm text-left bg-blue mt-2">
                    <thead class="bg-orange-500 text-orange-900 font-bold">
                        <tr class="text-center">
                            <th class="py-2 px-4">No</th>
                            <th class="py-2 px-4">Type</th>
                            <th class="py-2 px-4">Name</th>
                            <th class="py-2 px-4">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td class="py-1 px-1">1</td>
                            <td class="py-1 px-1 whitespace-nowrap">Site Manager</td>
                            <td class="py-1 px-1">Ahmad</td>
                            <td class="py-1 px-1">Menyiapkan pekerjaan berjalan sesuai planning</td>
                        </tr>
                        <tr class="text-center">
                            <td class="py-1 px-1">2</td>
                            <td class="py-1 px-1">Admin</td>
                            <td class="py-1 px-1">Budi</td>
                            <td class="py-1 px-1">Menyiapkan dan mengelola dokumen proyek</td>
                        </tr>
                        <tr class="text-center">
                            <td class="py-1 px-1">3</td>
                            <td class="py-1 px-1">Logistik</td>
                            <td class="py-1 px-1">Erfin</td>
                            <td class="py-1 px-1">Memberikan arahan, pengawasan, dan validasi teknik</td>
                        </tr>
                        <tr class="text-center">
                            <td class="py-1 px-1">4</td>
                            <td class="py-1 px-1">SHE</td>
                            <td class="py-1 px-1">Andita</td>
                            <td class="py-1 px-1">Menerapkan sistem K3L</td>
                        </tr>
                        <tr class="text-center">
                            <td class="py-1 px-1">5</td>
                            <td class="py-1 px-1">Consultant</td>
                            <td class="py-1 px-1">Budi</td>
                            <td class="py-1 px-1">Mempersiapkan kelancaran material proyek</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- UMD -->
    <div class="rounded-2xl mt-2">
        <div class="">
            <h5 class="inline-block  border-blue-500 pb-1 text-2xl font-bold tracking-tight text-blue-900">
                UMD
            </h5>
            <div class="h-1 w-full bg-blue-500 rounded-sm"></div>
        </div>
        <div class="overflow-x-auto mt-2 bg-white">
            <table class="text-sm text-left rtl:text-right text-black-500 bg-blue">
                <tbody>
                    <tr>
                        <td class="py-2 px-4 text font-bold">Saldo</td>
                        <td>: Rp.200.000.000 / Rp. 10.000.000.000 (2%)</td>
                    </tr>
                    <tr>
                        <td class="px-4 font-bold">Bank</td>
                        <td>: Mandiri</td>
                    </tr>
                    <tr>
                        <td class="px-4 font-bold">Atas Nama</td>
                        <td>: Unit PPR</td>
                    </tr>
                    <tr>
                        <td class="px-4 font-bold">VA / Nomor Rekening</td>
                        <td>: 1234-5678-9012-1234</td>
                    </tr>
                    <tr>
                        <!-- Tombol di dalam tabel -->
                        <td colspan="4">
                            <div class="flex justify-end gap-2 mb-2">
                                <!-- Tombol Add New -->
                                <button type="button" data-modal-target="select-modal"
                                    data-modal-toggle="select-modal"
                                    class="inline-flex items-center px-2 py-1 bg-orange-500 hover:bg-orange-600 text-white text-xs font-medium rounded-md shadow">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                    </svg>
                                    Add New
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
                <div class="w-full overflow-x-auto lg:overflow-x-visible mt-2">
                    <table class="min-w-full table-auto text-sm text-left bg-blue">
                        <thead class="bg-orange-500 text-orange-900 font-bold">
                            <tr class="text-center">
                                <th class="">No</th>
                                <th class="">Title</th>
                                <th class=" whitespace-nowrap">Submission</th>
                                <th class=" whitespace-nowrap">Disbursment</th>
                                <th class=" whitespace-nowrap">Closing Duedate</th>
                                <th class="">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-1 px-2">1</td>
                                <td class="text-center font-bold underline text-blue-500">
                                    <a href="#">
                                        UMD 1
                                    </a>
                                </td>
                                <td class="text-center">Rp.20.000.000</td>
                                <td class="text-center">Rp.20.000.000</td>
                                <td class="text-center">5 Jan 2025</td>
                                <td class="font-bold text-green-400 text-center">CLOSED</td>
                            </tr>
                            <tr>
                                <td class="py-1 px-2">2</td>
                                <td class="text-center font-bold underline text-blue-500">
                                    <a href="#">
                                        UMD 2
                                    </a>
                                </td>
                                <td class="text-center">Rp.15.000.000</td>
                                <td class="text-center">Rp.15.000.000</td>
                                <td class="text-center">5 Mar 2025</td>
                                <td class="font-bold text-red-600 text-center">SP-1</td>
                            </tr>
                            <tr>
                                <td class="py-1 px-2">3</td>
                                <td class="text-center font-bold underline text-blue-500">
                                    <a href="#">
                                        UMD 3
                                    </a>
                                </td>
                                <td class="text-center">Rp.25.000.000</td>
                                <td class="text-center">Rp.25.000.000</td>
                                <td class="text-center">5 May 2025</td>
                                <td class="font-bold text-blue-600 text-center">APPROVE</td>
                            </tr>
                            <tr>
                                <td class="py-1 px-2">4</td>
                                <td class="text-center font-bold underline text-blue-500">
                                    <a href="#">
                                        UMD 4
                                    </a>
                                </td>
                                <td class="text-center">Rp.30.000.000</td>
                                <td class="text-center">Rp.30.000.000</td>
                                <td class="text-center">15 Jun 2025</td>
                                <td class="font-bold text-blue-900 text-center">VERIFY</td>
                            </tr>
                            <tr>
                                <td class="py-1 px-2">5</td>
                                <td class="text-center font-bold underline text-blue-500">
                                    <a href="#">
                                        UMD 5
                                    </a>
                                </td>
                                <td class="text-center">Rp.40.000.000</td>
                                <td class="text-center">Rp.40.000.000</td>
                                <td class="text-center">30 Jun 2025</td>
                                <td class="font-bold text-blue-900 text-center">OPEN</td>
                            </tr>
                            <tr>
                                <td class="py-1 px-2">6</td>
                                <td class="text-center font-bold underline text-blue-500">
                                    <a href="#">
                                        UMD 6
                                    </a>
                                </td>
                                <td class="text-center">Rp.20.000.000</td>
                                <td class="text-center">Rp.20.000.000</td>
                                <td class="text-center">5 Jan 2025</td>
                                <td class="font-bold text-green-400 text-center">CLOSED</td>
                            </tr>
                            <tr>
                                <td class="py-1 px-2">7</td>
                                <td class="text-center font-bold underline text-blue-500">
                                    <a href="#">
                                        UMD 7
                                    </a>
                                </td>
                                <td class="text-center">Rp.15.000.000</td>
                                <td class="text-center">Rp.15.000.000</td>
                                <td class="text-center">5 Mar 2025</td>
                                <td class="font-bold text-red-600 text-center">SP-1</td>
                            </tr>
                            <tr>
                                <td class="py-1 px-2">8</td>
                                <td class="text-center font-bold underline text-blue-500">
                                    <a href="#">
                                        UMD 8
                                    </a>
                                </td>
                                <td class="text-center">Rp.25.000.000</td>
                                <td class="text-center">Rp.25.000.000</td>
                                <td class="text-center">25 May 2025</td>
                                <td class="font-bold text-blue-600 text-center">APPROVE</td>
                            </tr>
                            <tr>
                                <td class="py-1 px-2">9</td>
                                <td class="text-center font-bold underline text-blue-500">
                                    <a href="#">
                                        UMD 9
                                    </a>
                                </td>
                                <td class="text-center">Rp.30.000.000</td>
                                <td class="text-center">Rp.30.000.000</td>
                                <td class="text-center">15 Jun 2025</td>
                                <td class="font-bold text-blue-900 text-center">Verify</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <tbody>
            </table>
        </div>
    </div>
    <!-- WBS Level -->
    <div class="bg-blue-50 mt-2">
        <div>
            <h5 class=" border-blue-500 pb-1 text-2xl font-bold tracking-tight text-blue-900">
                WBS LEVEL
            </h5>
            <div class="h-1 w-full bg-blue-500 rounded-sm"></div>
        </div>
        <div>
            <div class="w-full overflow-x-auto lg:overflow-x-visible mt-2 pt-2 bg-white">
                <table class="overflow-x-auto w-full table-auto text-left text-sm font-sans">
                    <thead class="text-center">
                        <tr class="bg-orange-500 text-orange-900 font-bold">
                            <th class="">Element</th>
                            <th class="px-2 py-2">Priority</th>
                            <th class="px-2 py-2">Status</th>
                            <th class="px-2 py-2">Start</th>
                            <th class="">End</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-800">
                        <!-- Level 1 -->
                        <tr>
                            <td class="pl-1 whitespace-nowrap">1. PENGEMBANGAN EMPLASEMEN TANJUNGENIMBARU</td>
                            <td class="text-center">-</td>
                            <td class="text-center">-</td>
                            <td class="whitespace-nowrap px-4">1 Oktober 2025</td>
                            <td class="text-center">-</td>
                        </tr>

                        <!-- Level 2 -->
                        <tr>
                            <td class="pl-4">1.1. Pekerjaan Persiapan</td>
                            <td class="text-center">-</td>
                            <td class="text-center">-</td>
                            <td class="whitespace-nowrap px-4">1 Jan 2025</td>
                            <td class="text-center">-</td>
                        </tr>

                        <!-- Level 3 -->
                        <tr>
                            <td class="pl-8">1.1.1.</td>
                            <td class="text-center">-</td>
                            <td class="text-center">-</td>
                            <td class="px-4 whitespace-nowrap">-</td>
                            <td class="text-center">-</td>
                        </tr>
                        <!-- Level 4 -->
                        <tr>
                            <td class="pl-16">1.1.1.1.</td>
                            <td class="text-center font-semibold text-green-900">-</td>
                            <td class="text-center font-semibold text-green-600">-</td>
                            <td class="px-4 whitespace-nowrap">-</td>
                            <td class="text-center whitespace-nowrap">-</td>
                        </tr>
                        <tr>
                            <td class="pl-16">1.1.1.2.</td>
                            <td class="text-center font-semibold text-green-700">-</td>
                            <td class="text-center font-semibold text-green-600">-</td>
                            <td class="px-4 whitespace-nowrap">-</td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td class="pl-16">1.1.1.3.</td>
                            <td class="text-center font-semibold text-green-700">-</td>
                            <td class="text-center font-semibold text-green-600">-</td>
                            <td class="px-4 whitespace-nowrap">-</td>
                            <td class="text-center">-</td>
                        </tr>

                        <!-- Next 1.1.2 Pondasi -->
                        <tr>
                            <td class="pl-8">1.1.2.</td>
                            <td class="text-center">-</td>
                            <td class="text-center">-</td>
                            <td class="px-4 whitespace-nowrap">-</td>
                            <td class="text-center">-</td>
                        </tr>

                        <tr>
                            <td class="pl-16">1.1.2.1</td>
                            <td class="text-center font-semibold text-green-700">-</td>
                            <td class="text-center font-semibold text-blue-700">-</td>
                            <td class="px-4 whitespace-nowrap">-</td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td class="pl-16">1.1.2.1</td>
                            <td class="text-center font-semibold text-green-900">-</td>
                            <td class="text-center font-semibold text-blue-500">-</td>
                            <td class="px-4 whitespace-nowrap">-</td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td class="pl-16">1.1.2.3</td>
                            <td class="text-center font-semibold text-green-500">-</td>
                            <td class="text-center font-semibold text-blue-500">-</td>
                            <td class="px-4 whitespace-nowrap">-</td>
                            <td class="text-center">-</td>
                        </tr>

                        <!-- Level 3 -->
                        <tr>
                            <td class="pl-8">1.1.3.</td>
                            <td class="text-center">-</td>
                            <td class="text-center">-</td>
                            <td class="px-4 whitespace-nowrap">-</td>
                            <td class="text-center">-</td>
                        </tr>

                        <tr>
                            <td class="pl-16">1.1.3.1</td>
                            <td class="text-center font-semibold text-green-700">-</td>
                            <td class="text-center font-semibold text-blue-600">-</td>
                            <td class="px-4 whitespace-nowrap">-</td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td class="pl-16">1.1.3.2</td>
                            <td class="text-center font-semibold text-green-700">-</td>
                            <td class="text-center font-semibold text-blue-600">-</td>
                            <td class="px-4 whitespace-nowrap">-</td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td class="pl-16">1.3.2.3</td>
                            <td class="text-center font-semibold text-green-500">-</td>
                            <td class="text-center font-semibold text-red-600">-</td>
                            <td class="px-4 whitespace-nowrap">-</td>
                            <td class="text-center">-</td>
                        </tr>

                        <!-- Level 2 -->
                        <tr>
                            <td class="pl-4">1.2. Pekerjaan TRACK</td>
                            <td class="text-center">-</td>
                            <td class="text-center">-</td>
                            <td class="px-4 whitespace-nowrap">-</td>
                            <td class="text-center">-</td>
                        </tr>

                        <tr>
                            <td class="pl-8">1.2.1.</td>
                            <td class="text-center">-</td>
                            <td class="text-center">-</td>
                            <td class="px-4 whitespace-nowrap">-</td>
                            <td class="text-center">-</td>
                        </tr>

                        <tr>
                            <td class="pl-16">1.2.1.1.</td>
                            <td class="text-center font-semibold text-green-900">-</td>
                            <td class="text-center font-semibold text-red-600">-</td>
                            <td class="px-4 whitespace-nowrap">-</td>
                            <td class="text-center">-</td>
                        </tr>
                        <!-- level 1 bab 2 -->
                        <tr>
                            <td class="pl-1 whitespace-nowrap">2. Pengembangan Gedung SCKD</td>
                            <td class="text-center">-</td>
                            <td class="text-center">-</td>
                            <td class="px-4 whitespace-nowrap">1 Oktober 2025</td>
                            <td class="text-center">-</td>
                        </tr>
                        <!-- Level 2 -->
                        <tr>
                            <td class="pl-4">2.1. Pekerjaan Struktur</td>
                            <td class="text-center">-</td>
                            <td class="text-center">-</td>
                            <td class="px-4 whitespace-nowrap">-</td>
                            <td class="text-center">-</td>
                        </tr>

                        <!-- Level 3 -->
                        <tr>
                            <td class="pl-8">2.1.1. Pondasi</td>
                            <td class="text-center">-</td>
                            <td class="text-center">-</td>
                            <td class="px-4 whitespace-nowrap">1 Jan 2025</td>
                            <td class="text-center">-</td>
                        </tr>
                        <!-- Level 4 -->
                        <tr>
                            <td class="pl-16">2.1.1.1. Tanah</td>
                            <td class="text-center font-semibold text-green-900">-</td>
                            <td class="text-center font-semibold text-green-600">-</td>
                            <td class="px-4 whitespace-nowrap">1 Jan 2025</td>
                            <td class="text-center">1 Jan 2025</td>
                        </tr>
                        <tr>
                            <td class="pl-16">2.1.1.2. Batu Kali</td>
                            <td class="text-center font-semibold text-green-700">-</td>
                            <td class="text-center font-semibold text-green-600">-</td>
                            <td class="px-4 whitespace-nowrap">1 Jan 2025</td>
                            <td class="text-center">1 Jan 2025</td>
                        </tr>
                        <tr>
                            <td class="pl-16">2.1.1.3. Slop</td>
                            <td class="text-center font-semibold text-green-700">-</td>
                            <td class="text-center font-semibold text-green-600">-</td>
                            <td class="px-4 whitespace-nowrap">1 Jan 2025</td>
                            <td class="text-center">1 Jan 2025</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('sections.section-footer')
</div>
