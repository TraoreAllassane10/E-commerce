<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nom" => $this->faker->word(),
            "description" => $this->faker->paragraph(),
            "caracteristiques" => $this->faker->paragraph(),
            "couleur" => $this->faker->word(),
            "prix" => $this->faker->numberBetween(100000, 1000000),
            "stock" => $this->faker->numberBetween(1, 5),
            "image" => $this->faker->imageUrl(640, 480, 'products', true),
            "category_id" => rand(1, 3)
        ];
    }
}
