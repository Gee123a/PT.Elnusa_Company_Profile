<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Project;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $projects = [
            [
                'title' => 'Installation Fiber Optic Network - Jakarta Selatan',
                'description' => 'Pemasangan jaringan fiber optic untuk area Jakarta Selatan dengan total panjang 50 km, meliputi instalasi kabel, splicing, dan testing.',
                'image' => 'fiber-optic.jpg',
                'location' => 'Jakarta Selatan',
                'start_date' => '2024-01-15',
                'end_date' => '2024-06-30',
                'status' => 'completed',
                'is_featured' => true
            ],
            [
                'title' => 'Telecommunication Tower Construction',
                'description' => 'Pembangunan menara telekomunikasi setinggi 60 meter termasuk instalasi perangkat dan grounding system.',
                'image' => 'tower.jpg',
                'location' => 'Bandung, Jawa Barat',
                'start_date' => '2024-03-01',
                'end_date' => '2024-08-15',
                'status' => 'completed',
                'is_featured' => true
            ],
            [
                'title' => 'Data Center Infrastructure',
                'description' => 'Membangun infrastruktur data center termasuk cabling, cooling system, dan power management.',
                'image' => 'datacenter.jpg',
                'location' => 'Surabaya',
                'start_date' => '2024-07-01',
                'end_date' => null,
                'status' => 'ongoing',
                'is_featured' => true
            ],
            [
                'title' => 'Campus Network Upgrade',
                'description' => 'Upgrade jaringan kampus dengan teknologi terbaru untuk meningkatkan kecepatan dan reliabilitas.',
                'image' => 'campus-network.jpg',
                'location' => 'Yogyakarta',
                'start_date' => '2024-08-01',
                'end_date' => null,
                'status' => 'ongoing',
                'is_featured' => false
            ],
            [
                'title' => 'Smart City Network Infrastructure',
                'description' => 'Instalasi infrastruktur jaringan untuk proyek smart city di Semarang.',
                'image' => 'smart-city.jpg',
                'location' => 'Semarang',
                'start_date' => '2024-09-01',
                'end_date' => '2025-03-31',
                'status' => 'ongoing',
                'is_featured' => false
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
