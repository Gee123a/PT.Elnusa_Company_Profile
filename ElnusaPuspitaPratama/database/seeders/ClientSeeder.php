<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = [
            [
                'nama' => 'PT Telkom Indonesia',
                'contact_person' => 'Budi Santoso',
                'email' => 'budi.santoso@telkom.co.id',
                'phone' => '021-12345678',
                'alamat' => 'Jl. Gatot Subroto Kav. 52, Jakarta Selatan',
                'company_type' => 'Corporate',
                'registration_date' => '2023-01-15'
            ],
            [
                'nama' => 'Kementerian Komunikasi dan Informatika',
                'contact_person' => 'Siti Nurhaliza',
                'email' => 'siti.nurhaliza@kominfo.go.id',
                'phone' => '021-87654321',
                'alamat' => 'Jl. Medan Merdeka Barat No. 9, Jakarta Pusat',
                'company_type' => 'Government',
                'registration_date' => '2023-03-20'
            ],
            [
                'nama' => 'CV Maju Jaya Teknologi',
                'contact_person' => 'Ahmad Dahlan',
                'email' => 'ahmad@majujaya.com',
                'phone' => '022-11223344',
                'alamat' => 'Jl. Dago No. 35, Bandung',
                'company_type' => 'Corporate',
                'registration_date' => '2023-06-10'
            ],
            [
                'nama' => 'John Doe',
                'contact_person' => 'John Doe',
                'email' => 'john@example.com',
                'phone' => '081234567890',
                'alamat' => 'Jl. Sudirman No. 123, Surabaya',
                'company_type' => 'Individual',
                'registration_date' => '2024-01-05'
            ],
        ];

        foreach ($clients as $client) {
            Client::create($client);
        }
    }
}
