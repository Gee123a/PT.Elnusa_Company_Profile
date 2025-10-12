<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'project_name' => 'Lapangan Badminton',
                'client_id' => 1, // PT Telkom Indonesia
                'project_manager_id' => 1, // Andi Wijaya
                'start_date' => '2024-01-15',
                'deadline' => '2024-06-30',
                'budget' => 5000000000.00, // 5 Miliar
                'status' => 'On Progress',
                'description' => 'Lapangan Badminton baru di surabaya Barat',
                'address' => 'Jl. Raya Sambikerep No.70, Sambikerep, Kec. Sambikerep, Surabaya, Jawa Timur 60217',
                'image_url' => 'image/image.jpeg'
            ],
            [
                'project_name' => 'Renovasi rumah',
                'client_id' => 2, // Kementerian Komunikasi
                'project_manager_id' => 1, // Dewi Sartika
                'start_date' => '2024-03-01',
                'deadline' => '2025-03-31',
                'budget' => 15000000000.00, // 15 Miliar
                'status' => 'Done',
                'description' => 'Renovasi rumah Sederhana',
                'address' => 'Jl. Siwalankerto No.93, Siwalankerto, Kec. Wonocolo, Surabaya, Jawa Timur 60234',
                'image_url' => 'image/image2.jpeg'
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
