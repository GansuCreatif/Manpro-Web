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
        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-orange-500 text-white font-bold z-10">2
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
<div class="bg-blue-50 rounded-lg shadow p-6">
    <!-- Judul -->
    <h2 class="text-lg font-bold text-blue-900 border-b-2 border-blue-600 pb-2 mb-6">General</h2>

    <!-- Form Grid -->
    <form id="general-form" class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-white p-5">

        <!-- Kolom Kiri -->
        <div class="space-y-4">
            <!-- Project Code -->
            <div class="flex items-center space-x-2 ">
                <label for="project_code" class="w-32 text-sm font-medium text-gray-900">Project Code :</label>
                <input type="text" id="project_code" name="project_code" value="240189" readonly
                    class="flex-1 bg-gray-100 border border-gray-300 text-sm rounded-lg p-2.5 text-gray-500">
            </div>

            <!-- Description -->
            <div class="flex items-center space-x-2">
                <label for="description" class="w-32 text-sm font-medium text-gray-900">
                    Description <span class="text-red-500">*</span> :
                </label>
                <textarea id="description" name="description" placeholder="KAI Terrace Ahmad Dahlan" rows="4"
                    class="flex-1 bg-white border border-gray-300 text-sm rounded-lg p-2.5 focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>

            <!-- Location -->
            <div class="flex items-center space-x-2">
                <label for="location" class="w-32 text-sm font-medium text-gray-900">Location :</label>
                <input type="text" id="location" name="location" value="Palembang" readonly
                    class="flex-1 bg-gray-50 border border-gray-300 text-sm rounded-lg p-2.5 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Unit -->
            <div class="flex items-center space-x-2">
                <label for="unit" class="w-32 text-sm font-medium text-gray-900">Unit :</label>
                <input type="text" id="unit" name="unit" value="PPR" readonly
                    class="flex-1 bg-gray-50 border border-gray-300 text-sm rounded-lg p-2.5 focus:ring-blue-500 focus:border-blue-500">
            </div>
        </div>

        <!-- Kolom Kanan -->
        <div class="space-y-4">
            <!-- Owner -->
            <div class="flex items-center space-x-2">
                <label for="owner" class="w-32 text-sm font-medium text-gray-900">Owner :</label>
                <input type="text" id="owner" name="owner" value="DIVRE III" readonly
                    class="flex-1 bg-gray-50 border border-gray-300 text-sm rounded-lg p-2.5 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- No SPMK -->
            <div class="flex items-center space-x-2">
                <label for="spmk" class="w-32 text-sm font-medium text-gray-900">
                    No. SPMK <span class="text-red-500">*</span> :
                </label>
                <input type="text" id="spmk" name="spmk" placeholder="XXX/XX/XXX"
                    class="flex-1 bg-white border border-gray-300 text-sm rounded-lg p-2.5 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- No Contract -->
            <div class="flex items-center space-x-2">
                <label for="contract" class="w-32 text-sm font-medium text-gray-900">
                    No. Contract <span class="text-red-500">*</span> :
                </label>
                <input type="text" id="contract" name="contract" placeholder="XXX/XX/XXX"
                    class="flex-1 bg-white border border-gray-300 text-sm rounded-lg p-2.5 focus:ring-blue-500 focus:border-blue-500">
            </div>
        </div>
    </form>

    <!-- Tombol Next -->
    <div class="flex justify-end mt-6">
        <button type="button" id="nextBtn"
            class="px-6 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300">
            Next
        </button>
    </div>
</div>

<script>
    document.getElementById("nextBtn").addEventListener("click", function() {
        // ambil data form
        const formData = new FormData(document.getElementById("general-form"));
        console.log("General Data:", Object.fromEntries(formData));

        // contoh redirect ke step berikutnya (Periode)
        window.location.href = "/Form-Async-Period";
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
