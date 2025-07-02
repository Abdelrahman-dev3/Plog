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
            'name' => 'User Six',
            'email' => 'user6@example.com',
            'password' => Hash::make('password6'),
        ]);
        
        User::create([
            'name' => 'User Seven',
            'email' => 'user7@example.com',
            'password' => Hash::make('password7'),
        ]);
        
        User::create([
            'name' => 'User Eight',
            'email' => 'user8@example.com',
            'password' => Hash::make('password8'),
        ]);
        
        User::create([
            'name' => 'User Nine',
            'email' => 'user9@example.com',
            'password' => Hash::make('password9'),
        ]);
        
        User::create([
            'name' => 'User Ten',
            'email' => 'user10@example.com',
            'password' => Hash::make('password10'),
        ]);
        
    }
}
