<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Employee;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $totalProjects = Project::count();
        $totalEmployees = Employee::count();
        $totalClients = Client::count();
        $ongoingProjects = Project::whereIn('status', ['on progress', 'in progress'])->count();
        
        return view('dashboard', compact('totalProjects', 'totalEmployees', 'totalClients', 'ongoingProjects'));
    }

    // Project CRUD Methods
    public function projectIndex()
    {
        $projects = Project::with(['client', 'projectManager'])->orderBy('created_at', 'desc')->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function projectCreate()
    {
        $clients = Client::orderBy('nama')->get();
        $employees = Employee::orderBy('nama')->get();
        return view('admin.projects.create', compact('clients', 'employees'));
    }

    public function projectStore(Request $request)
    {
        $validated = $request->validate([
            'project_name' => 'required|string|max:255',
            'client_id' => 'required|exists:clients,id',
            'project_manager_id' => 'required|exists:employees,id',
            'start_date' => 'required|date',
            'deadline' => 'required|date|after:start_date',
            'budget' => 'required|numeric|min:0',
            'status' => 'required|in:planning,in progress,completed',
            'description' => 'required|string',
            'address' => 'required|string',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif,webp|max:5120' // Max 5MB
        ], [
            'image.required' => 'Project image is required.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'Only JPG, JPEG, PNG, GIF, and WEBP formats are allowed.',
            'image.max' => 'Image size cannot exceed 5MB.',
            'deadline.after' => 'Deadline must be after the start date.',
            'budget.min' => 'Budget must be a positive number.'
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            
            // Double check file size (5MB = 5120KB)
            if ($image->getSize() > 5242880) { // 5MB in bytes
                return redirect()->back()
                    ->withInput()
                    ->withErrors(['image' => 'Image file is too large. Maximum size is 5MB.']);
            }
            
            $imageName = time() . '_' . str_replace(' ', '_', $request->project_name) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/projects'), $imageName);
            $validated['image_url'] = 'images/projects/' . $imageName;
        }

        // Remove 'image' from validated data since we use 'image_url'
        unset($validated['image']);

        Project::create($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully!');
    }

    public function projectEdit($id)
    {
        $project = Project::findOrFail($id);
        $clients = Client::orderBy('nama')->get();
        $employees = Employee::orderBy('nama')->get();
        return view('admin.projects.edit', compact('project', 'clients', 'employees'));
    }

    public function projectUpdate(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        
        $validated = $request->validate([
            'project_name' => 'required|string|max:255',
            'client_id' => 'required|exists:clients,id',
            'project_manager_id' => 'required|exists:employees,id',
            'start_date' => 'required|date',
            'deadline' => 'required|date|after:start_date',
            'budget' => 'required|numeric|min:0',
            'status' => 'required|in:planning,in progress,completed', 
            'description' => 'required|string',
            'address' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif,webp|max:5120' // Nullable untuk update
        ], [
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'Only JPG, JPEG, PNG, GIF, and WEBP formats are allowed.',
            'image.max' => 'Image size cannot exceed 5MB.',
            'deadline.after' => 'Deadline must be after the start date.',
            'budget.min' => 'Budget must be a positive number.'
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            
            // Double check file size (5MB = 5120KB)
            if ($image->getSize() > 5242880) { // 5MB in bytes
                return redirect()->back()
                    ->withInput()
                    ->withErrors(['image' => 'Image file is too large. Maximum size is 5MB.']);
            }
            
            // Delete old image if exists
            if ($project->image_url && file_exists(public_path($project->image_url))) {
                unlink(public_path($project->image_url));
            }

            $imageName = time() . '_' . str_replace(' ', '_', $request->project_name) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/projects'), $imageName);
            $validated['image_url'] = 'images/projects/' . $imageName;
        }

        // Remove 'image' from validated data
        unset($validated['image']);

        $project->update($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully!');
    }

    public function projectDestroy($id)
    {
        $project = Project::findOrFail($id);
        
        // Delete image file if exists
        if ($project->image_url && file_exists(public_path($project->image_url))) {
            unlink(public_path($project->image_url));
        }
        
        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully!');
    }

    // Employee CRUD Methods
    public function employeeIndex()
    {
        $employees = Employee::withCount('projects')->orderBy('nama')->get();
        return view('admin.employees.index', compact('employees'));
    }

    public function employeeCreate()
    {
        return view('admin.employees.create');
    }

    public function employeeStore(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'position' => 'required|string|max:255',
            'tingkatan' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:employees,email',
            'hire_date' => 'required|date',
            'specialization' => 'required|string|max:255'
        ]);

        Employee::create($validated);

        return redirect()->route('admin.employees.index')->with('success', 'Employee created successfully!');
    }

    public function employeeEdit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('admin.employees.edit', compact('employee'));
    }

    public function employeeUpdate(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'position' => 'required|string|max:255',
            'tingkatan' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:employees,email,' . $employee->id,
            'hire_date' => 'required|date',
            'specialization' => 'required|string|max:255'
        ]);

        $employee->update($validated);

        return redirect()->route('admin.employees.index')->with('success', 'Employee updated successfully!');
    }

    public function employeeDestroy($id)
    {
        $employee = Employee::findOrFail($id);
        
        // Cek apakah employee masih menjadi project manager
        $projectCount = $employee->projects()->count();
        
        if ($projectCount > 0) {
            return redirect()->route('admin.employees.index')
                ->with('error', "Cannot delete {$employee->nama}. This employee is managing {$projectCount} project(s). Please reassign the projects first.");
        }
        
        $employee->delete();

        return redirect()->route('admin.employees.index')->with('success', 'Employee deleted successfully!');
    }
}