<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::view('/','home');
Route::get('/project',[ProjectController::class, 'index']);  