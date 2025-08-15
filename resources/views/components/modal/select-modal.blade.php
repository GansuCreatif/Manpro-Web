@props([
    'id' => 'select-modal', // id modal
    'costUrl' => '/Form-Cost', // URL Cost
    'timeUrl' => '/Form-Time', // URL Time
])

<div id="{{ $id }}" tabindex="-1" aria-hidden="true"
    class="hidden fixed inset-0 z-50 flex justify-center items-center w-full p-4 overflow-x-hidden overflow-y-auto">
    <div class="relative w-full max-w-sm">
        <div class="relative bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Pilih Jenis</h3>

            <!-- Pilihan -->
            <div class="space-y-3">
                <label class="flex items-center p-3 border rounded cursor-pointer hover:bg-gray-100">
                    <input type="radio" name="type" value="cost" class="w-4 h-4 text-blue-600">
                    <span class="ml-2">Cost</span>
                </label>
                <label class="flex items-center p-3 border rounded cursor-pointer hover:bg-gray-100">
                    <input type="radio" name="type" value="time" class="w-4 h-4 text-blue-600">
                    <span class="ml-2">Time</span>
                </label>
            </div>

            <!-- Tombol Next -->
            <button id="{{ $id }}-next"
                class="mt-5 w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                Next Step
            </button>
        </div>
    </div>
</div>

<script>
    document.getElementById('{{ $id }}-next').addEventListener('click', function() {
        let selected = document.querySelector(`#{{ $id }} input[name="type"]:checked`);
        if (!selected) {
            alert("Pilih Cost atau Time terlebih dahulu.");
            return;
        }
        if (selected.value === "cost") {
            window.location.href = "{{ $costUrl }}";
        } else {
            window.location.href = "{{ $timeUrl }}";
        }
    });
</script>
