<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Pemain;

class PemainSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Pemain::create([
                'nama_pemain' => fake()->name(3),
                'no_punggung' => fake()->numberBetween(1, 80),
                'posisi' => fake()->sentence(3),
            ]);
        }
    }
}
