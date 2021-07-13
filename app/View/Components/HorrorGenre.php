<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HorrorGenre extends Component
{
    public $horror;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($horror)
    {
        $this->horror = $horror;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.movies.horror-genre');
    }
}
