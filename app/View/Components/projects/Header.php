<?php

namespace App\View\Components\Projects;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    public function __construct(public $project)
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.projects.header');
    }
}
