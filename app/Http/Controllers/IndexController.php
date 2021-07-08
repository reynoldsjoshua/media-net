<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Movie;
use App\Models\GameNews;
use App\Models\MovieNews;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $movies = Movie::with('director')->get();
        $games = Game::all();
        $gameNews = GameNews::all();
        $movieNews = MovieNews::all();

        return view('index', [
            'movies' => $movies,
            'games' => $games,
            'gameNews' => $gameNews,
            'movieNews' => $movieNews
        ]);
    }
}
