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
        // Ambil project berdasarkan ID dengan relasi
        $project = Project::with('client', 'projectManager')->findOrFail($id);
        
        return view('project_detail', compact('project'));
    }
}
