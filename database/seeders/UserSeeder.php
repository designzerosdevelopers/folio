<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=> 'saqib',
            'email'=> 'Saqib@gmail.com',
            'portfolio_id'=>3,
            'password'=> Hash::make('password')
        ]);
    }
}
