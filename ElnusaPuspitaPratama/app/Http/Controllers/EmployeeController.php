<?php
// filepath: app/Http/Controllers/EmployeeController.php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Tampilkan halaman Our Team
     */
    public function index()
    {
        $totalEmployee = Employee::count();
        
        $employees = Employee::with('projects')
                            ->orderBy('nama')  // ← Ubah 'name' jadi 'nama'
                            ->get();
        
        // Group by position
        $management = $employees->filter(function($emp) {
            return str_contains(strtolower($emp->position ?? ''), 'manager') 
                || str_contains(strtolower($emp->position ?? ''), 'director');
        });
        
        $engineers = $employees->filter(function($emp) {
            return str_contains(strtolower($emp->position ?? ''), 'engineer');
        });
        
        return view('team', compact('employees', 'management', 'engineers', 'totalEmployee'));
    }

}