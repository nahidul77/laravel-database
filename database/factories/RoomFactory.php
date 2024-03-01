<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'room_number' => fake()->numberBetween(1, 50),
            'room_size' => fake()->numberBetween(1, 5),
            'price' => fake()->numberBetween(100, 500),
            'description' => fake()->text(1000),
        ];
    }
}
