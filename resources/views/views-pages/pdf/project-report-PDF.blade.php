<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Laporan Project</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 11px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 4px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h2 style="text-align:center;">Laporan Proyek</h2>
    <p>Tanggal cetak: {{ now()->translatedFormat('d F Y') }}</p>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Code</th>
                <th>Description</th>
                <th>Location</th>
                <th>Unit</th>
                <th>Project Manager</th>
                <th>Project Value</th>
                <th>Project Owner</th>
                <th>Start Date</th>
                <th>Finish Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($projects as $index => $project)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td class="px-3 py-2 whitespace-nowrap">{{ $project['project_def'] }}</td>
                    <td>{{ $project['project_desc'] }}</td>
                    <td>{{ $project['project_location'] }}</td>
                    <td>{{ $project['project_profile']['unit_desc'] ?? '-' }}</td>
                    <td>{{ $project['project_responsible']['name'] ?? '-' }}</td>
                    <td>
                        Rp {{ number_format((int) str_replace(',', '', $project['contract_value']), 0, ',', '.') }}
                    </td>
                    <td>{{ $project['project_owner'] }}</td>
                    <td>{{ \Carbon\Carbon::parse($project['start_date'])->translatedFormat('d F Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($project['end_date'])->translatedFormat('d F Y') }}</td>
                    <td>
                        @php $statusInfo = projectStatus($project['status']); @endphp
                        <span>{{ $statusInfo['label'] }}</span>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="11">Tidak ada data proyek</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>
