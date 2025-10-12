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
                'client_id' => 1,
                'project_manager_id' => 1, 
                'start_date' => '2024-01-15',
                'deadline' => '2026-06-30',
                'budget' => 350000000.00,
                'status' => 'In Progress',
                'description' => 'Lapangan Badminton baru di Surabaya Barat dengan fasilitas modern dan ramah lingkungan.',
                'address' => 'Jl. Raya Sambikerep No.70',
                'image_url' => 'image/image.jpg'
            ],
            [
                'project_name' => 'Renovasi Rumah',
                'client_id' => 2, 
                'project_manager_id' => 2, 
                'start_date' => '2024-03-01',
                'deadline' => '2025-03-31',
                'budget' => 275000000.00,
                'status' => 'Completed',
                'description' => 'Renovasi rumah sederhana menjadi hunian nyaman dan modern.',
                'address' => 'Jl. Siwalankerto No.93',
                'image_url' => 'image/image2.jpg'
            ],
            [
                'project_name' => 'Gedung Serbaguna',
                'client_id' => 3,
                'project_manager_id' => 3,
                'start_date' => '2023-08-10',
                'deadline' => '2024-12-20',
                'budget' => 420000000.00,
                'status' => 'Planning',
                'description' => 'Pembangunan gedung serbaguna untuk acara komunitas dan pertemuan bisnis.',
                'address' => 'Jl. Pemuda No.12, Yogyakarta',
                'image_url' => 'image/image3.jpg'
            ],
            [
                'project_name' => 'Kantor Baru PT Nusantara',
                'client_id' => 4,
                'project_manager_id' => 4,
                'start_date' => '2024-05-01',
                'deadline' => '2025-01-15',
                'budget' => 600000000.00,
                'status' => 'In Progress',
                'description' => 'Pembangunan kantor pusat baru dengan desain minimalis dan fasilitas lengkap.',
                'address' => 'Jl. Merdeka No.10, Jakarta',
                'image_url' => 'image/image4.jpg'
            ],
            [
                'project_name' => 'Restorasi Gedung Tua',
                'client_id' => 5,
                'project_manager_id' => 5,
                'start_date' => '2023-11-01',
                'deadline' => '2024-09-30',
                'budget' => 310000000.00,
                'status' => 'Completed',
                'description' => 'Restorasi gedung bersejarah agar tetap kokoh dan estetis.',
                'address' => 'Jl. Gajah Mada No.8, Semarang',
                'image_url' => 'image/image5.jpg'
            ],
            [
                'project_name' => 'Pembangunan Gudang Logistik',
                'client_id' => 6,
                'project_manager_id' => 6,
                'start_date' => '2024-02-15',
                'deadline' => '2024-10-10',
                'budget' => 500000000.00,
                'status' => 'Planning',
                'description' => 'Pembangunan gudang logistik dengan sistem keamanan modern.',
                'address' => 'Jl. Sudirman No.25, Bandung',
                'image_url' => 'image/image6.jpg'
            ],
            [
                'project_name' => 'Perluasan Pabrik',
                'client_id' => 7,
                'project_manager_id' => 7,
                'start_date' => '2024-04-01',
                'deadline' => '2025-02-28',
                'budget' => 450000000.00,
                'status' => 'In Progress',
                'description' => 'Perluasan area pabrik untuk meningkatkan kapasitas produksi.',
                'address' => 'Jl. Diponegoro No.5, Surabaya',
                'image_url' => 'image/image7.jpg'
            ],
            [
                'project_name' => 'Renovasi Kantor Cabang',
                'client_id' => 8,
                'project_manager_id' => 8,
                'start_date' => '2023-09-20',
                'deadline' => '2024-05-15',
                'budget' => 320000000.00,
                'status' => 'Completed',
                'description' => 'Renovasi kantor cabang agar lebih nyaman dan efisien.',
                'address' => 'Jl. Kenjeran No.15, Surabaya',
                'image_url' => 'image/image8.jpg'
            ],
            [
                'project_name' => 'Pembangunan Rumah Subsidi',
                'client_id' => 9,
                'project_manager_id' => 9,
                'start_date' => '2024-06-01',
                'deadline' => '2025-01-31',
                'budget' => 290000000.00,
                'status' => 'Planning',
                'description' => 'Pembangunan rumah subsidi untuk masyarakat berpenghasilan rendah.',
                'address' => 'Jl. Pahlawan No.20, Malang',
                'image_url' => 'image/image9.jpg'
            ],
            [
                'project_name' => 'Pembangunan Taman Kota',
                'client_id' => 10,
                'project_manager_id' => 10,
                'start_date' => '2024-07-10',
                'deadline' => '2025-03-20',
                'budget' => 375000000.00,
                'status' => 'In Progress',
                'description' => 'Pembangunan taman kota sebagai ruang terbuka hijau dan rekreasi.',
                'address' => 'Jl. Kartini No.7, Solo',
                'image_url' => 'image/image10.jpg'
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
