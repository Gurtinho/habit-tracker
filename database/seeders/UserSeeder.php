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
            'name' => 'admin',
            'email' => config('auth.users.admin.email'),
            'password' => config('auth.users.admin.password')
        ]);
        User::create([
            'name' => 'Jorge',
            'email' => config('auth.users.test.email'),
            'password' => config('auth.users.test.password')
        ]);
    }
}
