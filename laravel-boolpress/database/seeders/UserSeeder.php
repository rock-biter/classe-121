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
            'name' => 'Mimmo Mario',
            'email' => 'mimmo@gmail.com',
            'password' => Hash::make('admin'),
        ]);

        // generare nmila utenti random
    }
}
