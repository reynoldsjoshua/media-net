<?php

namespace Database\Factories;

use App\Models\Movie;
use App\Models\Director;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->sentence(),
            'released_at' => $this->faker->date(),
            'category' => $this->faker->randomElement(['Horror', 'Drama', 'Comedy', 'Action', 'Scyfy']),
            'director_id' => Director::factory()
        ];
    }
}
