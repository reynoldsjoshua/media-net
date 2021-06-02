<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        $movie = \App\Models\Movie::all();

        return view('home', ['movie' => $movie]);
    }
}
