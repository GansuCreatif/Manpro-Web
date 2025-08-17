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


if (!function_exists('projectStatus')) {
    function projectStatus(string $status): array
    {
        $map = [
            'Fast' => ['label' => 'Fast', 'text' => 'text-blue-600'],
            'Normal' => ['label' => 'On Time', 'text' => 'text-green-600'],
            'TooLate' => ['label' => 'Too Late', 'text' => 'text-yellow-600'],
            'Critical' => ['label' => 'Critical', 'text' => 'text-red-600'],
        ];
        return $map[$status] ?? ['label' => 'Unknown', 'text' => 'text-gray-600'];
    }
}
}