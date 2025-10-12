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
        ]);

        
        $this->call([
            ClientSeeder::class,      
            EmployeeSeeder::class,    
            ProjectSeeder::class,     
            ReviewSeeder::class,      
        ]);
    }
}
