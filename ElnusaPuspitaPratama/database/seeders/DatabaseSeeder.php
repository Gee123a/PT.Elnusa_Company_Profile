<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat user admin
        User::factory()->create([
            'name' => 'Admin Elnusa',
            'email' => 'admin@elnusa.com',
        ]);

        // Jalankan seeder dengan URUTAN yang benar
        // PENTING: Clients dan Employees harus dibuat DULU sebelum Projects
        // Karena Projects butuh client_id dan project_manager_id dari tabel tersebut
        $this->call([
            ClientSeeder::class,      // 1. Buat clients dulu
            EmployeeSeeder::class,    // 2. Buat employees dulu
            ProjectSeeder::class,     // 3. Baru buat projects (yang punya foreign key)
        ]);
    }
}
