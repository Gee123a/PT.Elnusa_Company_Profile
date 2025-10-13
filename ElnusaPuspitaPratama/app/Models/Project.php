<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi
    protected $fillable = [
        'project_name',
        'client_id',
        'project_manager_id',
        'start_date',
        'deadline',
        'budget',
        'status',
        'description',
        'address',
        'image_url'
    ];

    
    protected $casts = [
        'start_date' => 'date',
        'deadline' => 'date',
        'budget' => 'decimal:2', // 2 angka di belakang koma
    ];

    
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    
    public function projectManager()
    {
        return $this->belongsTo(Employee::class, 'project_manager_id');
    }
}
