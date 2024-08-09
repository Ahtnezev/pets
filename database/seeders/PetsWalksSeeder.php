<?php

namespace Database\Seeders;

use App\Models\PetsWalks;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetsWalksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PetsWalks::factory(1)->create();
    }
}
