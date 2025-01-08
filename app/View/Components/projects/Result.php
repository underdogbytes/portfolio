<?php

namespace App\View\Components\Projects;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Result extends Component
{
    public function __construct(public $result)
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.projects.result');
    }
}
