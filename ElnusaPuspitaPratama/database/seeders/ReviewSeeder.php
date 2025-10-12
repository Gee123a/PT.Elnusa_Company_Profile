<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        Review::insert([
            [
                'deskripsi' => 'Pelayanan Elnusa sangat profesional dan hasil pekerjaan sangat memuaskan. Timnya responsif, ramah, dan selalu memberikan solusi terbaik untuk setiap kebutuhan kami. Proses pengerjaan proyek berjalan lancar dan sesuai dengan jadwal yang telah disepakati.',
                'nama_client' => 'Anonymous',
                'jabatan' => '-',
                'perusahaan' => '-',
            ],
            [
                'deskripsi' => 'Kami sangat merekomendasikan Elnusa untuk proyek konstruksi. Hasil akhir sangat rapi, komunikasi dengan tim sangat baik, dan setiap detail pekerjaan diperhatikan dengan teliti. Kami merasa nyaman dan percaya selama proses berlangsung.',
                'nama_client' => 'Rudi Hartono',
                'jabatan' => 'Manager Proyek',
                'perusahaan' => 'PT Nusantara Jaya',
            ],
            [
                'deskripsi' => 'Tim Elnusa sangat berpengalaman dan mampu menyelesaikan proyek tepat waktu. Setiap kendala di lapangan dapat diatasi dengan cepat dan profesional. Kami puas dengan hasil kerja dan pelayanan yang diberikan.',
                'nama_client' => 'Siti Aminah',
                'jabatan' => 'HR Staff',
                'perusahaan' => 'CV Maju Bersama',
            ],
            [
                'deskripsi' => 'Elnusa memberikan hasil pekerjaan yang berkualitas tinggi dan sesuai dengan harapan kami. Proses komunikasi sangat lancar dan transparan, sehingga kami merasa aman selama proyek berlangsung.',
                'nama_client' => 'Andi Wijaya',
                'jabatan' => 'Site Engineer',
                'perusahaan' => 'PT Teknologi Global',
            ],
            [
                'deskripsi' => 'Kami sangat puas dengan kerjasama bersama Elnusa. Setiap anggota tim sangat berdedikasi dan selalu memberikan update perkembangan proyek. Hasil akhir sangat memuaskan dan sesuai dengan spesifikasi.',
                'nama_client' => 'Dewi Sartika',
                'jabatan' => 'Finance Staff',
                'perusahaan' => 'PT Sumber Rejeki',
            ],
        ]);
    }
}
