<?php

namespace Database\Seeders;

use App\Models\User;
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
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Atasan 1',
            'email' => 'approver1@gmail.com',
            'password' => Hash::make('pas123'),
            'role' => 'approver1',
        ]);

        User::create([
            'name' => 'Atasan 2',
            'email' => 'approver2@gmail.com',
            'password' => Hash::make('pas321'),
            'role' => 'approver2',
        ]);
    }
}
