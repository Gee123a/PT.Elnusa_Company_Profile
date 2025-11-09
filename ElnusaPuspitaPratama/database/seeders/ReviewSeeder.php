<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;
use App\Models\Client;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        $clients = Client::all();

        $reviewsData = [
            [
                'nama_client' => 'John Anderson',
                'perusahaan' => 'Tech Innovations Ltd',
                'deskripsi' => 'Outstanding service and professional team. The project was completed ahead of schedule with exceptional quality. Highly recommended for any construction needs.'
            ],
            [
                'nama_client' => 'Sarah Williams',
                'perusahaan' => 'Global Enterprises',
                'deskripsi' => 'Excellent work quality and attention to detail. The team was very responsive and professional throughout the entire project. Very satisfied with the results.'
            ],
            [
                'nama_client' => 'Michael Chen',
                'perusahaan' => 'Asia Pacific Holdings',
                'deskripsi' => 'Very professional and reliable construction company. They delivered exactly what we needed within budget and on time. Will definitely work with them again.'
            ],
        ];

        foreach ($reviewsData as $index => $reviewData) {
            Review::create([
                'client_id' => $clients[$index % $clients->count()]->id,
                'nama_client' => $reviewData['nama_client'],
                'perusahaan' => $reviewData['perusahaan'],
                'deskripsi' => $reviewData['deskripsi'],
            ]);
        }
    }
}
