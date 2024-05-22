<?php

namespace App\View\Components\Portfolio;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class headItem extends Component
{
    public function __construct(public $info)
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.portfolio.head-item');
    }
}
