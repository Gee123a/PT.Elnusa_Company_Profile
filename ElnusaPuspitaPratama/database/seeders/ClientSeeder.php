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
                'nama' => 'Perorangan',
                'contact_person' => '-',
                'email' => '-',
                'phone' => '-',
                'alamat' => '-',
                'company_type' => 'Perorangan',
                'registration_date' => '-'
            ],
            [
                'nama' => 'Perorangan',
                'contact_person' => '-',
                'email' => '-',
                'phone' => '-',
                'alamat' => '-',
                'company_type' => 'Perorangan',
                'registration_date' => '-'
            ],

        ];

        foreach ($clients as $client) {
            Client::create($client);
        }
    }
}
