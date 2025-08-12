<?php

if (!function_exists('isProjectCodeOdd')) {
    function isProjectCodeOdd(string $codeProject): bool
    {
        preg_match('/\d+/', $codeProject, $matches);
        $number = isset($matches[0]) ? intval($matches[0]) : 0;
        return $number % 2 === 1;
    }
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
