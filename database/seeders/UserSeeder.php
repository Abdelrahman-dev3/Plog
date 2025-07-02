<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'User One',
            'email' => 'user1@example.com',
            'password' => Hash::make('password1'),
        ]);

        User::create([
            'name' => 'User Two',
            'email' => 'user2@example.com',
            'password' => Hash::make('password2'),
        ]);

        User::create([
            'name' => 'User Three',
            'email' => 'user3@example.com',
            'password' => Hash::make('password3'),
        ]);

        User::create([
            'name' => 'User Four',
            'email' => 'user4@example.com',
            'password' => Hash::make('password4'),
        ]);

        User::create([
            'name' => 'User Five',
            'email' => 'user5@example.com',
            'password' => Hash::make('password5'),
        ]);
    }
}
