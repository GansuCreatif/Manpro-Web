<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class ProjectController extends Controller
{
    private function getAllProjects()
    {
        $response = Http::get('http://localhost:5014/api/v1/transaction/project/all');
        

        return $response->successful()
            ? $response->json()['data']
            : [];
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
            $options
        );
    }

    public function list(Request $request)
    {
        $projects = $this->getAllProjects();

        // ambil nilai perPage dari request (default 10)
        $perPage = $request->get('perPage', 5);

        // paginasi manual
        $projects = $this->paginate($projects, $perPage, $request->get('page', 1), [
            'path' => $request->url(),
            'query' => $request->query(),
        ]);

        return view('project-list', compact('projects'));
    }

    public function activeList(Request $request)
    {
        $projects = $this->getAllProjects();

        // ambil nilai perPage dari request (default 10)
        $perPage = $request->get('perPage', 5);

        // paginasi manual
        $projects = $this->paginate($projects, $perPage, $request->get('page', 1), [
            'path' => $request->url(),
            'query' => $request->query(),
        ]);

        return view('project-list-active', compact('projects'));
    }

    public function syncList(Request $request)
{
    $projects = $this->getAllProjects();

    $perPage = $request->get('perPage', 5);

    $projects = $this->paginate($projects, $perPage, $request->get('page', 1), [
        'path' => $request->url(),
        'query' => $request->query(),
    ]);

    return view('project-data-sync', compact('projects'));
}

    public function cashIn(Request $request)
{
    $projects = $this->getAllProjects();

    $perPage = $request->get('perPage', 5);

    $projects = $this->paginate($projects, $perPage, $request->get('page', 1), [
        'path' => $request->url(),
        'query' => $request->query(),
    ]);

    return view('project-finance-cashin', compact('projects'));
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
        $projects = $this->getAllProjects();
        $project = collect($projects)->firstWhere('project_def', $code);

        return view('project-detail', compact('project'));
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
    public function detailAdendum($code = 'PRJ-2024-001')
    {
        $projects = $this->getAllProjects();
        $project = collect($projects)->firstWhere('project_def', $code);

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
}
