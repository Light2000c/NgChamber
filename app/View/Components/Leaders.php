<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Leaders extends Component
{

    public $leaders;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($leaders)
    {
        $this->leaders = $leaders;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.leaders');
    }
}
