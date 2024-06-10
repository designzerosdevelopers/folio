<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(IconSeeder::class);
        $this->call(TemplateSeeder::class);
        $this->call(SkillSeederTable::class);
        $this->call(EducationSeederTable::class);
        $this->call(ExperienceSeederTable::class);
        $this->call(LanguageSeederTable::class);
        $this->call(ServicesSeederTable::class);
        $this->call(WorkSeederTable::class);
    }
}
