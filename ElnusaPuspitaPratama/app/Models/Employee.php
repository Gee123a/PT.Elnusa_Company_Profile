<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi
    protected $fillable = [
        'nama',
        'alamat',
        'position',
        'tingkatan',
        'phone',
        'email',
        'hire_date',
        'specialization'
    ];

    // Konversi otomatis ke tipe data Date
    protected $casts = [
        'hire_date' => 'date',
    ];

    /**
     * Relasi Employee memiliki banyak Projects
     * Satu employee bisa jadi project manager di banyak project
     */
    public function projects()
    {
        return $this->hasMany(Project::class, 'project_manager_id');
    }
}
