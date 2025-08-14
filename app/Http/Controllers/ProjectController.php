<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{
    private function getAllProjects()
    {
        $response = Http::get('http://localhost:5014/api/v1/transaction/project/all');

        return $response->successful()
            ? $response->json()['data']
            : [];
    }

    public function list()
    {
        $projects = $this->getAllProjects();
        return view('project-list', compact('projects'));
    }

    public function issue()
    {
        $projects = $this->getAllProjects();
        return view('project-issue', compact('projects'));
    }
   public function detail($code = 'PRJ003')
{
    $projects = $this->getAllProjects();
    $project = collect($projects)->firstWhere('code_project', $code);

    return view('project-detail', compact('project'));
}

    
}
