<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [
            [
                'nama' => 'Stephanie Jessica Santoso',
                'alamat' => 'Grand Pakuwon',
                'position' => 'Project Manager',
                'tingkatan' => 'Manager',
                'phone' => '081234567890',
                'email' => 'stephanie.santoso@elnusa.com',
                'hire_date' => '2020-05-15',
                'specialization' => 'Telecommunication Infrastructure'
            ],
            [
                'nama' => 'Andi Wijaya',
                'alamat' => 'Jl. Diponegoro No. 5, Surabaya',
                'position' => 'Site Engineer',
                'tingkatan' => 'Senior',
                'phone' => '081355577799',
                'email' => 'andi.wijaya@elnusa.com',
                'hire_date' => '2018-09-10',
                'specialization' => 'Civil Engineering'
            ],
            [
                'nama' => 'Dewi Sartika',
                'alamat' => 'Jl. Pemuda No. 12, Yogyakarta',
                'position' => 'Finance Staff',
                'tingkatan' => 'Junior',
                'phone' => '082133344455',
                'email' => 'dewi.sartika@elnusa.com',
                'hire_date' => '2021-01-20',
                'specialization' => 'Accounting'
            ],
            [
                'nama' => 'Rudi Hartono',
                'alamat' => 'Jl. Sudirman No. 25, Bandung',
                'position' => 'Quality Control',
                'tingkatan' => 'Senior',
                'phone' => '082198765432',
                'email' => 'rudi.hartono@elnusa.com',
                'hire_date' => '2017-07-05',
                'specialization' => 'Quality Assurance'
            ],
            [
                'nama' => 'Siti Aminah',
                'alamat' => 'Jl. Merdeka No. 10, Jakarta',
                'position' => 'HR Staff',
                'tingkatan' => 'Junior',
                'phone' => '081288899900',
                'email' => 'siti.aminah@elnusa.com',
                'hire_date' => '2022-03-15',
                'specialization' => 'Human Resources'
            ],
            [
                'nama' => 'Dedi Pratama',
                'alamat' => 'Jl. Gajah Mada No. 8, Semarang',
                'position' => 'Procurement Officer',
                'tingkatan' => 'Junior',
                'phone' => '081299988877',
                'email' => 'dedi.pratama@elnusa.com',
                'hire_date' => '2023-02-10',
                'specialization' => 'Procurement'
            ],
            [
                'nama' => 'Rina Dewi',
                'alamat' => 'Jl. Kenjeran No. 15, Surabaya',
                'position' => 'Site Engineer',
                'tingkatan' => 'Junior',
                'phone' => '081377766655',
                'email' => 'rina.dewi@elnusa.com',
                'hire_date' => '2022-08-01',
                'specialization' => 'Civil Engineering'
            ],
            [
                'nama' => 'Budi Santoso',
                'alamat' => 'Jl. Pahlawan No. 20, Malang',
                'position' => 'Project Coordinator',
                'tingkatan' => 'Manager',
                'phone' => '081366655544',
                'email' => 'budi.santoso@elnusa.com',
                'hire_date' => '2019-11-25',
                'specialization' => 'Project Management'
            ],
            [
                'nama' => 'Andi Saputra',
                'alamat' => 'Jl. Kartini No. 7, Solo',
                'position' => 'IT Support',
                'tingkatan' => 'Junior',
                'phone' => '081344455566',
                'email' => 'andi.saputra@elnusa.com',
                'hire_date' => '2021-06-18',
                'specialization' => 'Information Technology'
            ],
            [
                'nama' => 'Maya Putri',
                'alamat' => 'Jl. Ahmad Yani No. 3, Surabaya',
                'position' => 'Marketing Executive',
                'tingkatan' => 'Junior',
                'phone' => '081322233344',
                'email' => 'maya.putri@elnusa.com',
                'hire_date' => '2020-10-05',
                'specialization' => 'Marketing'
            ],
        ];

        foreach ($employees as $employee) {
            Employee::create($employee);
        }
    }
}
