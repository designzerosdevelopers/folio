<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample service data
        $services = [
            [
                'user_id' => 1, // Assuming user ID 1
                'icon_id' => 1, // Assuming you have an icon with ID 1
                'service_title' => 'Web Design',
                'svg_icon_code' => 'icon-code-here', // SVG icon code
                'service_description' => 'Designing beautiful and responsive websites.',
                'visibility' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'icon_id' => 1, // Assuming you have an icon with ID 2
                'service_title' => 'Mobile App Development',
                'svg_icon_code' => 'icon-code-here', // SVG icon code
                'service_description' => 'Creating innovative mobile applications for iOS and Android.',
                'visibility' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more service entries as needed
        ];

        // Insert data into the database
        DB::table('services')->insert($services);
    }
}

