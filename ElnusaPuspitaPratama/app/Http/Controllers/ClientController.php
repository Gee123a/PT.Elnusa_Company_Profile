<?php
// filepath: app/Http/Controllers/ClientController.php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        // Ambil clients dengan jumlah projects mereka
        $clients = Client::withCount('projects')
                        ->orderBy('nama')  // Ubah dari 'company_name' jadi 'nama'
                        ->get();
        
        return view('clients', compact('clients'));
    }
}