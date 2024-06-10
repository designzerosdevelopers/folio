<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample experience data
        $experiences = [
            [
                'user_id' => 1, // Assuming user ID 1
                'company_name' => 'Tech Solutions Inc.',
                'position' => 'Software Engineer',
                'exp_start' => '2019-07-01',
                'exp_end' => '2021-12-31',
                'exp_description' => 'Developed web applications using modern technologies.',
                'visibility' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1, // Assuming user ID 2
                'company_name' => 'Marketing Agency XYZ',
                'position' => 'Marketing Manager',
                'exp_start' => '2020-01-01',
                'exp_end' => null, // Ongoing experience, end date is null
                'exp_description' => 'Led marketing campaigns and managed client accounts.',
                'visibility' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more experience entries as needed
        ];

        // Insert data into the database
        DB::table('experiences')->insert($experiences);
    }
}

