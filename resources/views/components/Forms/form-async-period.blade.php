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
        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-orange-500 text-white font-bold z-10">3
        </div>
        <span class="mt-2 text-sm font-medium text-blue-900">Organization</span>
        <div class="absolute top-4 left-1/2 w-full h-1 bg-blue-600 -z-0"></div>
    </div>

    <!-- Step 4 -->
    <div class="flex-1 flex flex-col items-center relative">
        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-orange-500 text-white font-bold z-10">4
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
<div class="bg-blue-50 shadow-md rounded-lg p-6">
    <h2 class="text-lg font-bold text-blue-900 border-b pb-2 mb-4">Periode</h2>

    <form id="general-form">
        <div class="grid grid-cols-2 gap-6 bg-white p-4">
            <!-- Fiscal Year -->
            <div class="grid grid-cols-4 items-center">
                <label class="col-span-1 text-sm font-semibold text-gray-700">Fiscal Year</label>
                <input type="text" name="fiscal_year" value="2025" readonly
                    class="col-span-3 border rounded-lg p-2 bg-gray-100 w-full" />
            </div>

            <!-- Date SPMK -->
            <div class="grid grid-cols-4 items-center">
                <label class="col-span-1 text-sm font-semibold text-gray-700">Date SPMK <span
                        class="text-red-500">*</span></label>
                <input type="text" id="date_spmk" name="date_spmk" placeholder="dd/mm/yyyy"
                    class="col-span-3 border rounded-lg p-2 focus:ring-2 focus:ring-blue-500 w-full" />
            </div>

            <!-- Start Date -->
            <div class="grid grid-cols-4 items-center">
                <label class="col-span-1 text-sm font-semibold text-gray-700">Start Date</label>
                <input type="text" name="start_date" value="02 January 2025" readonly
                    class="bg-gray-100 col-span-3 border rounded-lg p-2 focus:ring-2 focus:ring-blue-500 w-full" />
            </div>

            <!-- Date Contract -->
            <div class="grid grid-cols-4 items-center">
                <label class="col-span-1 text-sm font-semibold text-gray-700">Date Contract <span
                        class="text-red-500">*</span></label>
                <input type="text" id="date_contract" name="date_contract" placeholder="dd/mm/yyyy"
                    class="col-span-3 border rounded-lg p-2 focus:ring-2 focus:ring-blue-500 w-full" />
            </div>

            <!-- End Date -->
            <div class="grid grid-cols-4 items-center">
                <label class="col-span-1 text-sm font-semibold text-gray-700">End Date</label>
                <input type="text" name="end_date" value="15 January 2025" readonly
                    class="bg-gray-100 col-span-3 border rounded-lg p-2 focus:ring-2 focus:ring-blue-500 w-full" />
            </div>

            <!-- Date Actual -->
            <div class="grid grid-cols-4 items-center">
                <label class="col-span-1 text-sm font-semibold text-gray-700">Date Actual</label>
                <input type="text" name="date_actual" placeholder="dd/mm/yyyy"
                    class="col-span-3 border rounded-lg p-2 focus:ring-2 focus:ring-blue-500 w-full" />
            </div>

            <!-- Total Days -->
            <div class="grid grid-cols-4 items-center">
                <label class="col-span-1 text-sm font-semibold text-gray-700">Total Days</label>
                <input type="text" name="total_days" value="125 Days" readonly
                    class="col-span-3 border rounded-lg p-2 bg-gray-100 w-full" />
            </div>

            <!-- Start By -->
            <div class="grid grid-cols-4 items-center">
                <label class="col-span-1 text-sm font-semibold text-gray-700">Start By <span
                        class="text-red-500">*</span></label>
                <select id="start_by" name="start_by"
                    class="col-span-3 border rounded-lg p-2 focus:ring-2 focus:ring-blue-500 w-full">
                    <option value="">-- pilih salah satu --</option>
                    <option value="SPMK">SPMK</option>
                    <option value="Contract">Contract</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <!-- Date SPR -->
            <div class="grid grid-cols-4 items-center">
                <label class="col-span-1 text-sm font-semibold text-gray-700">Date SPR <span
                        class="text-red-500">*</span></label>
                <input type="text" name="date_actual" placeholder="dd/mm/yyyy"
                    class="col-span-3 border rounded-lg p-2 focus:ring-2 focus:ring-blue-500 w-full" />
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
    document.getElementById("nextBtn").addEventListener("click", function() {
        const form = document.getElementById("general-form");
        const requiredFields = ["date_spmk", "date_contract", "start_by"];
        let isValid = true;

        requiredFields.forEach(id => {
            const field = document.getElementById(id);
            if (!field.value.trim()) {
                isValid = false;
                field.classList.add("border-red-500");
            } else {
                field.classList.remove("border-red-500");
            }
        });

        if (!isValid) {
            alert("Harap isi semua field yang wajib diisi (*) sebelum melanjutkan!");
            return;
        }

        // Simpan data form
        const formData = new FormData(form);
        console.log("General Data:", Object.fromEntries(formData));

        // Redirect
        window.location.href = "/Form-Async-Organization";
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
