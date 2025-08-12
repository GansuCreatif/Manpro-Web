<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ApiBridgeController;
use App\Http\Controllers\ProjectController; 


use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.custom');

Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');

Route::get('/data-project', [ApiBridgeController::class, 'getProjects']);
Route::get('/', function () {
    return view('dashboard');
})->name('Dashboard');

Route::get('/project-list', [ProjectController::class, 'list'])->name('Project-List');

Route::get('/Project-Details', function () {
    // Panggil API .NET
    $response = Http::get('http://localhost:5014/api/v1/transaction/project/all');

    // Ambil data dari API
    $data = $response->successful() ? $response->json()['data'] : [];

    // Kirim ke view
    return view('detail', ['projects' => $data]);
})->name('Project-Details');
Route::get('/project-issue', [ProjectController::class, 'issue'])->name('Project-Issue');


Route::get('/login', function () {
    return view('login');
})->name('login');


Route::get('/Keuangan', function () {
    return view('keuangan');
})->name('Keuangan');

Route::get('/Welcome', function () {
    return view('welcome');
})->name('Welcome');

Route::get('/search-projects', function (\Illuminate\Http\Request $request) {
    $keyword = strtolower($request->query('q', ''));

    // Ambil data dari API .NET
    $response = Http::get('http://localhost:5014/api/v1/transaction/project/all');

    if (!$response->successful()) {
        return response()->json([]);
    }

    $projects = $response->json()['data'];

    // Filter semua kolom
    $filtered = array_filter($projects, function ($project) use ($keyword) {
        foreach ($project as $value) {
            if (is_scalar($value) && stripos((string)$value, $keyword) !== false) {
                return true; // kalau cocok di kolom manapun
            }
        }
        return false;
    });

    return response()->json(array_values($filtered));
});

