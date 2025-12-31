<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            [
                // UNIQUE FIELD
                'email' => 'gantavyas@gmail.com',
            ],
            [
                'name' => 'Gantavya Admin',
                'role' => 'admin',
                'password' => Hash::make('password'), // change later
            ]
        );
    }
}
