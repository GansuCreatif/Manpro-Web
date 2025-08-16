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

    private function paginate($items, $perPage = 10, $page = null, $options = [])
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
        $perPage = $request->get('perPage', 10);

        // paginasi manual
        $projects = $this->paginate($projects, $perPage, $request->get('page', 1), [
            'path' => $request->url(),
            'query' => $request->query(),
        ]);

        return view('project-list', compact('projects'));
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

    public function detail($code = 'PRJ003')
    {
        $projects = $this->getAllProjects();
        $project = collect($projects)->firstWhere('code_project', $code);

        return view('project-detail', compact('project'));
    }
}
