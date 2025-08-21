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
            <div class="flex items-center">
                <label class="w-40 font-medium text-gray-700">Project Manager :</label>
                <input type="text" value="Danandaru Harumandoyo" disabled
                    class="w-full border rounded-md px-3 py-2 bg-gray-100" />
            </div>

            <div class="flex items-center">
                <label class="w-40 font-medium text-gray-700">Role <span class="text-red-500">*</span> :</label>
                <select id="role" class="w-full border rounded-md px-3 py-2">
                    <option value="Admin">Admin</option>
                    <option value="Site Manager">Site Manager</option>
                    <option value="Logistik">Logistik</option>
                    <option value="SHE">SHE</option>
                    <option value="Consultant">Consultant</option>
                    <option value="Consultant">Qauntity Surveyor</option>
                    <option value="Consultant">Surveyor</option>
                </select>
            </div>

            <div class="flex items-center">
                <label class="w-40 font-medium text-gray-700">NIPPM :</label>
                <input type="text" id="nippm" class="w-full border rounded-md px-3 py-2" />
            </div>

            <div class="flex items-center">
                <label class="w-40 font-medium text-gray-700">Job Desc <span class="text-red-500">*</span> :</label>
                <textarea id="desc" rows="2" class="w-full border rounded-md px-3 py-2"></textarea>
            </div>

            <div class="flex items-center">
                <label class="w-40 font-medium text-gray-700">Name <span class="text-red-500">*</span> :</label>
                <input type="text" id="name" class="w-full border rounded-md px-3 py-2" />
            </div>

            <div class="flex justify-end items-center">
                <button type="button" id="addBtn"
                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Add</button>
            </div>
        </div>
    </form>

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
                        <button
                            class="removeBtn bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Remove</button>
                    </td>
                </tr>
                <tr class="even:bg-gray-100">
                    <td class="px-4 py-2">2</td>
                    <td class="px-4 py-2">Admin</td>
                    <td class="px-4 py-2">-</td>
                    <td class="px-4 py-2">Budi</td>
                    <td class="px-4 py-2">Menyiapkan dan mengelola dokumen proyek</td>
                    <td class="px-4 py-2">
                        <button
                            class="removeBtn bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Remove</button>
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
    const addBtn = document.getElementById("addBtn"); // tombol Add
    const orgTable = document.getElementById("orgTable"); // tbody tabel

    function updateRowNumbers() {
        [...orgTable.rows].forEach((row, index) => {
            row.cells[0].innerText = index + 1;
        });
    }

    function attachRemove() {
        document.querySelectorAll(".removeBtn").forEach(btn => {
            btn.onclick = function() {
                this.closest("tr").remove();
                updateRowNumbers();
            };
        });
    }
    attachRemove();

    addBtn.addEventListener("click", function(e) {
        e.preventDefault();

        const role = document.getElementById("role").value.trim();
        const nippm = document.getElementById("nippm").value.trim() || "-";
        const name = document.getElementById("name").value.trim();
        const desc = document.getElementById("desc").value.trim();

        // validasi wajib isi
        let emptyFields = [];
        if (!role) emptyFields.push("Role");
        if (!nippm) emptyFields.push("NIPPM");
        if (!name) emptyFields.push("Name");
        if (!desc) emptyFields.push("Job Desc");

        if (emptyFields.length > 0) {
            alert("Harap isi field: " + emptyFields.join(", "));
            return;
        }

        // tambahkan row ke tabel
        const newRow = orgTable.insertRow();
        newRow.classList.add("even:bg-gray-100");
        newRow.innerHTML = `
      <td class="px-4 py-2"></td>
      <td class="px-4 py-2">${role}</td>
      <td class="px-4 py-2">${nippm}</td>
      <td class="px-4 py-2">${name}</td>
      <td class="px-4 py-2">${desc}</td>
      <td class="px-4 py-2">
        <button class="removeBtn bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Remove</button>
      </td>
    `;

        attachRemove();
        updateRowNumbers();

        // reset input setelah ditambahkan
        document.getElementById("nippm").value = "";
        document.getElementById("name").value = "";
        document.getElementById("desc").value = "";
    });
</script>




<script>
    document.getElementById("nextBtn").addEventListener("click", function() {
        const orgTable = document.getElementById("orgTable");
        const rowCount = orgTable.getElementsByTagName("tr").length;

        // cek apakah ada data di tabel
        if (rowCount === 0) {
            alert("Harap tambahkan data terlebih dahulu sebelum lanjut!");
            return;
        }

        // contoh: ambil semua data tabel
        let tableData = [];
        [...orgTable.rows].forEach(row => {
            tableData.push({
                role: row.cells[1].innerText,
                nippm: row.cells[2].innerText,
                name: row.cells[3].innerText,
                desc: row.cells[4].innerText,
            });
        });

        console.log("Table Data:", tableData);

        // redirect
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
