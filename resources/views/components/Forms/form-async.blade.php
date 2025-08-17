<div class="bg-gradient-to-br from-purple-500 via-pink-500 to-blue-500 min-h-screen py-10 px-4">
    <!-- Full width container, tanpa mx-auto -->
    <div class="w-full bg-white/30 backdrop-blur-md rounded-2xl shadow-xl p-6 border border-white/20">

        <h2 class="text-2xl font-bold text-white mb-6">📁 Unit PMO</h2>

        <form action="/upload" method="POST" enctype="multipart/form-data" class="space-y-6">
            <!-- Accordion Group -->
            <div id="accordion-file-upload" data-accordion="collapse" class="space-y-4">

                <!-- Accordion berkas SIUP -->
                <div class="rounded-xl overflow-hidden border border-white/30">
                    <h2>
                        <button type="button"
                            class="flex items-center justify-between w-full px-5 py-4 text-white font-semibold bg-white/10 hover:bg-white/20 transition-all"
                            data-accordion-target="#body-1" aria-expanded="false" aria-controls="body-1">
                            <span>📄 Upload SIUP</span>
                            <svg data-accordion-icon class="w-6 h-6 transition-transform duration-300" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </h2>
                    <div id="body-1" class="hidden px-5 py-4 bg-white/20">
                        <label for="file-1"
                            class="flex flex-col items-center justify-center w-full h-40 border-2 border-dashed border-white/50 rounded-xl cursor-pointer hover:border-white transition-all">
                            <div class="text-center text-white">
                                <p class="font-semibold">Klik atau drag file ke sini</p>
                                <p class="text-sm text-white/70">PNG, JPG maks. 5MB</p>
                            </div>
                            <input id="file-1" type="file" name="foto_profil" class="hidden" />
                        </label>
                    </div>
                </div>

                <!-- Upload berkas BPK -->
                <div class="rounded-xl overflow-hidden border border-white/30">
                    <h2>
                        <button type="button"
                            class="flex items-center justify-between w-full px-5 py-4 text-white font-semibold bg-white/10 hover:bg-white/20 transition-all"
                            data-accordion-target="#body-2" aria-expanded="false" aria-controls="body-2">
                            <span>📄 Upload BPK</span>
                            <svg data-accordion-icon class="w-6 h-6 transition-transform duration-300" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </h2>
                    <div id="body-2" class="hidden px-5 py-4 bg-white/20">
                        <label for="file-2"
                            class="flex flex-col items-center justify-center w-full h-40 border-2 border-dashed border-white/50 rounded-xl cursor-pointer hover:border-white transition-all">
                            <div class="text-center text-white">
                                <p class="font-semibold">Klik atau drag file ke sini</p>
                                <p class="text-sm text-white/70">PNG, JPG maks. 5MB</p>
                            </div>
                            <input id="file-2" type="file" name="foto_profil" class="hidden" />
                        </label>
                    </div>
                </div>

                <!-- Accordion Finance -->
                <div class="rounded-xl overflow-hidden border border-white/30">
                    <h2>
                        <button type="button"
                            class="flex items-center justify-between w-full px-5 py-4 text-white font-semibold bg-white/10 hover:bg-white/20 transition-all"
                            data-accordion-target="#body-finance" aria-expanded="false" aria-controls="body-finance">
                            <span>💰 Informasi Finance</span>
                            <svg data-accordion-icon class="w-6 h-6 transition-transform duration-300" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </h2>
                    <div id="body-finance" class="hidden px-5 py-4 bg-white/20 space-y-4 text-white">
                        <div>
                            <label class="block font-semibold mb-1">Payment Type</label>
                            <select name="payment_type"
                                class="w-full rounded-lg bg-white/10 text-white p-2 border border-white/30">
                                <option value="transfer">Transfer Bank</option>
                                <option value="cash">Cash</option>
                                <option value="e-wallet">E-Wallet</option>
                            </select>
                        </div>
                        <div>
                            <label class="block font-semibold mb-1">PPN (%)</label>
                            <input type="number" name="ppn"
                                class="w-full rounded-lg bg-white/10 text-white p-2 border border-white/30"
                                placeholder="Contoh: 11">
                        </div>
                        <div>
                            <label class="block font-semibold mb-1">Atas Nama</label>
                            <input type="text" name="atas_nama"
                                class="w-full rounded-lg bg-white/10 text-white p-2 border border-white/30"
                                placeholder="Nama Pemilik Rekening">
                        </div>
                        <div>
                            <label class="block font-semibold mb-1">Virtual Account</label>
                            <input type="text" name="virtual_account"
                                class="w-full rounded-lg bg-white/10 text-white p-2 border border-white/30"
                                placeholder="Nomor VA">
                        </div>
                    </div>
                </div>

                <!-- Accordion Struktur Organisasi -->
                <div class="rounded-xl overflow-hidden border border-white/30">
                    <h2>
                        <button type="button"
                            class="flex items-center justify-between w-full px-5 py-4 text-white font-semibold bg-white/10 hover:bg-white/20 transition-all"
                            data-accordion-target="#body-org" aria-expanded="false" aria-controls="body-org">
                            <span>🏗️ Struktur Organisasi</span>
                            <svg data-accordion-icon class="w-6 h-6 transition-transform duration-300" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </h2>
                    <div id="body-org" class="hidden px-5 py-4 bg-white/20 space-y-4 text-white">
                        <div>
                            <label class="block font-semibold mb-1">Project Manager</label>
                            <input type="text" name="project_manager"
                                class="w-full rounded-lg bg-white/10 text-white p-2 border border-white/30"
                                placeholder="Nama PM">
                        </div>
                        <div>
                            <label class="block font-semibold mb-1">Project</label>
                            <input type="text" name="project"
                                class="w-full rounded-lg bg-white/10 text-white p-2 border border-white/30"
                                placeholder="Nama Proyek">
                        </div>

                        <!-- Form Table Struktur -->
                        <div class="overflow-x-auto">
                            <table class="w-full text-white border border-white/30 rounded-lg">
                                <thead class="bg-white/10 text-left">
                                    <tr>
                                        <th class="px-4 py-2">No</th>
                                        <th class="px-4 py-2">Type</th>
                                        <th class="px-4 py-2">Name</th>
                                        <th class="px-4 py-2">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white/5">
                                        <td class="px-4 py-2">1</td>
                                        <td class="px-4 py-2"><input type="text" name="type[]"
                                                class="w-full bg-white/10 p-1 rounded text-white border border-white/30">
                                        </td>
                                        <td class="px-4 py-2"><input type="text" name="name[]"
                                                class="w-full bg-white/10 p-1 rounded text-white border border-white/30">
                                        </td>
                                        <td class="px-4 py-2">
                                            <input type="text" name="description[]"
                                                class="w-full bg-white/10 p-1 rounded text-white border border-white/30">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Submit -->
                <div class="pt-4">
                    <button type="submit"
                        class="w-full px-4 py-3 font-bold text-white bg-gradient-to-r from-white-500 to-blue-500 rounded-xl shadow-lg hover:opacity-90 focus:ring-4 focus:ring-pink-300 transition-all">
                        🚀 Submit Semua
                    </button>
                </div>
        </form>
    </div>
</div>
</div>
