<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'judul' => $this->faker->sentence(mt_rand(4,15)),
           'jenis_id' => $this->faker->numberBetween(1, 5),
           'content' => $this->faker->paragraph(),
           'create_by' => $this->faker->name(), 
        ];
    }
}
