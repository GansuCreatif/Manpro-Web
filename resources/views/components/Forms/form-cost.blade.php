<form class="max-w-lg mx-auto p-8 bg-white rounded-2xl shadow-xl space-y-6">
    <!-- Title -->
    <h2 class="text-2xl font-bold text-gray-800 text-center">Form Input Data</h2>

    <!-- No -->
    <div>
        <label for="no" class="block mb-2 text-sm font-semibold text-gray-700">No</label>
        <input type="number" id="no" name="no" value="1" readonly
            class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500" />
    </div>

    <!-- Type -->
    <div>
        <label for="type" class="block mb-2 text-sm font-semibold text-gray-700">Type</label>
        <input type="text" id="type" name="type" value="Cost" readonly
            class="border border-gray-300 bg-gray-100 text-gray-900 text-sm rounded-lg block w-full p-3 focus:ring-0 focus:border-gray-300 cursor-not-allowed" />
    </div>

    <!-- Before -->
    <div>
        <label for="before" class="block mb-2 text-sm font-semibold text-gray-700">Before</label>
        <div class="flex">
            <span
                class="inline-flex items-center px-4 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-lg">Rp.</span>
            <input type="number" id="before" name="before" placeholder="0"
                class="rounded-none rounded-r-lg border border-gray-300 text-gray-900 block flex-1 min-w-0 w-full text-sm p-3 focus:ring-2 focus:ring-green-500 focus:border-green-500" />
        </div>
    </div>

    <!-- After -->
    <div>
        <label for="after" class="block mb-2 text-sm font-semibold text-gray-700">After</label>
        <div class="flex">
            <span
                class="inline-flex items-center px-4 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-lg">Rp.</span>
            <input type="number" id="after" name="after" placeholder="0"
                class="rounded-none rounded-r-lg border border-gray-300 text-gray-900 block flex-1 min-w-0 w-full text-sm p-3 focus:ring-2 focus:ring-green-500 focus:border-green-500" />
        </div>
    </div>

    <!-- Status -->
    <div>
        <label for="status" class="block mb-2 text-sm font-semibold text-gray-700">Status</label>
        <select id="status" name="status"
            class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-3 focus:ring-2 focus:ring-purple-500 focus:border-purple-500">
            <option value="approve">✅ Approve</option>
            <option value="pending">⏳ Pending</option>
            <option value="verify">🔍 Verify</option>
            <option value="open">📂 Open</option>
            <option value="closed">🚫 Closed</option>
        </select>
    </div>

    <!-- Description -->
    <div>
        <label for="description" class="block mb-2 text-sm font-semibold text-gray-700">Description</label>
        <textarea id="description" name="description" rows="4" placeholder="Tulis deskripsi..."
            class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-3 focus:ring-2 focus:ring-orange-500 focus:border-orange-500"></textarea>
    </div>

    <!-- Submit Button -->
    <button type="submit"
        class="w-full text-white font-semibold rounded-lg text-sm px-5 py-3 text-center shadow-lg bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:from-blue-600 hover:via-blue-700 hover:to-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
        🚀 Submit
    </button>
</form>
