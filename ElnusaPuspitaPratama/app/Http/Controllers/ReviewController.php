<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Client;

class ReviewController extends Controller
{
    public function index()
    {
        $clients = Client::withCount('projects')->orderBy('nama')->get();
        $reviews = Review::all();
        return view('clients', compact('clients', 'reviews'));
    }
}