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
        Movie::factory(20)->create();
        Game::factory(20)->create();
        MovieNews::factory(20)->create();
        GameNews::factory(20)->create();
    }
}