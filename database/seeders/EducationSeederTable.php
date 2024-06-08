<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $educations = [
            [
                'user_id' => 1, // Assuming user ID 1
                'degree_title' => 'Bachelor of Science in Computer Science',
                'institute' => 'University of XYZ',
                'degree_start' => '2015-09-01',
                'degree_end' => '2019-06-01',
                'degree_description' => 'Studied computer science with a focus on software development.',
                'visibility' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1, // Assuming user ID 2
                'degree_title' => 'Master of Business Administration',
                'institute' => 'ABC Business School',
                'degree_start' => '2018-09-01',
                'degree_end' => '2020-06-01',
                'degree_description' => 'Specialized in marketing and entrepreneurship.',
                'visibility' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more education entries as needed
        ];

        // Insert data into the database
        DB::table('educations')->insert($educations);
    }
}
