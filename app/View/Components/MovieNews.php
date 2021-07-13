<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MovieNews extends Component
{
    public $movieNews;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($movieNews)
    {
        $this->movieNews = $movieNews;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.movie-news');
    }
}
