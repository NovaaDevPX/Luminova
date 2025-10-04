<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Alice',
            'email' => 'alice@example.com',
            'password' => bcrypt('password'),
            'phone' => '0811111111',
            'address' => 'Jl. Sudirman No. 1, Jakarta',
        ]);

        User::create([
            'name' => 'Bob',
            'email' => 'bob@example.com',
            'password' => bcrypt('password'),
            'phone' => '0822222222',
            'address' => 'Jl. Gatot Subroto No. 5, Surabaya',
        ]);
    }
}
