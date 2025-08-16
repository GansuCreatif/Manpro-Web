@php
    // Ambil angka dari code_project, misal 'PRJ-003' -> 3
    preg_match('/\d+/', $project['code_project'], $matches);
    $number = isset($matches[0]) ? intval($matches[0]) : 0;
    $isOdd = $number % 2 === 1;

    // Mapping status ke class warna text
    $statusColors = [
        'normal' => 'text-green-600',
        'fast' => 'text-blue-600',
        'toolate' => 'text-orange-600',
        'critical' => 'text-red-600',
    ];

    // Ambil kode status project, contoh: $project['status']
    $projectStatus = strtolower($project['status'] ?? 'normal'); // lowercase biar matching

    // Cari class warna, default hijau kalau gak ada
    $statusClass = $statusColors[$projectStatus] ?? 'text-green-600';
@endphp

<tr class="{{ $index % 2 == 0 ? 'bg-white' : 'bg-white ?>' }}">
    <td class="px-2 py-3">{{ $index + 1 }}</td>
    <td class="px-2 py-3 whitespace-nowrap">{{ e($project['code_project']) }}</td>
    <td class="px-2 py-3">{{ e($project['desc_project']) }}</td>
    <td class="px-2 py-3">{{ e($project['location'] ?? 'Palembang') }}</td>
    <td class="px-2 py-3">{{ e($project['unit_projects']['unit_desc'] ?? '-') }}</td>
    <td class="px-2 py-3 whitespace-nowrap">{{ e($project['project_manager']['name'] ?? '-') }}
    </td>
    <td class="px-2 py-3 whitespace-nowrap">
        Rp {{ number_format($project['contract_value'] ?? 0, 0, ',', '.') }}
    </td>
    <td class="px-2 py-3">PCC</td>
    <td class="px-2 py-3 whitespace-nowrap">
        {{ \Carbon\Carbon::parse($project['start_date'])->translatedFormat('j F Y') }}
    </td>
    <td class="px-2 py-3 whitespace-nowrap">
        {{ \Carbon\Carbon::parse($project['finish_date'] ?? $project['start_date'])->translatedFormat('j F Y') }}
    </td>
    <td class="px-2 py-3 whitespace-nowrap {{ $statusClass }}">
        {{ ucfirst($projectStatus) }}
    </td>
    <td class="px-2 py-3 flex justify-center gap-2">
        <a href="{{ route('Project-Details') }}" class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
            Details
        </a>
    </td>
</tr>
