<!-- Container fixed aspect ratio -->
<div class="bg-blue-100 py-3 px-3">
    <!-- map -->
    <div class="bg-white mb-5">
        <p class="z-10 text-right text-blue-900 py-2 px-2 text-2xl font-bold">Project Distribution Maps</p>
        <div class="mx-3 my-3 px-3">
            <div class="relative w-full max-w-5xl mx-auto aspect-[240/89] bg-white">
                <!-- Gambar penuh -->
                <img src="{{ asset('img/peta-indonesia.png') }}" alt="Peta Indonesia"
                    class="absolute inset-0 w-full h-full object-cover">

                <!-- Marker Pulau Sumatera -->

                <!-- Marker Jakarta -->
                <div class="absolute top-[38%] left-[23%] z-10 flex flex-col items-center">
                    <p class="text-amber-400 text-xs font-bold">
                        DAOP 1
                    </p>
                    <p class="text-amber-400 text-xs font-bold">
                        Jakarta
                    </p>
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
    @include('sections.section-footer')
</div>
