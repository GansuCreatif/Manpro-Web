@if ($project)
    <tbody>
        <tr>
            <td class="py-2 px-4">Project Manager</td>
            <td class="py-2 px-4">: {{ $project['project_owner'] ?? '-' }}</td>
        </tr>
        <tr>
            <td class="py-2 px-4">Project Owner</td>
            <td class="py-2 px-4">: {{ $project['project_location'] ?? '-' }}</td>
    </tbody>
@else
    <p class="text-red-500">Data proyek tidak ditemukan.</p>
@endif
