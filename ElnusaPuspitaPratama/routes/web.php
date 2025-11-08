<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::view('/','home');
Route::get('/project',[ProjectController::class, 'index']);
Route::get('/project/{id}', [ProjectController::class, 'show']);
Route::get('/team', [EmployeeController::class, 'index']);
Route::get('/clients', [ClientController::class, 'index']);
Route::view('/contact', 'contact');

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    
    // Projects
    Route::get('/projects', [AdminController::class, 'projectIndex'])->name('admin.projects.index');
    Route::get('/projects/search', [AdminController::class, 'projectSearch'])->name('admin.projects.search'); 
    Route::get('/projects/create', [AdminController::class, 'projectCreate'])->name('admin.projects.create');
    Route::post('/projects', [AdminController::class, 'projectStore'])->name('admin.projects.store');
    Route::get('/projects/{id}/edit', [AdminController::class, 'projectEdit'])->name('admin.projects.edit');
    Route::put('/projects/{id}', [AdminController::class, 'projectUpdate'])->name('admin.projects.update');
    Route::delete('/projects/{id}', [AdminController::class, 'projectDestroy'])->name('admin.projects.destroy');
    
    // Employees
    Route::get('/employees', [AdminController::class, 'employeeIndex'])->name('admin.employees.index');
    Route::get('/employees/search', [AdminController::class, 'employeeSearch'])->name('admin.employees.search');
    Route::get('/employees/create', [AdminController::class, 'employeeCreate'])->name('admin.employees.create');
    Route::post('/employees', [AdminController::class, 'employeeStore'])->name('admin.employees.store');
    Route::get('/employees/{id}/edit', [AdminController::class, 'employeeEdit'])->name('admin.employees.edit');
    Route::put('/employees/{id}', [AdminController::class, 'employeeUpdate'])->name('admin.employees.update');
    Route::delete('/employees/{id}', [AdminController::class, 'employeeDestroy'])->name('admin.employees.destroy');
});