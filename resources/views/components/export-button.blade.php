@props([
    'color' => 'blue', // warna tombol default
    'title' => 'Export', // tooltip
    'icon' => '', // SVG icon
    'href' => '#', // link atau aksi
])

<a href="{{ $href }}"
    class="p-2 bg-{{ $color }}-500 hover:bg-{{ $color }}-600 text-white rounded-lg shadow focus:outline-none focus:ring-2 focus:ring-{{ $color }}-400"
    title="{{ $title }}">
    {!! $icon !!}
</a>
