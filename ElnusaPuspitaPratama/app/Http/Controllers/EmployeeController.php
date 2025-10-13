<?php
// filepath: app/Http/Controllers/EmployeeController.php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $totalEmployee = Employee::count();
        
        $employees = Employee::with('projects')
                            ->orderBy('nama') 
                            ->get();
        
        return view('team', compact('employees', 'totalEmployee'));
    }

}