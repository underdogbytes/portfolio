<?php

namespace App\View\Components\portfolio;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class galleryItem extends Component
{
    public function __construct(public $imgUrl, public $link = '')
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.portfolio.gallery-item');
    }
}