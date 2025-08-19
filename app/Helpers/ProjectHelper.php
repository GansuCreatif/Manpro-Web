<?php


if (!function_exists('isProjectCodeOdd')) {
    function isProjectCodeOdd(string $codeProject): bool
    {
        // Ambil semua angka dalam kode proyek
        preg_match_all('/\d+/', $codeProject, $matches);

        // Ambil angka terakhir (misalnya "001" dari "PRJ-2024-001")
        $lastNumber = isset($matches[0]) ? intval(end($matches[0])) : 0;

        return $lastNumber % 2 === 1;
    }

}

if (!function_exists('projectStatus')) {
    function projectStatus(string $status): array {
        $map = [
            'Fast' => [
                'label' => 'Fast', 
                'text' => 'text-sky-400',        // Biru muda
                'bg' => 'bg-sky-100',            // Background biru muda
                'border' => 'border-sky-300'     // Border biru muda
            ],
            'Normal' => [
                'label' => 'On Time', 
                'text' => 'text-green-600',      // Hijau
                'bg' => 'bg-green-100',          // Background hijau
                'border' => 'border-green-300'   // Border hijau
            ],
            'TooLate' => [
                'label' => 'Too Late', 
                'text' => 'text-orange-500',     // Orange
                'bg' => 'bg-orange-100',         // Background orange
                'border' => 'border-orange-300'  // Border orange
            ],
            'Critical' => [
                'label' => 'Critical', 
                'text' => 'text-red-600',        // Merah
                'bg' => 'bg-red-100',            // Background merah
                'border' => 'border-red-300'     // Border merah
            ],
        ];
        
        return $map[$status] ?? [
            'label' => 'Unknown', 
            'text' => 'text-gray-600',
            'bg' => 'bg-gray-100',
            'border' => 'border-gray-300'
        ];
    }
}