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

<div class="bg-white shadow-md rounded-xl p-6">
    <h2 class="text-xl font-bold text-blue-900 border-b-2 border-blue-200 pb-2 mb-4">Organization</h2>

    <!-- Form Fields -->
    <form id="general-form">
        <div class="grid grid-cols-2 gap-x-8 gap-y-4 text-sm">
            <!-- Left side -->
            <div class="flex items-center">
                <label class="w-40 font-medium text-gray-700">Project Manager :</label>
                <input type="text" value="Danandaru Harumandoyo" disabled
                    class="w-full border rounded-md px-3 py-2 bg-gray-100" />
            </div>

            <div class="flex items-center">
                <label class="w-40 font-medium text-gray-700">Role <span class="text-red-500">*</span> :</label>
                <select class="w-full border rounded-md px-3 py-2">
                    <option>Admin</option>
                    <option>Site Manager</option>
                    <option>Logistik</option>
                    <option>SHE</option>
                    <option>Consultant</option>
                </select>
            </div>

            <div class="flex items-center">
                <label class="w-40 font-medium text-gray-700">NIPPM :</label>
                <input type="text" class="w-full border rounded-md px-3 py-2" />
            </div>

            <div class="flex items-center">
                <label class="w-40 font-medium text-gray-700">Job Desc <span class="text-red-500">*</span> :</label>
                <textarea rows="2" class="w-full border rounded-md px-3 py-2">Melakukan pencatatan keuangan dan laporan mingguan proyek kepada Project Manager</textarea>
            </div>

            <div class="flex items-center">
                <label class="w-40 font-medium text-gray-700">Name <span class="text-red-500">*</span> :</label>
                <input type="text" value="Budi" class="w-full border rounded-md px-3 py-2" />
            </div>

            <div class="flex justify-end items-center">
                <button onclick="addRow()"
                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Add</button>
            </div>
        </div>

        <!-- Table -->
        <div class="mt-6 overflow-x-auto">
            <table class="min-w-full border text-sm text-left">
                <thead class="bg-orange-500 text-white">
                    <tr>
                        <th class="px-4 py-2">No.</th>
                        <th class="px-4 py-2">Type</th>
                        <th class="px-4 py-2">NIPPM</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Description</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody id="orgTable">
                    <tr class="even:bg-gray-100">
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">Site Manager</td>
                        <td class="px-4 py-2">-</td>
                        <td class="px-4 py-2">Ahmad</td>
                        <td class="px-4 py-2">Memastikan pekerjaan berjalan sesuai planning</td>
                        <td class="px-4 py-2">
                            <button onclick="removeRow(this)"
                                class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Remove</button>
                        </td>
                    </tr>
                    <tr class="even:bg-gray-100">
                        <td class="px-4 py-2">2</td>
                        <td class="px-4 py-2">Admin</td>
                        <td class="px-4 py-2">-</td>
                        <td class="px-4 py-2">Budi</td>
                        <td class="px-4 py-2">Menyiapkan dan mengelola dokumen proyek</td>
                        <td class="px-4 py-2">
                            <button onclick="removeRow(this)"
                                class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Remove</button>
                        </td>
                    </tr>
                    <tr class="even:bg-gray-100">
                        <td class="px-4 py-2">3</td>
                        <td class="px-4 py-2">Logistik</td>
                        <td class="px-4 py-2">-</td>
                        <td class="px-4 py-2">Erfin</td>
                        <td class="px-4 py-2">Memberi arahan, pengawasan, dan validasi teknis</td>
                        <td class="px-4 py-2">
                            <button onclick="removeRow(this)"
                                class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Remove</button>
                        </td>
                    </tr>
                    <tr class="even:bg-gray-100">
                        <td class="px-4 py-2">4</td>
                        <td class="px-4 py-2">SHE</td>
                        <td class="px-4 py-2">-</td>
                        <td class="px-4 py-2">Andita</td>
                        <td class="px-4 py-2">Menerapkan sistem K3L</td>
                        <td class="px-4 py-2">
                            <button onclick="removeRow(this)"
                                class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Remove</button>
                        </td>
                    </tr>
                    <tr class="even:bg-gray-100">
                        <td class="px-4 py-2">5</td>
                        <td class="px-4 py-2">Consultant</td>
                        <td class="px-4 py-2">-</td>
                        <td class="px-4 py-2">Budi</td>
                        <td class="px-4 py-2">Mempersiapkan kelancaran material proyek</td>
                        <td class="px-4 py-2">
                            <button onclick="removeRow(this)"
                                class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Remove</button>
                        </td>
                    </tr>
                </tbody>
            </table>
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
    function removeRow(button) {
        const row = button.closest("tr");
        row.remove();
    }
</script>


<script>
    const addBtn = document.getElementById("addBtn");
    const orgTable = document.getElementById("orgTable").getElementsByTagName("tbody")[0];

    function updateRowNumbers() {
        [...orgTable.rows].forEach((row, index) => {
            row.cells[0].innerText = index + 1;
        });
    }

    // aktifkan remove untuk data default
    function attachRemove() {
        document.querySelectorAll(".removeBtn").forEach(btn => {
            btn.onclick = function() {
                this.closest("tr").remove();
                updateRowNumbers();
            };
        });
    }
    attachRemove();

    // add new row
    addBtn.addEventListener("click", function() {
        const role = document.getElementById("role").value;
        const nippm = document.getElementById("nippm").value || "-";
        const name = document.getElementById("name").value;
        const desc = document.getElementById("desc").value;

        if (!name || !desc) {
            alert("Name dan Job Desc wajib diisi!");
            return;
        }

        const newRow = orgTable.insertRow();
        newRow.innerHTML = `
      <td class="px-4 py-2"></td>
      <td class="px-4 py-2">${role}</td>
      <td class="px-4 py-2">${nippm}</td>
      <td class="px-4 py-2">${name}</td>
      <td class="px-4 py-2">${desc}</td>
      <td class="px-4 py-2"><button class="removeBtn px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">Remove</button></td>
    `;

        attachRemove();
        updateRowNumbers();

        // reset field
        document.getElementById("nippm").value = "";
        document.getElementById("name").value = "";
        document.getElementById("desc").value = "";
    });
</script>


<script>
    document.getElementById("nextBtn").addEventListener("click", function() {
        // ambil data form
        const formData = new FormData(document.getElementById("general-form"));
        console.log("General Data:", Object.fromEntries(formData));

        // contoh redirect ke step berikutnya (Periode)
        window.location.href = "/Form-Async-Finance";
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
