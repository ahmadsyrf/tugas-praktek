<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Matakuliah;

class MatakuliahSeeder extends Seeder
{
    public function run(): void
    {
        $dosens = User::factory()->count(20)->create();

        foreach ($dosens as $dosen) {
            Matakuliah::factory()->create([
                'dosen_id' => $dosen->id,
            ]);
        }
    }
}