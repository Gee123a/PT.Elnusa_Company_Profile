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
    public function projectIndex(Request $request)
    {
        $search = $request->input('search');
        
        $projects = Project::with(['client', 'projectManager'])
            ->when($search, function($query, $search) {
                return $query->where('project_name', 'like', "%{$search}%")
                    ->orWhere('address', 'like', "%{$search}%")
                    ->orWhere('status', 'like', "%{$search}%")
                    ->orWhereHas('client', function($q) use ($search) {
                        $q->where('nama', 'like', "%{$search}%");
                    })
                    ->orWhereHas('projectManager', function($q) use ($search) {
                        $q->where('nama', 'like', "%{$search}%");
                    });
            })
            ->orderBy('created_at', 'desc')
            ->paginate(5)
            ->withQueryString();
            
        return view('admin.projects.index', compact('projects', 'search'));
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
            'image' => 'required|image|mimes:jpeg,jpg,png,gif,webp|max:5120'
        ], [
            'image.required' => 'Project image is required.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'Only JPG, JPEG, PNG, GIF, and WEBP formats are allowed.',
            'image.max' => 'Image size cannot exceed 5MB.',
            'deadline.after' => 'Deadline must be after the start date.',
            'budget.min' => 'Budget must be a positive number.'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            
            if ($image->getSize() > 5242880) {
                return redirect()->back()
                    ->withInput()
                    ->withErrors(['image' => 'Image file is too large. Maximum size is 5MB.']);
            }
            
            $imageName = time() . '_' . str_replace(' ', '_', $request->project_name) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/projects'), $imageName);
            $validated['image_url'] = 'images/projects/' . $imageName;
        }

        unset($validated['image']);
        Project::create($validated);

        return redirect('/admin/projects')->with('success', 'Project created successfully!');
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
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif,webp|max:5120'
        ], [
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'Only JPG, JPEG, PNG, GIF, and WEBP formats are allowed.',
            'image.max' => 'Image size cannot exceed 5MB.',
            'deadline.after' => 'Deadline must be after the start date.',
            'budget.min' => 'Budget must be a positive number.'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            
            if ($image->getSize() > 5242880) {
                return redirect()->back()
                    ->withInput()
                    ->withErrors(['image' => 'Image file is too large. Maximum size is 5MB.']);
            }
            
            if ($project->image_url && file_exists(public_path($project->image_url))) {
                unlink(public_path($project->image_url));
            }

            $imageName = time() . '_' . str_replace(' ', '_', $request->project_name) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/projects'), $imageName);
            $validated['image_url'] = 'images/projects/' . $imageName;
        }

        unset($validated['image']);
        $project->update($validated);

        return redirect('/admin/projects')->with('success', 'Project updated successfully!');
    }

    public function projectDestroy($id)
    {
        $project = Project::findOrFail($id);
        
        if ($project->image_url && file_exists(public_path($project->image_url))) {
            unlink(public_path($project->image_url));
        }
        
        $project->delete();

        return redirect('/admin/projects')->with('success', 'Project deleted successfully!');
    }

    // Employee CRUD Methods
    public function employeeIndex(Request $request)
    {
        $search = $request->input('search');
        
        $employees = Employee::withCount('projects')
            ->when($search, function($query, $search) {
                return $query->where('nama', 'like', "%{$search}%")
                    ->orWhere('position', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('specialization', 'like', "%{$search}%")
                    ->orWhere('tingkatan', 'like', "%{$search}%");
            })
            ->orderBy('nama')
            ->paginate(5)
            ->withQueryString();
            
        return view('admin.employees.index', compact('employees', 'search'));
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

        return redirect('/admin/employees')->with('success', 'Employee created successfully!');
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

        return redirect('/admin/employees')->with('success', 'Employee updated successfully!');
    }

    public function employeeDestroy($id)
    {
        $employee = Employee::findOrFail($id);
        
        $projectCount = $employee->projects()->count();
        
        if ($projectCount > 0) {
            return redirect('/admin/employees')
                ->with('error', "Cannot delete {$employee->nama}. This employee is managing {$projectCount} project(s). Please reassign the projects first.");
        }
        
        $employee->delete();

        return redirect('/admin/employees')->with('success', 'Employee deleted successfully!');
    }
}