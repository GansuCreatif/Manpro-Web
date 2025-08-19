<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ApiBridgeController;
use App\Http\Controllers\ProjectController; 


use App\Http\Controllers\AuthController;

Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.custom');

Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');

Route::get('/data-project', [ApiBridgeController::class, 'getProjects']);
Route::get('/', function () {
    return view('dashboard');
})->name('Dashboard');

Route::get('/project-list', [ProjectController::class, 'list'])->name('Project-List');

Route::get('/project-detail/{code?}', [ProjectController::class, 'detail'])->name('Project-Details');
Route::get('/project-list-detail/{code}', [ProjectController::class, 'detail2'])
    ->name('Project-List-Detail');
Route::get('/project-issue', [ProjectController::class, 'issue'])->name('Project-Issue');
Route::get('/project-list-histori', [ProjectController::class, 'histori'])->name('Project-Histori');
Route::get('/adendum', [ProjectController::class, 'detailAdendum'])->name('Adendum');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/Form-Cost', function () {
    return view('form-cost');
})->name('Form-Cost');

Route::get('/Form-Time', function () {
    return view('form-time');
})->name('Form-Time');

/* Khusus Sync SAP */
Route::get('/Form-Async', function () {
    return view('fomr-async');
})->name('Form-Async');
Route::get('/Form-Async-Period', function () {
    return view('fomr-async-periode');
})->name('Form-Async-Period');
Route::get('/Form-Async-Organization', function () {
    return view('fomr-async-organization');
})->name('Form-Async-Organization');
Route::get('/Form-Async-Finance', function () {
    return view('fomr-async-finance');
})->name('Form-Async-Finance');
Route::get('/Form-Async-Report', function () {
    return view('fomr-async-report');
})->name('Form-Async-Report');
/* Khusus Sync SAP */
Route::get('/project-cashin-detail-awal', [ProjectController::class, 'cashIn1'])
    ->name('project-cashin-detail-awal');

Route::get('/project-cashout-detail-awal', [ProjectController::class, 'cashOut1'])
    ->name('project-cashout-detail-awal');

Route::get('/project-data-sync', [ProjectController::class, 'syncList'])
    ->name('project.data.sync');

Route::get('/project-report', [ProjectController::class, 'projectReport'])
    ->name('project.report'); 

Route::get('/project-finance-cashin-detail', [ProjectController::class, 'detail3'])->name('Project-Finance-Cashin-Detail');
Route::get('/project-finance-cashin', [ProjectController::class, 'cashIn'])
    ->name('project.finance.cashin');
Route::get('/project-finance-cashout', [ProjectController::class, 'cashOut'])
    ->name('project-finance-cashout');

Route::get('/project-list-detail', [ProjectController::class, 'detail2'])->name('Project-List-Detail');

Route::get('/project-list-active', [ProjectController::class, 'activeList'])
    ->name('Project-List-Active');

Route::get('/Project-Issue', function () {
    return view('project-issue');
})->name('Project-Issue');

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

