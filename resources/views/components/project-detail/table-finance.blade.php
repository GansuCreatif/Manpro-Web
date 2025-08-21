@if ($project)
    <table class="w-full text-sm text-left text-black-500">
        <tbody>
            <tr>
                <td class="py-2 px-4 whitespace-nowrap">Paymen Type</td>
                <td class="py-2 px-4 whitespace-nowrap">
                    : {{ $project['payment_method'] ?? '-' }}
                </td>
                <td class="py-2 px-4">Bank</td>
                <td class="py-2 px-4">: {{ $project['bank'] ?? '-' }}</td>
            </tr>
            <tr>
                <td class="py-2 px-4">PPN</td>
                <td class="py-2 px-4">: {{ $project['pph'] ?? '-' }}%</td>
            </tr>
        </tbody>
    </table>
@else
    <p class="text-red-500">Data proyek tidak ditemukan.</p>
@endif
