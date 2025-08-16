<x-project-list.table-header />

<div class="rounded-xl">
    <div class="w-auto overflow-x-auto">
        <table class="min-w-full text-xs text-left text-gray-500 ">
            <thead class="text-xs text-blue-900 uppercase bg-blue-300 text-center">
                <tr class="border-b-5">
                    <th>No</th>
                    <th>Code</th>
                    <th>Description</th>
                    <th>Location</th>
                    <th>Unit</th>
                    <th class="whitespace-nowrap">Project Manager</th>
                    <th>Project Value</th>
                    <th>User</th>
                    <th>Start Date</th>
                    <th>Finish Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="projectTable">
                @forelse ($projects as $index => $project)
                    <x-project-list.project-row :project="$project" :index="$index" />
                @empty
                    <tr>
                        <td colspan="12" class="px-2 py-3 text-center text-gray-500">Tidak ada data.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
