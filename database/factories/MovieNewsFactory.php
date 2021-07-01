<?php

namespace Database\Factories;

use App\Models\MovieNews;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieNewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MovieNews::class;

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
            'url' => $this->faker->url(),
        ];
    }
}
