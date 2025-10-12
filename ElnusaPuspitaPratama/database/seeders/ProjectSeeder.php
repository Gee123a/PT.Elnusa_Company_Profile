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
                'project_name' => 'Fiber Optic Installation - Jakarta Selatan',
                'client_id' => 1, // PT Telkom Indonesia
                'project_manager_id' => 1, // Andi Wijaya
                'start_date' => '2024-01-15',
                'deadline' => '2024-06-30',
                'budget' => 5000000000.00, // 5 Miliar
                'status' => 'Completed',
                'description' => 'Pemasangan jaringan fiber optic untuk area Jakarta Selatan dengan total panjang 50 km, meliputi instalasi kabel, splicing, dan testing konektivitas.',
                'address' => 'Jakarta Selatan, DKI Jakarta',
                'image_url' => 'image/image.jpg'
            ],
            [
                'project_name' => 'Smart City Infrastructure - Semarang',
                'client_id' => 2, // Kementerian Komunikasi
                'project_manager_id' => 4, // Dewi Sartika
                'start_date' => '2024-03-01',
                'deadline' => '2025-03-31',
                'budget' => 15000000000.00, // 15 Miliar
                'status' => 'In Progress',
                'description' => 'Pembangunan infrastruktur smart city di Kota Semarang, mencakup instalasi sensor IoT, network infrastructure, dan integrated control center.',
                'address' => 'Semarang, Jawa Tengah',
                'image_url' => 'image/image.jpg'
            ],
            [
                'project_name' => 'Data Center Setup - Bandung',
                'client_id' => 3, // CV Maju Jaya
                'project_manager_id' => 3, // Budi Hartono
                'start_date' => '2024-07-01',
                'deadline' => '2024-12-31',
                'budget' => 8000000000.00, // 8 Miliar
                'status' => 'In Progress',
                'description' => 'Membangun data center dengan kapasitas 100 rack, termasuk cooling system, power backup, dan fire suppression system.',
                'address' => 'Bandung, Jawa Barat',
                'image_url' => 'image/image.jpg'
            ],
            [
                'project_name' => 'Campus Network Upgrade - Yogyakarta',
                'client_id' => 1, // PT Telkom Indonesia
                'project_manager_id' => 2, // Rina Lestari
                'start_date' => '2024-09-01',
                'deadline' => '2024-11-30',
                'budget' => 3000000000.00, // 3 Miliar
                'status' => 'In Progress',
                'description' => 'Upgrade infrastruktur jaringan di 5 kampus besar di Yogyakarta dengan teknologi WiFi 6 dan fiber backbone.',
                'address' => 'Yogyakarta, DI Yogyakarta',
                'image_url' => 'image/image.jpg'
            ],
            [
                'project_name' => 'Telecommunication Tower Construction',
                'client_id' => 2, // Kementerian
                'project_manager_id' => 1, // Andi Wijaya
                'start_date' => '2024-10-15',
                'deadline' => '2025-04-15',
                'budget' => 4500000000.00, // 4.5 Miliar
                'status' => 'Planning',
                'description' => 'Pembangunan 3 menara telekomunikasi setinggi 60 meter di daerah terpencil untuk meningkatkan coverage sinyal.',
                'address' => 'Papua Barat',
                'image_url' => 'image/image.jpg'
            ],
            [
                'project_name' => 'Home Network Installation',
                'client_id' => 4, // John Doe (Individual)
                'project_manager_id' => 2, // Rina Lestari
                'start_date' => '2024-11-01',
                'deadline' => '2024-11-15',
                'budget' => 50000000.00, // 50 Juta
                'status' => 'Planning',
                'description' => 'Instalasi jaringan rumah pintar dengan sistem keamanan terintegrasi dan automation.',
                'address' => 'Surabaya, Jawa Timur',
                'image_url' => 'image/image.jpg'
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
