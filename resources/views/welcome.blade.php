<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ManPro</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50">

    <!-- Navbar -->
    @include('sections.section-navbar')

    <!-- Sidebar -->
    @include('sections.section-sidebar')

    <!-- Main layout -->
    <div class="flex pt-16 min-h-screen bg-blue-50">
        <div id="main-wrapper" class="flex-1 flex flex-col transition-all duration-300 ml-64">

            <main id="main-content" class="flex-1 p-6">
                @include('sections.section-content')
                <!-- Footer -->
                @include('sections.section-footer')
                <!-- Tombol buka modal 1 -->
                <button id="openSelectModal"
                    class="block text-white bg-blue-700 hover:bg-blue-800 rounded-lg px-5 py-2.5">
                    Pilih Posisi
                </button>


                <!-- Modal 1: Pilihan posisi -->
                <div id="select-modal" tabindex="-1" aria-hidden="true"
                    class="hidden fixed inset-0 z-50 justify-center items-center w-full p-4 overflow-y-auto">
                    <div class="relative w-full max-w-md">
                        <div class="relative bg-white rounded-lg shadow">
                            <div class="flex items-center justify-between p-4 border-b">
                                <h3 class="text-lg font-semibold">Open positions</h3>
                                <button data-modal-toggle="select-modal"
                                    class="text-gray-400 hover:bg-gray-200 rounded-lg p-1.5">✕</button>
                            </div>
                            <div class="p-4">
                                <ul class="space-y-4 mb-4">
                                    <li>
                                        <input type="radio" id="job-1" name="job" value="UI/UX Engineer"
                                            class="hidden peer" />
                                        <label for="job-1"
                                            class="block p-4 border rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600">
                                            UI/UX Engineer - Flowbite
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="job-2" name="job" value="React Developer"
                                            class="hidden peer" />
                                        <label for="job-2"
                                            class="block p-4 border rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600">
                                            React Developer - Alphabet
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="job-3" name="job" value="Full Stack Engineer"
                                            class="hidden peer" />
                                        <label for="job-3"
                                            class="block p-4 border rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600">
                                            Full Stack Engineer - Apple
                                        </label>
                                    </li>
                                </ul>
                                <button id="nextStepBtn"
                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 rounded-lg px-5 py-2.5">
                                    Next step
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal 2: Form -->
                <div id="form-modal" tabindex="-1" aria-hidden="true"
                    class="hidden fixed inset-0 z-50 justify-center items-center w-full p-4 overflow-y-auto">
                    <div class="relative w-full max-w-md">
                        <div class="relative bg-white rounded-lg shadow">
                            <div class="flex items-center justify-between p-4 border-b">
                                <h3 class="text-lg font-semibold">Form Data Pelamar</h3>
                                <button id="closeFormBtn"
                                    class="text-gray-400 hover:bg-gray-200 rounded-lg p-1.5">✕</button>
                            </div>
                            <div class="p-4">
                                <form id="applyForm">
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium mb-1">Nama Lengkap</label>
                                        <input type="text" name="name"
                                            class="w-full border rounded-lg px-3 py-2" />
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium mb-1">Email</label>
                                        <input type="email" name="email"
                                            class="w-full border rounded-lg px-3 py-2" />
                                    </div>
                                    <div class="flex justify-end gap-2">
                                        <button type="button" id="cancelFormBtn"
                                            class="px-4 py-2 border rounded-lg">Batal</button>
                                        <button type="submit"
                                            class="px-4 py-2 bg-blue-700 text-white rounded-lg">Kirim</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    const nextStepBtn = document.getElementById('nextStepBtn');
                    const selectModal = document.getElementById('select-modal');
                    const formModal = document.getElementById('form-modal');
                    const applyForm = document.getElementById('applyForm');
                    const closeFormBtn = document.getElementById('closeFormBtn');
                    const cancelFormBtn = document.getElementById('cancelFormBtn');
                    const openSelectModalBtn = document.getElementById('openSelectModal');

                    openSelectModalBtn.addEventListener('click', () => {
                        openModal(selectModal);
                    });


                    function openModal(modal) {
                        modal.classList.remove('hidden');
                        modal.classList.add('flex');
                    }

                    function closeModal(modal) {
                        modal.classList.add('hidden');
                        modal.classList.remove('flex');
                    }

                    function closeAllModals() {
                        document.querySelectorAll('#select-modal, #form-modal').forEach(m => {
                            m.classList.add('hidden');
                            m.classList.remove('flex');
                        });

                        // Hapus overlay dari Flowbite jika ada
                        document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());
                        document.querySelectorAll('.fixed.inset-0.bg-gray-900\\/50, .fixed.inset-0.bg-black\\/50').forEach(el => el
                            .remove());

                        document.body.classList.remove('overflow-hidden'); // aktifkan scroll lagi
                    }



                    nextStepBtn.addEventListener('click', () => {
                        const selectedJob = document.querySelector('input[name="job"]:checked');
                        if (selectedJob) {
                            closeModal(selectModal);
                            openModal(formModal);
                        } else {
                            alert("Pilih posisi terlebih dahulu!");
                        }
                    });

                    function isFormEmpty() {
                        const name = applyForm.querySelector('input[name="name"]').value.trim();
                        const email = applyForm.querySelector('input[name="email"]').value.trim();
                        return name === "" && email === "";
                    }

                    [closeFormBtn, cancelFormBtn].forEach(btn => {
                        btn.addEventListener('click', () => {
                            closeAllModals(); // tutup semua modal, hilangkan overlay
                        });
                    });


                    applyForm.addEventListener('submit', (e) => {
                        e.preventDefault();
                        alert("Form berhasil dikirim!");
                        closeAllModals();
                    });
                </script>


            </main>
        </div>
    </div>
</body>

</html>
