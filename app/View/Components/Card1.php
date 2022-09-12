<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card1 extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $ex1;

    public function __construct($ex1)
    {
        $this->ex1 = $ex1;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card1');
    }
}
