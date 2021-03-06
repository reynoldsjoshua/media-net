<?php

namespace Database\Factories;

use App\Models\GameNews;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameNewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GameNews::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'url' => $this->faker->imageUrl($width = 640, $height = 480, 'sports', true, 'Faker'),
        ];
    }
}
