<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    
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

    
    protected $casts = [
        'hire_date' => 'date',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class, 'project_manager_id');
    }
}
