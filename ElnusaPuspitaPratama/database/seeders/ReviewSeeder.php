<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::insert([
            [
                'deskripsi' => 'Exceptional quality and professionalism. Elnusa Puspita Pratama delivered our project on time and within budget. Highly recommended!',
                'nama_client' => 'John Doe',
                'jabatan' => 'CEO',
                'perusahaan' => 'PT Mandiri Sejahtera',
            ],
            [
                'deskripsi' => 'Outstanding service from start to finish. Their attention to detail and commitment to excellence is unmatched in the industry.',
                'nama_client' => 'Jane Smith',
                'jabatan' => 'Director',
                'perusahaan' => 'PT Berkah Abadi',
            ],
            [
                'deskripsi' => 'Professional team with innovative solutions. They transformed our vision into reality while maintaining the highest standards.',
                'nama_client' => 'Robert Chen',
                'jabatan' => 'Owner',
                'perusahaan' => 'CV Maju Jaya',
            ],
        ]);
    }
}
