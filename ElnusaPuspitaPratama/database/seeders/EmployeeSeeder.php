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
                'nama' => 'Andi Wijaya',
                'alamat' => 'Jl. Sudirman No. 10, Jakarta Pusat',
                'position' => 'Project Manager',
                'tingkatan' => 'Manager',
                'phone' => '081234567890',
                'email' => 'andi.wijaya@elnusa.com',
                'hire_date' => '2020-05-15',
                'specialization' => 'Telecommunication Infrastructure'
            ],
            [
                'nama' => 'Rina Lestari',
                'alamat' => 'Jl. Asia Afrika No. 25, Bandung',
                'position' => 'Senior Project Manager',
                'tingkatan' => 'Senior',
                'phone' => '082345678901',
                'email' => 'rina.lestari@elnusa.com',
                'hire_date' => '2021-08-20',
                'specialization' => 'Network Engineering'
            ],
            [
                'nama' => 'Budi Hartono',
                'alamat' => 'Jl. Pemuda No. 5, Surabaya',
                'position' => 'Technical Lead',
                'tingkatan' => 'Senior',
                'phone' => '083456789012',
                'email' => 'budi.hartono@elnusa.com',
                'hire_date' => '2019-03-10',
                'specialization' => 'Data Center Management'
            ],
            [
                'nama' => 'Dewi Sartika',
                'alamat' => 'Jl. Malioboro No. 88, Yogyakarta',
                'position' => 'Project Coordinator',
                'tingkatan' => 'Junior',
                'phone' => '084567890123',
                'email' => 'dewi.sartika@elnusa.com',
                'hire_date' => '2023-02-14',
                'specialization' => 'Smart City Solutions'
            ],
        ];

        foreach ($employees as $employee) {
            Employee::create($employee);
        }
    }
}
