 <table class="overflow-x-auto w-full table-auto text-left text-sm font-sans">
     <thead class="text-center py-2 px-4">
         <tr class="bg-orange-500 text-blue-950 font-bold">
             <th class="">Element</th>
             <th class="px-2 py-2">Progress</th>
             <th class="px-2 py-2">Start</th>
             <th class="px-2 py-2">End</th>
             <th class="">Priority</th>
         </tr>
     </thead>
     <tbody class="text-gray-800">
         @php
             $counters = [];
         @endphp

         @forelse($wbs as $item)
             @php
                 $level = $item['wbs_level'];

                 // Reset deeper level counters
                 for ($i = $level + 1; $i <= 4; $i++) {
                     $counters[$i] = 0;
                 }

                 // Increment current level
                 $counters[$level] = ($counters[$level] ?? 0) + 1;

                 // Build WBS number
                 $wbsNumbers = [];
                 for ($i = 1; $i <= $level; $i++) {
                     $wbsNumbers[] = $counters[$i] ?? 1;
                 }
                 $wbsNumber = implode('.', $wbsNumbers);
             @endphp

             <tr>
                 <td class="px-2 py-1" style="padding-left: {{ ($item['wbs_level'] - 1) * 2.5 }}rem;">
                     {{ $wbsNumber }}.{{ $item['wbs_desc'] }}
                 </td>

                 <td class="px-2
                     py-1 text-center">-</td>

                 @if ($item['wbs_level'] == 1 || !$item['start_date'] || !$item['end_date'])
                     <td class="px-3 py-2 whitespace-nowrap text-center">-</td>
                     <td class="px-3 py-2 whitespace-nowrap text-center">-</td>
                 @else
                     <td class="px-3 py-2 whitespace-nowrap text-center">
                         {{ \Carbon\Carbon::parse($item['start_date'])->translatedFormat('d F Y') }}
                     </td>
                     <td class="px-3 py-2 whitespace-nowrap text-center">
                         {{ \Carbon\Carbon::parse($item['end_date'])->translatedFormat('d F Y') }}
                     </td>
                 @endif

                 <td class="px-2
                     py-1 text-center">-</td> {{-- kolom kelima --}}
             </tr>
         @empty
             <tr>
                 <td colspan="5" class="text-center py-2">Tidak ada data WBS</td>
             </tr>
         @endforelse
     </tbody>
 </table>
