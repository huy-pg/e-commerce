<?php

namespace App\View\Components;
use App\Http\Controllers\Controller;

use App\Banner;
use Illuminate\View\Component;

class slider extends Component
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
     * @return \Illuminate\View\View|string
     */
    public function render()
    {$banners=Banner::all();
        return view('components.slider',compact('banners'));
    }
}
