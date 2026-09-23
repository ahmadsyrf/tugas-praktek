<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Matakuliah;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $dosen = User::factory()->create([
            'name' => 'Dosen Pengampu',
            'email' => 'dosen@example.com',
        ]);

        Matakuliah::factory()->count(20)->create([
            'dosen_id' => $dosen->id,
        ]);

        $this->call([
            MahasiswaSeeder::class,
        ]);
    }
}