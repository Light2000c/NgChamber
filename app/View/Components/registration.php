<?php

namespace App\View\Components;

use Illuminate\View\Component;

class registration extends Component
{

    public $plan;
    public $amount;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($plan, $amount)
    {
        $this->plan = $plan;
        $this->amount = $amount;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.registration');
    }



}
