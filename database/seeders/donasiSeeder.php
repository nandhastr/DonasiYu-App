<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Donasi;
use App\Models\User;
use Illuminate\Support\Str;

class DonasiSeeder extends Seeder
{
    public function run()
    {
        $user = User::first();
        dd($user->id);

        Donasi::create([
            'id' => (string) Str::uuid(),
            'user_id' => $user->id,
            'nominal' => 100000,
            'peristiwa' => 'Bantuan Pendidikan Anak Yatim',
            'pesan' => 'Semoga bermanfaat',
        ]);
    }
}
