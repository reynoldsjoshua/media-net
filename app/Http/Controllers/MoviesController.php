<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Director;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MoviesController extends Controller
{
    public function getMoviesByDirector($directorId)
    {

        $director = Director::findOrFail($directorId);

        return view('index', [
            'director' => $director
        ]);
    }

    public function getAllMovies()
    {
        $movies = Movie::with('director')->get();

        return view('index', [
            'movies' => $movies,
        ]);

    }

    public function index()
    {
        $movies = Movie::with('director')->get();
        $horror = Movie::with('director')->where('genre', '=', 'Horror')->get();

        return view('movies', [
            'movies' => $movies,
            'horror' => $horror,
        ]);

    }
}
