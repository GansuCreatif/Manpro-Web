@if ($project)
    <table class="w-full text-sm text-left rtl:text-right text-black-500 bg-blue">
        <tbody>
            <tr>
                <td class="py-2 px-4">Project Code</td>
                <td class="py-2 px-4">: {{ $project['code_project'] ?? '-' }}</td>
            </tr>
            <tr>
                <td class="py-2 px-4">Description</td>
                <td class="py-2 px-4">: {{ $project['desc_project'] ?? '-' }}</td>
            </tr>
            <tr>
                <td class="py-2 px-4">Unit</td>
                <td class="py-2 px-4">: {{ data_get($project, 'unit_projects.unit_desc', '-') }}</td>
            </tr>
            <tr>
                <td class="py-2 px-4">Location</td>
                <td class="py-2 px-4">: {{ $project['location'] ?? '-' }}</td>
            </tr>
            <tr>
                <td class="py-2 px-4">No. SPMK</td>
                <td class="py-2 px-4">: {{ $project['no_spmk'] ?? '-' }}</td>
            </tr>
            <tr>
                <td class="py-2 px-4">No. Contract</td>
                <td class="py-2 px-4">: {{ $project['no_contract'] ?? '-' }}</td>
            </tr>
        </tbody>
    </table>
@else
    <p class="text-red-500">Data proyek tidak ditemukan.</p>
@endif
