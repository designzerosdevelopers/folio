<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample language data
        $languages = [
            [
                'user_id' => 1, // Assuming user ID 1
                'language_name' => 'English',
                'visibility' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'language_name' => 'French',
                'visibility' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1, // Assuming user ID 2
                'language_name' => 'Spanish',
                'visibility' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more language entries as needed
        ];

        // Insert data into the database
        DB::table('languages')->insert($languages);
    }
}
