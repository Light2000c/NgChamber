<?php

namespace App\View\Components;

use App\Models\News;
use Illuminate\View\Component;

class latestNews extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $news = News::orderBy('created_at', 'Desc')->take(4)->get();
       
        return view('components.latestnews', [
            'news' => $news,
        ]);
    }
}
