@if ($project)
    <table class="w-full text-sm text-left text-black-500">
        <tbody>
            <tr>
                <td class="py-2">Fiscal Year</td>
                <td>: {{ \Carbon\Carbon::parse($project['fiscal_year'])->format('Y') }}
                </td>
            </tr>
            <tr>
                <td class="py-2">Date Contract</td>
                <td>: {{ \Carbon\Carbon::parse($project['start_date_spmk'])->format('d F Y') }}</td>
            </tr>
            <tr>
                <td class="py-2">Start Date</td>
                <td>: {{ \Carbon\Carbon::parse($project['start_date'])->format('d F Y') }}</td>
            </tr>
            <tr>
                <td class="py-2">Date SPMK</td>
                <td>: {{ \Carbon\Carbon::parse($project['start_date_spmk'])->format('d F Y') }}</td>
            </tr>
            <tr>
                <td class="py-2">Finish Date</td>
                <td>: {{ \Carbon\Carbon::parse($project['end_date'])->format('d F Y') }}</td>
            </tr>
            <tr>
                <td class="py-2">Actual Start Date</td>
                <td class="pr-40">: 15 Jun 2025</td>
            </tr>
            <tr>
                <td class="py-2">Total Days</td>
                <td>: 250 Days</td>
            </tr>
            <tr>
                <td class="py-2">Reason</td>
                <td>: Contract</td>
            </tr>
        </tbody>
    </table>
@else
    <p class="text-red-500">Data proyek tidak ditemukan.</p>
@endif
