<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [
            ['Juan',    'Dela Cruz', 'juan@example.com',    1, 'Programmer'],
            ['Maria',   'Santos',    'maria@example.com',   1, 'System Analyst'],
            ['Jose',    'Reyes',     'jose@example.com',    1, 'Network Admin'],
            ['Ana',     'Garcia',    'ana@example.com',     2, 'HR Officer'],
            ['Pedro',   'Ramos',     'pedro@example.com',   2, 'Recruiter'],
            ['Luisa',   'Mendoza',   'luisa@example.com',   2, 'HR Assistant'],
            ['Carlos',  'Bautista',  'carlos@example.com',  3, 'Accountant'],
            ['Elena',   'Cruz',      'elena@example.com',   3, 'Auditor'],
            ['Miguel',  'Torres',    'miguel@example.com',  3, 'Bookkeeper'],
            ['Sofia',   'Navarro',   'sofia@example.com',   4, 'Marketing Lead'],
            ['Rafael',  'Aquino',    'rafael@example.com',  4, 'Content Creator'],
            ['Isabel',  'Villanueva','isabel@example.com',  4, 'Designer'],
            ['Juanita', 'Lopez',     'juanita@example.com', 1, 'QA Tester'],
        ];

        foreach ($employees as [$first, $last, $email, $deptId, $position]) {
            Employee::create([
                'first_name'    => $first,
                'last_name'     => $last,
                'email'         => $email,
                'department_id' => $deptId,
                'position'      => $position,
            ]);
        }
    }
}
