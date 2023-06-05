<?php

namespace Database\Seeders;

use App\Models\compra;
use App\Models\producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        producto::factory(20)->hasAttached(compra::factory()->count(2))->create();
    }
}
