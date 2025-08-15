<form class="max-w-lg mx-auto p-8 bg-white rounded-2xl shadow-xl space-y-6">
    <h2 class="text-2xl font-bold text-gray-800 text-center">Form Input Data</h2>
    <!-- No (Auto Increment) -->
    <div>
        <label for="no" class="block mb-1 text-sm font-medium text-gray-700">No</label>
        <input type="text" id="no" name="no" value="{{ $nextNumber ?? 1 }}" readonly
            class="bg-gray-100 border border-gray-300 text-gray-700 text-sm rounded-lg block w-full p-2.5 cursor-not-allowed" />
    </div>
    <!-- Type (Label Text Time) -->
    <div>
        <label for="type" class="block mb-1 text-sm font-medium text-gray-700">Type</label>
        <input type="text" id="type" name="type" value="Time" readonly
            class="bg-gray-100 border border-gray-300 text-gray-700 text-sm rounded-lg block w-full p-2.5 cursor-not-allowed" />
    </div>


    <!-- Before -->
    <div>
        <label for="before" class="block mb-1 text-sm font-medium text-gray-700">Before (Tanggal)</label>
        <input type="date" id="before" name="before" required
            class="border border-gray-300 text-gray-700 text-sm rounded-lg block w-full p-2.5 focus:ring-blue-500 focus:border-blue-500" />
    </div>

    <!-- After -->
    <div>
        <label for="after" class="block mb-1 text-sm font-medium text-gray-700">After (Tanggal)</label>
        <input type="date" id="after" name="after" required
            class="border border-gray-300 text-gray-700 text-sm rounded-lg block w-full p-2.5 focus:ring-blue-500 focus:border-blue-500" />
    </div>

    <!-- Status -->
    <div>
        <label for="status" class="block mb-1 text-sm font-medium text-gray-700">Status</label>
        <select id="status" name="status" required
            class="border border-gray-300 text-gray-700 text-sm rounded-lg block w-full p-2.5 focus:ring-blue-500 focus:border-blue-500">
            <option value="approve">Approve</option>
            <option value="pending">Pending</option>
            <option value="verify">Verify</option>
            <option value="open">Open</option>
            <option value="closed">Closed</option>
        </select>
    </div>

    <!-- Description -->
    <div>
        <label for="description" class="block mb-1 text-sm font-medium text-gray-700">Description</label>
        <textarea id="description" name="description" rows="3" placeholder="Tambahkan deskripsi..."
            class="border border-gray-300 text-gray-700 text-sm rounded-lg block w-full p-2.5 focus:ring-blue-500 focus:border-blue-500"></textarea>
    </div>

    <!-- Submit Button -->
    <div class="flex justify-end">
        <button type="submit"
            class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg shadow">
            Submit
        </button>
    </div>
</form>
