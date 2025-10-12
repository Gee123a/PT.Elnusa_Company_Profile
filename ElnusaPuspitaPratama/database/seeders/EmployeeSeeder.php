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
        ];

        foreach ($employees as $employee) {
            Employee::create($employee);
        }
    }
}
