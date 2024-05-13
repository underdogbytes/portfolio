<?php

namespace App\View\Components\portfolio;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class galleryItem extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $imgUrl, public $link)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.portfolio.gallery-item');
    }
}
