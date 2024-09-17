<?php

namespace App\View\Components\portfolio;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class research extends Component
{
    public function __construct(public $project)
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.portfolio.research');
    }
}
