<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Tampilkan halaman projects
     */
    public function index()
    {
        // Ambil semua project dari model
        $allProjects = Projects::allData();
        
        // Ambil hanya featured projects untuk carousel
        $featuredProjects = Projects::getFeatured();

        // Kirim data ke view
        return view('project', [
            'featuredProjects' => $featuredProjects,
            'allProjects' => $allProjects
        ]);
    }
}
