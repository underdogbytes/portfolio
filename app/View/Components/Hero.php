<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Hero extends Component
{
    public function __construct(public $bg)
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.hero');
    }
}
