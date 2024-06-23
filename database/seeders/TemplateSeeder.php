<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Template;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Template::create([
            'temp_name' => 'marlin',
            'temp_image' => 'marlin.jpg',
            'temp_type' => 'pf'

        ]);

        Template::create([
            'temp_name' => 'brad',
            'temp_image' => 'brad.jpg',
            'temp_type' => 'pf'

        ]);

        Template::create([
            'temp_name' => 'super',
            'temp_image' => 'super.jpg',
            'temp_type' => 'pf'

        ]);

        Template::create([
            'temp_name' => 'tao',
            'temp_image' => 'tao.jpg',
            'temp_type' => 'cv',
            'temp_setting' => ''

        ]);
    }
}
