<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Buat user admin
        User::factory()->create([
            'name' => 'Admin Elnusa',
            'email' => 'admin@elnusa.com',
            'role' => 'admin', // Admin: manage projects & reviews only
        ]);

        // Buat user manager
        User::factory()->create([
            'name' => 'Manager Elnusa',
            'email' => 'manager@elnusa.com',
            'role' => 'manager', // Manager: manage all (projects, reviews, employees)
        ]);

        $this->call([
            ClientSeeder::class,      
            EmployeeSeeder::class,    
            ProjectSeeder::class,     
            ReviewSeeder::class,      
        ]);
    }
}
