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
        // Ambil SEMUA project dengan relasi client dan project manager
        $allProjects = Project::with('client', 'projectManager')
                            ->orderBy('created_at', 'desc')
                            ->get();
        
        // Ambil 3 project COMPLETED untuk featured carousel
        $featuredProjects = Project::with('client', 'projectManager')
                                ->where('status', 'Completed')
                                ->orderBy('budget', 'desc') // Yang budget terbesar
                                ->take(3)
                                ->get();
        
        // Jika tidak ada completed projects, ambil project terbaru
        if ($featuredProjects->isEmpty()) {
            $featuredProjects = Project::with('client', 'projectManager')
                                    ->orderBy('created_at', 'desc')
                                    ->take(3)
                                    ->get();
        }
        
        return view('project', compact('allProjects', 'featuredProjects'));
    }

    // Method untuk halaman detail project
    public function show($id)
    {
        $project = Project::with(['client', 'projectManager'])->findOrFail($id);

        // Logic status, badge, progress
        $status = strtolower($project->status);
        if ($status === 'planning') {
            $badgeColor = ''; // Tidak ada warna khusus
            $progress = 25;
        } elseif ($status === 'on progress' || $status === 'in progress') {
            $badgeColor = 'bg-warning text-dark'; // Kuning
            $progress = 75;
        } elseif ($status === 'complete' || $status === 'completed') {
            $badgeColor = 'bg-success'; // Hijau
            $progress = 100;
        } else {
            $badgeColor = 'bg-secondary';
            $progress = 0;
        }

        // Related projects (contoh ambil 3 project lain)
        $relatedProjects = Project::where('id', '!=', $project->id)->take(3)->get();
        foreach ($relatedProjects as $rp) {
            $rpStatus = strtolower($rp->status);
            if ($rpStatus === 'planning') {
                $rp->badgeColor = ''; // Tidak ada warna khusus
            } elseif ($rpStatus === 'on progress' || $rpStatus === 'in progress') {
                $rp->badgeColor = 'bg-warning text-dark'; // Kuning
            } elseif ($rpStatus === 'complete' || $rpStatus === 'completed') {
                $rp->badgeColor = 'bg-success'; // Hijau
            } else {
                $rp->badgeColor = 'bg-secondary';
            }
        }

        return view('project_detail', compact(
            'project', 'badgeColor', 'progress', 'relatedProjects'
        ));
    }

}
