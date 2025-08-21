<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http; // <-- ini yang kurang

class WbsController extends Controller
{
    public function showWbs($project_def)
    {
        $response = Http::get("http://localhost:5014/api/v1/transaction/project/{$project_def}");

        if ($response->successful()) {
            $data = $response->json()['data'];

            return view('wbs.index', compact('data'));
        }

        return view('project-detail', ['data' => []]);
    }
}
