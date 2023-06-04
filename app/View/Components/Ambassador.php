<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Ambassador extends Component
{

    public $ambassadors;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($ambassadors)
    {
        $this->ambassadors = $ambassadors;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ambassador');
    }
}
