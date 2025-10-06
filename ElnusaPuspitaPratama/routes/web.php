<?php

use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

Route::view('/','home');
Route::get('/project',[ProjectsController::class, 'index']);  