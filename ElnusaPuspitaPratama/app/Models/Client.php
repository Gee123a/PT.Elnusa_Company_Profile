<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'nama',
        'contact_person',
        'email',
        'phone',
        'alamat',
        'company_type',
        'registration_date'
    ];

    protected $casts = [
        'registration_date' => 'date',
    ];

    
    public function projects()
    {
        return $this->hasMany(Project::class, 'client_id');
    }
}
