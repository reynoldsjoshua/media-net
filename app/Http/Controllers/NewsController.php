<?php

namespace App\Http\Controllers;

use App\Models\GameNews;
use App\Models\MovieNews;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function getAllNews(){
        $gameNews = GameNews::all();
        $movieNews = MovieNews::all();

        return view('index', [
            'gameNews' => $gameNews,
            'movieNews' => $movieNews
        ]);
    }
}
