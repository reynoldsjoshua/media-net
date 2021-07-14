<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ComedyGenre extends Component
{
    public $movies;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($movies)
    {
        $this->movies = $movies;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.movies.comedy-genre');
    }
}
