<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GameNews extends Component
{
    public $gameNews;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($gameNews)
    {
        $this->gameNews = $gameNews;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.index.game-news');
    }
}
