<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::view('/','home');
Route::get('/project',[ProjectController::class, 'index']);
Route::get('/project/{id}', [ProjectController::class, 'show'])->name('project.show');
Route::get('/team', [EmployeeController::class, 'index'])->name('team.index');
Route::get('/team/{id}', [EmployeeController::class, 'show'])->name('team.show');
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
Route::view('/contact', 'contact')->name('contact');