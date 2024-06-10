<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample work data
        $works = [
            [
                'user_id' => 1, // Assuming user ID 1
                'work_title' => 'Portfolio Website',
                'work_url' => 'https://example.com/portfolio',
                'work_date' => '2022-01-15',
                'work_description' => 'Designed and developed a personal portfolio website.',
                'visibility' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'work_title' => 'E-commerce Website',
                'work_url' => 'https://example.com/ecommerce',
                'work_date' => '2022-05-20',
                'work_description' => 'Developed an e-commerce website for a client.',
                'visibility' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more work entries as needed
        ];

        // Insert data into the database
        DB::table('works')->insert($works);
    }
}

