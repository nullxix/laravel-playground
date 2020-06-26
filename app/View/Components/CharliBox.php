<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CharliBox extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $iterations;


    public function __construct($iterations)
    {
        $this->iterations = $iterations;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.charli-box');
    }
}
