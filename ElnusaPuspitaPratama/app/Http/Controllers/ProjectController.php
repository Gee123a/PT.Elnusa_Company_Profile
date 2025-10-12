<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Tampilkan halaman projects
     */
    public function index()
    {
        $allProjects = Project::with('client', 'projectManager')
                            ->orderBy('created_at', 'desc')
                            ->get();

        // Tambahkan badgeColor untuk setiap project
        foreach ($allProjects as $project) {
            $status = strtolower($project->status);
            if ($status === 'planning') {
                $project->badgeColor = '';
            } elseif ($status === 'on progress' || $status === 'in progress') {
                $project->badgeColor = 'bg-warning text-dark';
            } elseif ($status === 'complete' || $status === 'completed') {
                $project->badgeColor = 'bg-success';
            } else {
                $project->badgeColor = 'bg-secondary';
            }
        }

        // Ambil featured project hanya 1, project dengan budget paling mahal
        $featuredProject = Project::with('client', 'projectManager')
                            ->orderBy('budget', 'desc')
                            ->first();

        // Tambahkan badgeColor untuk featuredProjects juga
        if ($featuredProject) {
            $status = strtolower($featuredProject->status);
            if ($status === 'planning') {
                $featuredProject->badgeColor = '';
            } elseif ($status === 'on progress' || $status === 'in progress') {
                $featuredProject->badgeColor = 'bg-warning text-dark';
            } elseif ($status === 'complete' || $status === 'completed') {
                $featuredProject->badgeColor = 'bg-success';
            } else {
                $featuredProject->badgeColor = 'bg-secondary';
            }
        }

        return view('project', compact('allProjects', 'featuredProject'));
    }

    // Method untuk halaman detail project
    public function show($id)
    {
        $project = Project::with(['client', 'projectManager'])->findOrFail($id);

        // Logic status dan badge (tanpa progress persentase)
        $status = strtolower($project->status);
        if ($status === 'planning') {
            $badgeColor = '';
        } elseif ($status === 'on progress' || $status === 'in progress') {
            $badgeColor = 'bg-warning text-dark';
        } elseif ($status === 'complete' || $status === 'completed') {
            $badgeColor = 'bg-success';
        } else {
            $badgeColor = 'bg-secondary';
        }

        // Related projects (contoh ambil 3 project lain)
        $relatedProjects = Project::where('id', '!=', $project->id)->take(3)->get();
        foreach ($relatedProjects as $rp) {
            $rpStatus = strtolower($rp->status);
            if ($rpStatus === 'planning') {
                $rp->badgeColor = '';
            } elseif ($rpStatus === 'on progress' || $rpStatus === 'in progress') {
                $rp->badgeColor = 'bg-warning text-dark';
            } elseif ($rpStatus === 'complete' || $rpStatus === 'completed') {
                $rp->badgeColor = 'bg-success';
            } else {
                $rp->badgeColor = 'bg-secondary';
            }
        }

        return view('project_detail', compact(
            'project', 'badgeColor', 'relatedProjects'
        ));
    }

}
