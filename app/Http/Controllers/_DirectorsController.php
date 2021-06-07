<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorsController extends Controller
{
    public function index()
    {
        $director = \App\Models\Director::all();

        return view('director-movies', ['director' => $director]);
    }
}
