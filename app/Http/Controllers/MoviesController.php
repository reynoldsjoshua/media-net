<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Director;
use Illuminate\Http\Request;

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
        $movies = Movie::all();

        $directors = Director::all();

        return view('index', [
            'movies' => $movies,
            'directors' => $directors
        ]);

    }

    // public function deleteAMovie($director)
    // {
    //     $director = Director::where('name', $director)->first();
    //     $director->director()->detach();
    //     $director->delete();

    //     return redirect('index');
    // }
}
