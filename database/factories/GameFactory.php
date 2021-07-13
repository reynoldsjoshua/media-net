<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Game::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'url' => $this->faker->imageUrl($width = 640, $height = 480, 'sports', true, 'Faker'),
            'release_date' => $this->faker->date(),
            'genre' => $this->faker->randomElement(['Horror', 'Strategy', 'Puzzle', 'Action', 'Fantasy', 'RPG', 'Sports', 'FPS']),
            'rating' => $this->faker->randomLetter(),
        ];
    }
}