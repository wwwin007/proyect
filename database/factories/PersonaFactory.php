<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Persona>
 */
class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->firstName(),
            'apell_pat'=>$this->faker->lastName(),
            'apell_mat'=>$this->faker->lastName(),
            'procedencia'=>$this->faker->randomElement(['sucre','potosí','cochabamba','santa cruz','tarija','la paz','oruro','pando']),
            'fecha_nac'=>$this->faker->date()
        ];
    }
}
