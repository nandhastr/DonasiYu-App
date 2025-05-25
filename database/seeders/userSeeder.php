<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'id' => (string) Str::uuid(),
            'name' => 'Nanda',
            'email' => 'nanda@example.com',
            'password' => Hash::make('password123'),
        ]);
    }
}
