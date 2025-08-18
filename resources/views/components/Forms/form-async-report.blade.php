<!-- Stepper -->
<div class="w-full flex items-center justify-between mb-8">
    <!-- Step 1 -->
    <div class="flex-1 flex flex-col items-center relative">
        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-green-500 text-white font-bold z-10">1
        </div>
        <span class="mt-2 text-sm font-medium text-blue-900">General</span>
        <!-- Garis ke kanan -->
        <div class="absolute top-4 left-1/2 w-full h-1 bg-blue-600 -z-0"></div>
    </div>

    <!-- Step 2 -->
    <div class="flex-1 flex flex-col items-center relative">
        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-green-500 text-white font-bold z-10">2
        </div>
        <span class="mt-2 text-sm font-medium text-blue-900">Periode</span>
        <div class="absolute top-4 left-1/2 w-full h-1 bg-blue-600 -z-0"></div>
    </div>

    <!-- Step 3 -->
    <div class="flex-1 flex flex-col items-center relative">
        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-green-500 text-white font-bold z-10">3
        </div>
        <span class="mt-2 text-sm font-medium text-blue-900">Organization</span>
        <div class="absolute top-4 left-1/2 w-full h-1 bg-blue-600 -z-0"></div>
    </div>

    <!-- Step 4 -->
    <div class="flex-1 flex flex-col items-center relative">
        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-green-500 text-white font-bold z-10">4
        </div>
        <span class="mt-2 text-sm font-medium text-blue-900">Finance</span>
        <div class="absolute top-4 left-1/2 w-full h-1 bg-blue-600 -z-0"></div>
    </div>

    <!-- Step 5 -->
    <div class="flex-1 flex flex-col items-center relative">
        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-green-500 text-white font-bold z-10">5
        </div>
        <span class="mt-2 text-sm font-medium text-blue-900">Report</span>
    </div>
</div>
<div class="bg-blue-50 rounded-lg shadow p-6">
    <!-- Judul -->
    <h2 class="text-lg font-bold text-blue-900 border-b-2 border-blue-600 pb-2 mb-6">Report</h2>

    <!-- Form Grid -->
    <form id="general-form" class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-white p-5">

        <!-- Kolom Kiri -->
        <div class="space-y-4">
            <!-- Project Code -->
            <div class="flex items-center space-x-2">
                <label class="w-40 text-sm font-semibold text-gray-700">
                    Superior 1 <span class="text-red-500">*</span>
                </label>
                <select class="flex-1 border rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
                    <option selected>Kepala Departemen Properti</option>
                    <option>Kepala Departemen Keuangan</option>
                    <option>Kepala Departemen Teknik</option>
                </select>
            </div>

            <!-- Description -->
            <div class="flex items-center space-x-2 hidden">
                <label for="description" class="w-32 text-sm font-medium text-gray-900">
                    Description <span class="text-red-500">*</span> :
                </label>
                <input type="text" id="description" name="description" placeholder="Masukkan Deskripsi"
                    class="flex-1 bg-gray-50 border border-gray-300 text-sm rounded-lg p-2.5 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Location -->
            <div class="flex items-center space-x-2 hidden">
                <label for="location" class="w-32 text-sm font-medium text-gray-900">Location :</label>
                <input type="text" id="location" name="location" value="Palembang"
                    class="flex-1 bg-gray-50 border border-gray-300 text-sm rounded-lg p-2.5 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Unit -->
            <div class="flex items-center space-x-2 hidden">
                <label for="unit" class="w-32 text-sm font-medium text-gray-900">Unit :</label>
                <input type="text" id="unit" name="unit" value="PPR"
                    class="flex-1 bg-gray-50 border border-gray-300 text-sm rounded-lg p-2.5 focus:ring-blue-500 focus:border-blue-500">
            </div>
        </div>

        <!-- Kolom Kanan -->
        <div class="space-y-4">
            <!-- Owner -->
            <div class="flex items-center space-x-2">
                <label class="w-40 text-sm font-semibold text-gray-700">
                    Superior 2 <span class="text-red-500">*</span>
                </label>
                <select class="flex-1 border rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
                    <option selected>Direktur Properti dan Pengembangan Usaha</option>
                    <option>Direktur Keuangan</option>
                    <option>Direktur Utama</option>
                </select>
            </div>

            <!-- No SPMK -->
            <div class="flex items-center space-x-2 hidden">
                <label for="spmk" class="w-32 text-sm font-medium text-gray-900">
                    No. SPMK <span class="text-red-500">*</span> :
                </label>
                <input type="text" id="spmk" name="spmk" placeholder="XXX/XX/XXX"
                    class="flex-1 bg-gray-50 border border-gray-300 text-sm rounded-lg p-2.5 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- No Contract -->
            <div class="flex items-center space-x-2 hidden">
                <label for="contract" class="w-32 text-sm font-medium text-gray-900">
                    No. Contract <span class="text-red-500">*</span> :
                </label>
                <input type="text" id="contract" name="contract" placeholder="XXX/XX/XXX"
                    class="flex-1 bg-gray-50 border border-gray-300 text-sm rounded-lg p-2.5 focus:ring-blue-500 focus:border-blue-500">
            </div>
        </div>

        <div class="col-span-2 mt-2 pt-2 bg-white">
            <table class="overflow-x-auto w-full table-auto text-left text-sm font-sans">
                <thead class="text-center py-2 px-4">
                    <tr class="bg-orange-500 text-blue-950 font-bold">
                        <th class="">Element</th>
                        <th class="px-2 py-2">Progress</th>
                        <th class="px-2 py-2">Start</th>
                        <th class="px-2 py-2">End</th>
                        <th class="">Priority</th>
                    </tr>
                </thead>
                <tbody class="text-gray-800">
                    <!-- Awal Level Pembangunan Gedung SCKD -->

                    <!-- Level 1 -->
                    <tr>
                        <td class="pl-1  whitespace-nowrap">1. Pembangunan Gedung SCKD</td>
                        <td class="py-2 px-4 text-center">-</td>
                        <td class="py-2 px-4 text-center">-</td>
                        <td class="py-2 px-4 whitespace-nowrap px-4">-</td>
                        <td class="py-2 px-4 text-center">-</td>
                    </tr>

                    <!-- Level 2 -->
                    <tr>
                        <td class="pl-4">1.1. Pekerjaan Struktur</td>
                        <td class="text-center">-</td>
                        <td class="text-center">-</td>
                        <td class="whitespace-nowrap px-4">-</td>
                        <td class="text-center">-</td>
                    </tr>

                    <!-- Level 3 -->
                    <tr>
                        <td class="pl-8 py-2">1.1.1. Pondasi</td>
                        <td class="text-center">-</td>
                        <td class="text-center">-</td>
                        <td class="px-4 whitespace-nowrap">-</td>
                        <td class="text-center">-</td>
                    </tr>
                    <!-- Level 4 -->
                    <tr>
                        <td class="pl-16 py-2">1.1.1.1. Tanah</td>
                        <td class="text-center">80%</td>
                        <td class="text-center">9 Jan 2025</td>
                        <td class="px-4 whitespace-nowrap">15 Jan 2025</td>
                        <td class="text-center whitespace-nowrap text-red-500 font-bold">High</td>
                    </tr>
                    <tr>
                        <td class="pl-16 py-2">1.1.1.2. Batu Kali</td>
                        <td class="text-center">20%</td>
                        <td class="text-center">9 Jan 2025</td>
                        <td class="px-4 whitespace-nowrap">15 Jan 2025</td>
                        <td class="text-center text-orange-500 font-bold">Medium</td>
                    </tr>
                    <tr>
                        <td class="pl-16 py-2">1.1.1.3. Slop</td>
                        <td class="text-center">100%</td>
                        <td class="text-center">9 Jan 2025</td>
                        <td class="px-4 whitespace-nowrap">15 Jan 2025</td>
                        <td class="text-center text-orange-500 font-bold">Medium</td>
                    </tr>

                    <!-- Next 1.1.2 Pondasi -->
                    <tr>
                        <td class="pl-8 py-2">1.1.2. Pondasi</td>
                        <td class="text-center">-</td>
                        <td class="text-center">-</td>
                        <td class="px-4 whitespace-nowrap">-</td>
                        <td class="text-center">-</td>
                    </tr>
                    <!-- Level 3 -->
                    <tr>
                        <td class="pl-16 py-2">1.1.2.1. Tanah</td>
                        <td class="text-center">80%</td>
                        <td class="text-center">9 Jan 2025</td>
                        <td class="px-4 whitespace-nowrap">15 Jan 2025</td>
                        <td class="text-center whitespace-nowrap text-red-500 font-bold">High</td>
                    </tr>
                    <tr>
                        <td class="pl-16 py-2">1.1.2.2. Batu Kali</td>
                        <td class="text-center">20%</td>
                        <td class="text-center">9 Jan 2025</td>
                        <td class="px-4 whitespace-nowrap">15 Jan 2025</td>
                        <td class="text-center text-orange-500 font-bold">Medium</td>
                    </tr>
                    <tr>
                        <td class="pl-16 py-2">1.1.2.3. Slop</td>
                        <td class="text-center">100%</td>
                        <td class="text-center">9 Jan 2025</td>
                        <td class="px-4 whitespace-nowrap">15 Jan 2025</td>
                        <td class="text-center text-green-500 font-bold">Low</td>
                    </tr>

                    <!-- Level 3 -->
                    <tr>
                        <td class="pl-8 py-2">1.1.3. Pondasi</td>
                        <td class="text-center">-</td>
                        <td class="text-center">-</td>
                        <td class="px-4 whitespace-nowrap">-</td>
                        <td class="text-center">-</td>
                    </tr>

                    <tr>
                        <td class="pl-16 py-2">1.1.3.1. Tanah</td>
                        <td class="text-center">80%</td>
                        <td class="text-center">9 Jan 2025</td>
                        <td class="px-4 whitespace-nowrap">15 Jan 2025</td>
                        <td class="text-center whitespace-nowrap text-orange-500 font-bold">Medium</td>
                    </tr>
                    <tr>
                        <td class="pl-16 py-2">1.1.3.2. Batu Kali</td>
                        <td class="text-center">20%</td>
                        <td class="text-center">9 Jan 2025</td>
                        <td class="px-4 whitespace-nowrap">15 Jan 2025</td>
                        <td class="text-center whitespace-nowrap text-orange-500 font-bold">Medium</td>
                    </tr>
                    <tr>
                        <td class="pl-16 py-2">1.3.2.3. Slop</td>
                        <td class="text-center">100%</td>
                        <td class="text-center">9 Jan 2025</td>
                        <td class="px-4 whitespace-nowrap">15 Jan 2025</td>
                        <td class="text-center whitespace-nowrap text-green-500 font-bold">Low</td>
                    </tr>
                    <!-- Akhir dari Level 1 Pembangungan Gedung SCKD -->

                    <!-- Awal dari Level 2 Pembangungan Gedung SCKD -->
                    <!-- Level 2 -->
                    <tr>
                        <td class="pl-4 py-2">1.2. Pekerjaan Struktur</td>
                        <td class="text-center">-</td>
                        <td class="text-center">-</td>
                        <td class="px-4 whitespace-nowrap">-</td>
                        <td class="text-center">-</td>
                    </tr>

                    <tr>
                        <td class="pl-8 py-2">1.2.1. Pondasi</td>
                        <td class="text-center">-</td>
                        <td class="text-center">-</td>
                        <td class="px-4 whitespace-nowrap">-</td>
                        <td class="text-center">-</td>
                    </tr>

                    <tr>
                        <td class="pl-16 py-2">1.2.1.1. Tanah</td>
                        <td class="text-center">10%</td>
                        <td class="text-center">9 May 2025</td>
                        <td class="px-4 whitespace-nowrap">15 May 2025</td>
                        <td class="text-center whitespace-nowrap text-red-500 font-bold">High</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>

    <!-- Tombol Next -->
    <div class="flex justify-end mt-6">
        <button type="button" id="nextBtn"
            class="px-6 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300">
            Submit
        </button>
    </div>
</div>

<script>
    document.getElementById("nextBtn").addEventListener("click", function() {
        window.location.href = "{{ route('Project-List', ['id' => 1]) }}";
    });
</script>

<script>
    let currentStep = 1;

    document.getElementById("nextBtn").addEventListener("click", function() {
        if (currentStep < 5) {
            currentStep++;
            updateStepper(currentStep);
        }
    });

    function updateStepper(step) {
        const steps = document.querySelectorAll(".step-circle");
        steps.forEach((el, i) => {
            if (i + 1 < step) {
                el.classList.remove("bg-orange-500", "bg-gray-300");
                el.classList.add("bg-green-500");
            } else if (i + 1 === step) {
                el.classList.remove("bg-green-500", "bg-gray-300");
                el.classList.add("bg-orange-500");
            } else {
                el.classList.remove("bg-green-500", "bg-orange-500");
                el.classList.add("bg-gray-300");
            }
        });
    }
</script>
