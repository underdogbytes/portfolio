<?php

namespace App\View\Components\portfolio;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\File;
use Illuminate\View\Component;

class BestProjects extends Component
{
    public $projects;

    public function __construct($projects)
    {
        $this->projects = $projects;
    }

    public function render(): View|string
    {
        return view('components.portfolio.best-projects', ['projects' => $this->projects]);
    }
}