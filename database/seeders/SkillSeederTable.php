<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample skills data
        $skills = [
            [
                'user_id' => 1, // Assuming user ID 1
                'skill_name' => 'Programming',
                'skill_percentage' => 80,
                'visibility' => true,
            ],
            [
                'user_id' => 1,
                'skill_name' => 'Web Development',
                'skill_percentage' => 90,
                'visibility' => true,
            ],
            [
                'user_id' => 1, // Assuming user ID 2
                'skill_name' => 'Data Analysis',
                'skill_percentage' => 70,
                'visibility' => false,
            ],
            // Add more skills as needed
        ];

        // Insert data into the database
        DB::table('skills')->insert($skills);
    }
}
