<form method="POST" action="#" class="space-y-6">
    @csrf

    {{-- Before Cost (Uang) --}}
    <div>
        <label for="before" class="block text-sm font-medium text-gray-700">Before (Rp)</label>
        <input type="text" name="before" id="before" inputmode="numeric" pattern="\d*"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
            placeholder="Rp 0" required>
    </div>

    {{-- After Cost (Uang) --}}
    <div>
        <label for="after" class="block text-sm font-medium text-gray-700">After (Rp)</label>
        <input type="text" name="after" id="after" inputmode="numeric" pattern="\d*"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
            placeholder="Rp 0" required>
    </div>

    {{-- Status Dropdown --}}
    <div>
        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
        <select name="status" id="status"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
            required>
            <option value="approve">Approve</option>
            <option value="pending">Pending</option>
            <option value="not_approve">Not Approve</option>
        </select>
    </div>

    {{-- Description --}}
    <div>
        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
        <textarea name="description" id="description" rows="4"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
            required></textarea>
    </div>

    {{-- Submit Button --}}
    <div class="pt-4">
        <button type="submit"
            class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Submit
        </button>
    </div>
</form>
