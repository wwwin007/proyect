<?php

namespace Database\Seeders;

use App\Models\compra;
use App\Models\producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        compra::factory(20)->hasAttached(producto::factory()->count(2))->create();

    }
}
