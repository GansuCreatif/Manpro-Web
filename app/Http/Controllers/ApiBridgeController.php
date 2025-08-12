<?php

// app/Http/Controllers/ApiBridgeController.php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ApiBridgeController extends Controller
{
    public function getProjects()
    {
        $response = Http::get('http://localhost:5000/api/v1/project/all');

        if ($response->successful()) {
            return $response->json();
        }

        return response()->json(['error' => 'Gagal ambil data'], 500);
    }
}

