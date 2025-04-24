<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Admin::insert([
            [
                'username'   => 'admin1',
                'email'      => 'admin1@example.com',
                'password'   => Hash::make('password1'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username'   => 'admin2',
                'email'      => 'admin2@example.com',
                'password'   => Hash::make('password2'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
