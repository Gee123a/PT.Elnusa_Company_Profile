<?php
namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Review;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        // Ambil clients dengan jumlah projects mereka
        $clients = Client::withCount('projects')
                        ->orderBy('nama')  
                        ->get();
        $reviews = Review::all();
        
        return view('clients', compact('clients', 'reviews'));
    }
}