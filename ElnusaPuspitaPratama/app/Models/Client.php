<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi
    protected $fillable = [
        'nama',
        'contact_person',
        'email',
        'phone',
        'alamat',
        'company_type',
        'registration_date'
    ];

    // Konversi otomatis ke tipe data Date
    protected $casts = [
        'registration_date' => 'date',
    ];

    // RELASI: Satu Client punya banyak Projects
    public function projects()
    {
        return $this->hasMany(Project::class, 'client_id');
    }
}
