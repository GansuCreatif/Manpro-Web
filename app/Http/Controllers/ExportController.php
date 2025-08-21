<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class ExportController extends Controller
{
    public function exportCsv()
    {
        $fileName = "projects.csv";

        $headers = [
            "Content-Type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
        ];

        $projects = \App\Models\Project::with(['projectProfile','projectResponsible'])->get();

        $callback = function() use ($projects) {
            $handle = fopen('php://output', 'w');

            // Header CSV
            fputcsv($handle, [
                "No", "Code", "Description", "Location", "Unit", "Project Manager",
                "Project Value", "Project Owner", "Start Date", "Finish Date", "Status"
            ]);

            foreach ($projects as $index => $project) {
                fputcsv($handle, [
                    $index + 1,
                    $project->project_def,
                    $project->project_desc,
                    $project->project_location,
                    $project->projectProfile->unit_desc ?? '-',
                    $project->projectResponsible->name ?? '-',
                    number_format((int)str_replace(',', '', $project->contract_value), 0, ',', '.'),
                    $project->project_owner,
                    Carbon::parse($project->start_date)->translatedFormat('d F Y'),
                    Carbon::parse($project->end_date)->translatedFormat('d F Y'),
                    projectStatus($project->status)['label'] ?? '-',
                ]);
            }

            fclose($handle);
        };

        return response()->stream($callback, 200, $headers);
    }
}