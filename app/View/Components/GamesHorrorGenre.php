<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GamesHorrorGenre extends Component
{
    public $games;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($games)
    {
        $this->games = $games;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.games.games-horror-genre');
    }
}
