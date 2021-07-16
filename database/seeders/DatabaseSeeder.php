<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Movie;
use App\Models\GameNews;
use App\Models\MovieNews;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Movie::factory(50)->create();
        Game::factory(50)->create();
        MovieNews::factory(50)->create();
        GameNews::factory(50)->create();
    }
}