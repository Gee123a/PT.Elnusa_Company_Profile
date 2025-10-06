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
        // Ambil semua project
        $allProjects = Project::all();
        
        // Ambil featured projects
        $featuredProjects = Project::featured()->get();
        
        return view('project', [
            'featuredProjects' => $featuredProjects,
            'allProjects' => $allProjects
        ]);
    }

    // Method untuk halaman detail project
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('project-detail', compact('project'));
    }
}
