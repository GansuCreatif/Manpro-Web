<!-- Container fixed aspect ratio -->
<div class="bg-blue-100 py-3 px-3">
    <!-- map -->
    <div class="bg-white mb-5">
        <p class="z-10 text-right text-blue-900 py-2 px-2 text-2xl font-bold">Project Distribution Maps</p>
        <div class="mx-3 my-3 px-3">
            <div class="relative w-full max-w-5xl mx-auto aspect-[240/89] bg-white">
                <!-- Gambar penuh -->
                <img src="{{ asset('img/peta-indonesia.png') }}" alt="Peta Indonesia"
                    class="absolute inset-0 w-full h-full object-contain">

                <!-- Marker Jakarta -->
                <div class="absolute top-[38%] left-[23%] z-10 flex flex-col items-center">
                    <p class="text-amber-400 text-xs font-bold">DAOP 1</p>
                    <p class="text-amber-400 text-xs font-bold">Jakarta</p>
                    <div class="bg-gray-300 shadow-lg">
                        <div class="bg-white px-2 py-2 rounded shadow-lg border text-center whitespace-nowrap">
                            <span class="text-sm font-semibold text-gray-800">95</span>
                        </div>
                        <p class="text-xs text-blue-700 font-bold">Project</p>
                    </div>
                    <div class="w-0.5 h-8 bg-red-600"></div>
                </div>

                <!-- Marker Bandung -->
                <div class="absolute top-[75%] left-[23%] z-10 flex flex-col items-center">
                    <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                    <div class="w-0.5 h-8 bg-gray-600"></div>
                    <div class="bg-white px-2 py-1 rounded shadow-lg border text-center">
                        <span class="text-sm font-semibold text-gray-800">Bandung</span>
                    </div>
                </div>

                <!-- Marker Surabaya -->
                <div class="absolute top-[60%] left-[34%] z-10 flex flex-col items-center">
                    <div class="bg-white px-2 py-1 rounded shadow-lg border text-center">
                        <span class="text-sm font-semibold text-gray-800">Surabaya</span>
                    </div>
                    <div class="w-0.5 h-8 bg-gray-600"></div>
                    <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Card Devolatiom -->
    <div class="flex flex-col md:flex-row gap-6 w-full">
        <!-- Card Positive -->
        <div class="flex-1 bg-white border border-gray-200 rounded-xl shadow-sm p-4">
            <h3 class="text-center font-semibold text-blue-700 mb-4">
                Top 10 Project (Positive Deviation)
            </h3>

            <!-- Bar positif -->
            <div class="space-y-3">
                <div class="flex items-center">
                    <span class="w-16 text-right text-green-600 font-semibold">96.80%</span>
                    <div class="bg-green-600 h-4  flex items-center px-2 text-white text-sm font-medium">
                        <span class="truncate text-[10px] leading-none">
                            Penggantian kabel jaringan LAA Lintas Manggarai Bogor Wilayah DAOP 1 Jakarta
                        </span>
                    </div>
                </div>
                <div class="flex items-center">
                    <span class="w-16 text-right text-green-600 font-semibold">91.53%</span>
                    <div class="bg-green-600 h-4 flex items-center px-2 text-white text-sm font-medium">
                        <span class="truncate text-[10px] leading-none">
                            Perpanjangan jalur stockpile Empl. Rejosari Wilayah DIVRE IV Tanjung
                            Karang
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Negative -->
        <div class="flex-1 bg-white border border-gray-200 rounded-xl shadow-sm p-4">
            <h3 class="text-center font-semibold text-blue-700 mb-4">
                Top 10 Project (Negative Deviation)
            </h3>

            <!-- Bar negatif -->
            <div class="space-y-3">
                <div class="flex items-center">
                    <div class="bg-red-600 h-4 rounded flex items-center px-2 text-white text-sm font-medium">
                        <label class="truncate text-[10px] leading-none">
                            Perbaikan koneksi outgoing Gardu Traksi Wilayah DAOP 1 Jakarta
                        </label>
                    </div>
                    <span class="w-16 text-left text-red-600 font-semibold">-4.32%</span>
                </div>
                <div class="flex items-center">
                    <div class="bg-red-600 h-4 rounded flex items-center px-2 text-white text-sm font-medium">
                        <span class="truncate text-[10px] leading-none">
                            Pekerjaan pembangunan gedung serbaguna KAI Commuter Stasiun Juanda
                        </span>
                    </div>
                    <span class="w-16 text-left text-red-600 font-semibold">-1.02%</span>
                </div>
            </div>
        </div>
    </div>
</div>
