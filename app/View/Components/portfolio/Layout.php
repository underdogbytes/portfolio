<?php

namespace App\View\Components\portfolio;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{
    public function __construct(public $layout)
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.portfolio.layout');
    }
}
