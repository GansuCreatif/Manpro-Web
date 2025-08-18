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
        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-orange-500 text-white font-bold z-10">5
        </div>
        <span class="mt-2 text-sm font-medium text-blue-900">Report</span>
    </div>
</div>


<div class="bg-blue-50 p-4 rounded-lg shadow">
    <!-- Judul -->
    <h2 class="text-xl font-bold text-blue-900 mb-4">Cash In</h2>
    <hr class="border-t-2 border-blue-500 mb-4">

    <form id="general-form">
        <!-- Grid Form -->
        <div class="grid grid-cols-2 gap-6 bg-white p-2">
            <!-- Payment Type -->
            <div class="flex items-center">
                <label class="w-40 text-sm font-semibold text-gray-700">
                    Payment Type <span class="text-red-500">*</span>
                </label>
                <select id="paymentType" class="flex-1 border rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
                    <option>Term</option>
                    <option>Monthly</option>
                    <option>0-100</option>
                </select>
            </div>

            <!-- Term -->
            <div class="flex items-center">
                <label class="w-40 text-sm font-semibold text-gray-700">
                    Term <span class="text-red-500">*</span>
                </label>
                <select id="termSelect" class="flex-1 border rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
                    <option value="">Pilih Term</option>
                </select>
            </div>

            <!-- Total Term -->
            <div class="flex items-center">
                <label class="w-40 text-sm font-semibold text-gray-700">
                    Total Term <span class="text-red-500">*</span>
                </label>
                <input id="totalTerm" type="number" class="flex-1 border rounded-lg p-2"
                    placeholder="Masukkan total term" />
            </div>

            <!-- Date Plan -->
            <div class="flex items-center">
                <label class="w-40 text-sm font-semibold text-gray-700">
                    Date Plan <span class="text-red-500">*</span>
                </label>
                <input type="date" class="flex-1 border rounded-lg p-2" />
            </div>

            <!-- Downpayment -->
            <div class="flex items-center">
                <label class="w-40 text-sm font-semibold text-gray-700">
                    Downpayment<span class="text-red-500">*</span>
                </label>
                <input type="text" class="flex-1 border rounded-lg p-2" placeholder="100.000.000" />
            </div>

            <!-- Work Progress -->
            <div class="flex items-center">
                <label class="w-40 text-sm font-semibold text-gray-700">
                    Work Progress (%) <span class="text-red-500">*</span>
                </label>
                <input type="number" class="flex-1 border rounded-lg p-2" placeholder="0 - 100" />
            </div>

            <!-- PPN -->
            <div class="flex items-center">
                <label class="w-40 text-sm font-semibold text-gray-700">
                    PPN (%) <span class="text-red-500">*</span>
                </label>
                <input type="number" class="flex-1 border rounded-lg p-2" placeholder="10" />
            </div>

            <!-- Value -->
            <div class="flex items-center">
                <label class="w-40 text-sm font-semibold text-gray-700">
                    Value<span class="text-red-500">*</span>
                </label>
                <input type="text" class="flex-1 border rounded-lg p-2" placeholder="150.000.000" />
            </div>

            <!-- Bank -->
            <div class="flex items-center">
                <label class="w-40 text-sm font-semibold text-gray-700">
                    Bank <span class="text-red-500">*</span>
                </label>
                <select class="flex-1 border rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
                    <option selected>Mandiri</option>
                    <option>Bank DKI</option>
                    <option>Bank Jateng</option>
                    <option>Bank BJB</option>
                </select>
            </div>

            <!-- Kosongan aja -->
            <div class="flex items-center col-span-1">

            </div>

            <!-- Account Name -->
            <div class="flex items-center col-span-1">
                <label class="w-40 text-sm font-semibold text-gray-700">
                    Account Name <span class="text-red-500">*</span>
                </label>
                <select id="accountName" class="flex-1 border rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
                    <option selected>PT KA Properti Manajemen</option>
                    <option>Pribadi</option>
                </select>
            </div>

            <!-- Kosongan aja -->
            <div class="flex items-center col-span-1">

            </div>

            <!-- Account Number -->
            <div class="flex items-center">
                <label class="w-40 text-sm font-semibold text-gray-700">
                    Account Number <span class="text-red-500">*</span>
                </label>
                <input id="accountNumber" type="text" value="1234-5678-9012-3456"
                    class="flex-1 border rounded-lg p-2 bg-gray-100" readonly />
            </div>
            <!-- Kosongan aja -->
            <div class="flex items-center col-span-1">

            </div>
            <!-- Kosongan aja -->
            <div class="flex items-center col-span-1">

            </div>
            <!-- Tombol Add -->
            <div class="flex justify-end mt-4">
                <button id="addTerm"
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Add</button>
            </div>
            <!-- Tabel -->
            <div class="col-span-2">
                <table class="min-w-full  text-sm text-left text-gray-600">
                    <thead class=" rounded-2xl bg-orange-500 text-blue-950 uppercase text-xs">
                        <tr>
                            <th class="px-4 py-2 text-center">No</th>
                            <th class="px-4 py-2 text-center">Term</th>
                            <th class="px-4 py-2 text-center">Date Plan</th>
                            <th class="px-4 py-2 text-center">Work Progress (%)</th>
                            <th class="px-4 py-2 text-center">Value (Rp)</th>
                            <th class="px-4 py-2 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody id="termTableBody">
                        <tr>
                            <td class="px-4 py-2 text-center">1</td>
                            <td class="px-4 py-2 text-center">Term 1</td>
                            <td class="px-4 py-2 text-center">2025-01-10</td>
                            <td class="px-4 py-2 text-center">25</td>
                            <td class="px-4 py-2 text-center">200.000.000</td>
                            <td class="px-4 py-2 text-center">
                                <button
                                    class="removeTerm
                            bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">Remove</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 text-center">2</td>
                            <td class="px-4 py-2 text-center">Term 2</td>
                            <td class="px-4 py-2 text-center">2025-01-11</td>
                            <td class="px-4 py-2 text-center">25</td>
                            <td class="px-4 py-2 text-center">400.000.000</td>
                            <td class="px-4 py-2 text-center">
                                <button
                                    class="removeTerm
                            bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">Remove</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="p-4 rounded-lg shadow-md mt-6">
            <!-- Cash Out Title -->
            <h2 class="text-xl font-bold text-blue-900 mb-4">Cash Out</h2>
            <hr class="border-t-2 border-blue-800 mb-4" />

            <div class="grid grid-cols-2 gap-6 bg-white p-2">
                <!-- Bank -->
                <div class="flex items-center">
                    <label class="w-40 text-sm font-semibold text-gray-700">
                        Bank <span class="text-red-500">*</span>
                    </label>
                    <select id="cashoutBank" class="flex-1 border rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
                        <option selected>Mandiri</option>
                        <option>Bank DKI</option>
                        <option>Bank Jateng</option>
                        <option>Bank BJB</option>
                    </select>
                </div>

                <!-- Superior 1 -->
                <div class="flex items-center">
                    <label class="w-40 text-sm font-semibold text-gray-700">
                        Superior 1 <span class="text-red-500">*</span>
                    </label>
                    <select class="flex-1 border rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
                        <option selected>Kepala Departemen Properti</option>
                        <option>Kepala Departemen Keuangan</option>
                        <option>Kepala Departemen Teknik</option>
                    </select>
                </div>

                <!-- Account Name -->
                <div class="flex items-center">
                    <label class="w-40 text-sm font-semibold text-gray-700">
                        Account Name <span class="text-red-500">*</span>
                    </label>
                    <select id="cashoutAccountName"
                        class="flex-1 border rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
                        <option selected>Danandaru Harumandoyo</option>
                        <option>PT KA Properti Manajemen</option>
                        <option>Pribadi</option>
                    </select>
                </div>

                <!-- Superior 2 -->
                <div class="flex items-center">
                    <label class="w-40 text-sm font-semibold text-gray-700">
                        Superior 2 <span class="text-red-500">*</span>
                    </label>
                    <select class="flex-1 border rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
                        <option selected>Direktur Properti dan Pengembangan Usaha</option>
                        <option>Direktur Keuangan</option>
                        <option>Direktur Utama</option>
                    </select>
                </div>
                <!-- Account Number -->
                <div class="flex items-center">
                    <label class="w-40 text-sm font-semibold text-gray-700">
                        Account Number <span class="text-red-500">*</span>
                    </label>
                    <input id="cashoutAccountNumber" type="text" value="1234-5678-9012-3456"
                        class="flex-1 border rounded-lg p-2 bg-gray-100" readonly />
                </div>
                <div class="flex items-center">

                </div>
            </div>
        </div>
        <!-- Tombol Next -->
        <div class="flex justify-end mt-6">
            <button type="button" id="nextBtn"
                class="px-6 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300">
                Next
            </button>
        </div>
    </form>
</div>



<script>
    document.getElementById("cashoutAccountName").addEventListener("change", function() {
        const numberField = document.getElementById("cashoutAccountNumber");
        if (this.value === "PT KA Properti Manajemen") {
            numberField.value = "1234-5678-9012-3456";
        } else if (this.value === "Pribadi") {
            numberField.value = "1234-1234-1234-1234";
        } else {
            numberField.value = "9876-5432-1098-7654"; // contoh lain untuk nama berbeda
        }
    });
</script>


<script>
    // Generate Term Dropdown sesuai Total Term
    document.getElementById("totalTerm").addEventListener("input", function() {
        const termSelect = document.getElementById("termSelect");
        const total = parseInt(this.value) || 0;
        termSelect.innerHTML = "";
        for (let i = 1; i <= total; i++) {
            let opt = document.createElement("option");
            opt.value = "Term " + i;
            opt.textContent = "Term " + i;
            termSelect.appendChild(opt);
        }
    });

    // Autofill Account Number
    document.getElementById("accountName").addEventListener("change", function() {
        const numberField = document.getElementById("accountNumber");
        if (this.value === "PT KA Properti Manajemen") {
            numberField.value = "1234-5678-9012-3456";
        } else if (this.value === "Pribadi") {
            numberField.value = "1234-1234-1234-1234";
        }
    });
</script>



<script>
    document.querySelectorAll(".removeTerm").forEach(button => {
        button.addEventListener("click", function() {
            const row = this.closest("tr");
            row.remove();
        });
    });
</script>


<script>
    document.getElementById("nextBtn").addEventListener("click", function() {
        // ambil data form
        const formData = new FormData(document.getElementById("general-form"));
        console.log("General Data:", Object.fromEntries(formData));

        // contoh redirect ke step berikutnya (Periode)
        window.location.href = "/Form-Async-Report";
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
