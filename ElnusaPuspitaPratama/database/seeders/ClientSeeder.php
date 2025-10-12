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
                'nama' => 'Anonymous',
                'contact_person' => 'Budi Santoso',
                'email' => 'budi@nusantarajaya.com',
                'phone' => '081234567890',
                'alamat' => 'Jl. Merdeka No. 10, Jakarta',
                'company_type' => 'Individual',
                'registration_date' => '2022-03-15'
            ],
            [
                'nama' => 'Anonymous',
                'contact_person' => 'Siti Aminah',
                'email' => 'siti@majubersama.co.id',
                'phone' => '082198765432',
                'alamat' => 'Jl. Sudirman No. 25, Bandung',
                'company_type' => 'Individual',
                'registration_date' => '2021-11-20'
            ],
            [
                'nama' => 'Anonymous',
                'contact_person' => 'Andi Wijaya',
                'email' => 'andi@teknologiglobal.com',
                'phone' => '081355577799',
                'alamat' => 'Jl. Diponegoro No. 5, Surabaya',
                'company_type' => 'Corporate',
                'registration_date' => '2023-01-10'
            ],
            [
                'nama' => 'Anonymous',
                'contact_person' => 'Rina Dewi',
                'email' => 'rina@sumberrejeki.com',
                'phone' => '081288899900',
                'alamat' => 'Jl. Gajah Mada No. 8, Semarang',
                'company_type' => 'Corporate',
                'registration_date' => '2022-07-05'
            ],
            [
                'nama' => 'Anonymous',
                'contact_person' => 'Dedi Pratama',
                'email' => 'dedi@ciptamandiri.co.id',
                'phone' => '082133344455',
                'alamat' => 'Jl. Pemuda No. 12, Yogyakarta',
                'company_type' => 'Corporate',
                'registration_date' => '2021-09-18'
            ],
            [
                'nama' => 'Anonymous',
                'contact_person' => 'Agus Prasetyo',
                'email' => 'agus@pemprovjatim.go.id',
                'phone' => '081299988877',
                'alamat' => 'Jl. Pahlawan No. 20, Surabaya',
                'company_type' => 'Government',
                'registration_date' => '2022-04-12'
            ],
            [
                'nama' => 'Anonymous',
                'contact_person' => 'Maya Putri',
                'email' => 'maya@pemkabmalang.go.id',
                'phone' => '081322233344',
                'alamat' => 'Jl. Ahmad Yani No. 3, Malang',
                'company_type' => 'Government',
                'registration_date' => '2023-02-28'
            ],
            [
                'nama' => 'Anonymous',
                'contact_person' => 'Stephanie Jessica Santoso',
                'email' => 'stephanie@nusantarajaya.com',
                'phone' => '081234567891',
                'alamat' => 'Grand Pakuwon, Surabaya',
                'company_type' => 'Corporate',
                'registration_date' => '2022-08-15'
            ],
            [
                'nama' => 'Anonymous',
                'contact_person' => 'Andi Saputra',
                'email' => 'andi.saputra@gmail.com',
                'phone' => '081344455566',
                'alamat' => 'Jl. Kartini No. 7, Solo',
                'company_type' => 'Individual',
                'registration_date' => '2021-06-18'
            ],
            [
                'nama' => 'Anonymous',
                'contact_person' => 'Budi Santoso',
                'email' => 'budi@pemkotbandung.go.id',
                'phone' => '081366655544',
                'alamat' => 'Jl. Kenjeran No. 15, Bandung',
                'company_type' => 'Government',
                'registration_date' => '2023-05-10'
            ],
        ];

        foreach ($clients as $client) {
            Client::create($client);
        }
    }
}
