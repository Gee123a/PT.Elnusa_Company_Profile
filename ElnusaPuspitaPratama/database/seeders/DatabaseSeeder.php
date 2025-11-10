<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call all seeders in the correct order
        $this->call([
            UserSeeder::class,        
            ClientSeeder::class,      
            EmployeeSeeder::class,    
            ProjectSeeder::class,     
            ReviewSeeder::class,      
        ]);
    }
}
