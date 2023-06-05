<?php

namespace Database\Factories;

use App\Models\proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'productos'=>$this->faker->randomElement(['HDD','SSD','Portatil','procesador i5','silla gaming','usb 32g','impresora epson L210','dvr','nvr']),
            'precio'=>$this->faker->randomFloat('2',2,1),
            'stock'=>$this->faker->numberBetween(50,100),
            //'prove_id'=>proveedor::all()->random()->id
            'proveedor_id'=>$this->faker->randomElement(proveedor::pluck('id')->toArray())

        ];
    }
}
