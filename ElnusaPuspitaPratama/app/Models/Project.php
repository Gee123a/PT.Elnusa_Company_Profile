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

    // Konversi otomatis ke tipe data yang sesuai
    protected $casts = [
        'start_date' => 'date',
        'deadline' => 'date',
        'budget' => 'decimal:2', // 2 angka di belakang koma
    ];

    // RELASI: Project milik satu Client
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    // RELASI: Project dikelola oleh satu Employee (Project Manager)
    public function projectManager()
    {
        return $this->belongsTo(Employee::class, 'project_manager_id');
    }

    // SCOPE: Ambil project berdasarkan status
    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    // SCOPE: Ambil project yang sudah selesai
    public function scopeCompleted($query)
    {
        return $query->where('status', 'Completed');
    }

    // SCOPE: Ambil project yang sedang berjalan
    public function scopeInProgress($query)
    {
        return $query->where('status', 'In Progress');
    }
}
