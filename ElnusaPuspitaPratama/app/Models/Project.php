<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'projects';

    // Kolom yang boleh diisi mass assignment
    protected $fillable = [
        'title',
        'description',
        'image',
        'location',
        'start_date',
        'end_date',
        'status',
        'is_featured'
    ];

    // Cast tipe data
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'is_featured' => 'boolean',
    ];

    // Scope untuk featured projects
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    // Scope untuk completed projects
    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }

    // Scope untuk ongoing projects
    public function scopeOngoing($query)
    {
        return $query->where('status', 'ongoing');
    }
}
