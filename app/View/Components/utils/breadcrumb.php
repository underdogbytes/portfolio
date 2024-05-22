<?php

namespace App\View\Components\utils;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class breadcrumb extends Component
{
    
    public function __construct(public $breads)
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.utils.breadcrumb');
    }
}
