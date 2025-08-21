<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Project;


class ProjectController extends Controller
{
    private function getAllProjects()
{
    $response = Http::get('http://localhost:5014/api/v1/transaction/project/all');

    if ($response->successful()) {
        $data = $response->json()['data'] ?? [];

        return collect($data); // harusnya collection of array
    }

    return collect(); //Return empty collection
}

    private function paginate($items, $perPage = 5, $page = null, $options = [])
{
    $page = $page ?: (LengthAwarePaginator::resolveCurrentPage() ?: 1);
    $items = $items instanceof Collection ? $items : Collection::make($items);
    $currentPageItems = $items->slice(($page - 1) * $perPage, $perPage)->values();

    return new LengthAwarePaginator(
        $currentPageItems,
        $items->count(),
        $perPage,
        $page,
        [
            'path' => request()->url(),
            'query' => request()->query(),
        ]
    );
}


    public function list(Request $request)
{
    $perPage = $request->get('perPage', 5);
    $page = $request->get('page', 1);
    $keyword = $request->get('search', ''); // jika ada search
    
    // Call API dengan parameter yang benar
    $response = Http::get('http://localhost:5014/api/v1/transaction/project/all', [
        'PageNumber' => $page,
        'PageSize' => $perPage,
        'Keyword' => $keyword // optional
    ]);
    
    if ($response->successful()) {
        $apiData = $response->json();
        $projectData = collect($apiData['data']); // Ganti nama ini
        
        // Karena API tidak return total, kita perlu estimasi
        // Jika data yang dikembalikan < PageSize, berarti ini halaman terakhir
        $isLastPage = count($projectData) < $perPage;
        
        // Estimasi total (tidak akurat, tapi cukup untuk pagination)
        $estimatedTotal = $isLastPage 
            ? (($page - 1) * $perPage) + count($projectData)
            : $page * $perPage + 1; // +1 agar ada halaman next
        
        // Buat pagination object dengan nama $projects
        $projects = new \Illuminate\Pagination\LengthAwarePaginator(
            $projectData,
            $estimatedTotal,
            $perPage,
            $page,
            [
                'path' => $request->url(),
                'query' => $request->query(),
            ]
        );
        
        return view('project-list', compact('projects')); // Sekarang jadi 'projects'
    }
    
    return back()->with('error', 'Failed to fetch projects');
}


    public function activeList(Request $request)
{
    $perPage = $request->get('perPage', 5);
    $page = $request->get('page', 1);
    $keyword = $request->get('search', ''); // jika ada search
    
    // Call API dengan parameter yang benar
    $response = Http::get('http://localhost:5014/api/v1/transaction/project/all', [
        'PageNumber' => $page,
        'PageSize' => $perPage,
        'Keyword' => $keyword // optional
    ]);
    
    if ($response->successful()) {
        $apiData = $response->json();
        $projectData = collect($apiData['data']); // Ganti nama ini
        
        // Karena API tidak return total, kita perlu estimasi
        // Jika data yang dikembalikan < PageSize, berarti ini halaman terakhir
        $isLastPage = count($projectData) < $perPage;
        
        // Estimasi total (tidak akurat, tapi cukup untuk pagination)
        $estimatedTotal = $isLastPage 
            ? (($page - 1) * $perPage) + count($projectData)
            : $page * $perPage + 1; // +1 agar ada halaman next
        
        // Buat pagination object dengan nama $projects
        $projects = new \Illuminate\Pagination\LengthAwarePaginator(
            $projectData,
            $estimatedTotal,
            $perPage,
            $page,
            [
                'path' => $request->url(),
                'query' => $request->query(),
            ]
        );

        return view('project-list-active', compact('projects'));
    }
    return back()->with('error', 'Failed to fetch projects');
}

    public function syncList(Request $request)
{
    $perPage = $request->get('perPage', 5);
    $page = $request->get('page', 1);
    $keyword = $request->get('search', ''); // jika ada search
    
    // Call API dengan parameter yang benar
    $response = Http::get('http://localhost:5014/api/v1/transaction/project/all', [
        'PageNumber' => $page,
        'PageSize' => $perPage,
        'Keyword' => $keyword // optional
    ]);
    
    if ($response->successful()) {
        $apiData = $response->json();
        $projectData = collect($apiData['data']); // Ganti nama ini
        
        // Karena API tidak return total, kita perlu estimasi
        // Jika data yang dikembalikan < PageSize, berarti ini halaman terakhir
        $isLastPage = count($projectData) < $perPage;
        
        // Estimasi total (tidak akurat, tapi cukup untuk pagination)
        $estimatedTotal = $isLastPage 
            ? (($page - 1) * $perPage) + count($projectData)
            : $page * $perPage + 1; // +1 agar ada halaman next
        
        // Buat pagination object dengan nama $projects
        $projects = new \Illuminate\Pagination\LengthAwarePaginator(
            $projectData,
            $estimatedTotal,
            $perPage,
            $page,
            [
                'path' => $request->url(),
                'query' => $request->query(),
            ]
        );

        return view('project-data-sync', compact('projects'));
    }
    return back()->with('error', 'Failed to fetch projects');
}

    public function cashIn(Request $request)
{
    $projects = $this->getAllProjects();

    $perPage = $request->get('perPage', 1);

    $projects = $this->paginate($projects, $perPage, $request->get('page', 1), [
        'path' => $request->url(),
        'query' => $request->query(),
    ]);

    return view('project-finance-cashin', compact('projects'));
}

    public function cashIn1(Request $request)
{
    $projects = $this->getAllProjects();

    $perPage = $request->get('perPage', 5);

    $projects = $this->paginate($projects, $perPage, $request->get('page', 1), [
        'path' => $request->url(),
        'query' => $request->query(),
    ]);

    return view('project-cashin-detail-awal', compact('projects'));
}

    public function cashOut(Request $request)
{
    $projects = $this->getAllProjects();

    $perPage = $request->get('perPage', 1);

    $projects = $this->paginate($projects, $perPage, $request->get('page', 1), [
        'path' => $request->url(),
        'query' => $request->query(),
    ]);

    return view('project-finance-cashout', compact('projects'));
}

    public function cashOut1(Request $request)
{
    $projects = $this->getAllProjects();

    $perPage = $request->get('perPage', 5);

    $projects = $this->paginate($projects, $perPage, $request->get('page', 1), [
        'path' => $request->url(),
        'query' => $request->query(),
    ]);

    return view('project-cashout-detail-awal', compact('projects'));
}

    public function projectReport(Request $request)
{
    $projects = $this->getAllProjects();

    $perPage = $request->get('perPage', 5);

    $projects = $this->paginate($projects, $perPage, $request->get('page', 1), [
        'path' => $request->url(),
        'query' => $request->query(),
    ]);

    return view('project-report', compact('projects'));
}

    

    public function issue(Request $request)
    {
        $projects = $this->getAllProjects();
        $perPage = $request->get('perPage', 10);

        $projects = $this->paginate($projects, $perPage, $request->get('page', 1), [
            'path' => $request->url(),
            'query' => $request->query(),
        ]);

        return view('project-issue', compact('projects'));
    }

public function detail($code)
{
    $response = Http::get("http://localhost:5014/api/v1/transaction/project/{$code}");

    if ($response->successful()) {
        $data = $response->json()['data'] ?? [];

        $project = $data;
        $wbs = $data['project_wbs'] ?? [];

        return view('project-detail', compact('project', 'wbs'));
    }

    abort(404, 'Project not found');
}


    public function histori(Request $request)
    {
        $projects = $this->getAllProjects();
        $perPage = $request->get('perPage', 10);

        $projects = $this->paginate($projects, $perPage, $request->get('page', 1), [
            'path' => $request->url(),
            'query' => $request->query(),
        ]);

        return view('project-list-histori', compact('projects'));
    }
    public function detailAdendum()
    {
        $projects = $this->getAllProjects();
        $project = collect($projects)->firstWhere('project_def');

        return view('adendum', compact('project'));
    }

    public function detail2()
    {
        $projects = $this->getAllProjects();
        $project = collect($projects)->firstWhere('project_def');

        return view('project-list-detail', compact('project'));
    }

    public function detail3()
    {
        $projects = $this->getAllProjects();
        $project = collect($projects)->firstWhere('project_def');

        return view('project-finance-cashin-detail', compact('project'));
    }


public function exportPdf()
{
    // Kalau project diambil dari API, panggil lagi di sini
    $projects = $this->getAllProjects(); // contoh fungsi ambil data

        $pdf = Pdf::loadView('views-pages.pdf.project-report-pdf', compact('projects'))
          ->setPaper('a4', 'landscape');

        return $pdf->stream('laporan-project.pdf');

}

}


