<?php

namespace App\View\Components\Projects;

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
        return view('components.projects.best-projects', ['projects' => $this->projects]);
    }
}