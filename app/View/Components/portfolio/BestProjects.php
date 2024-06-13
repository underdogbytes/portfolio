<?php

namespace App\View\Components\portfolio;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BestProjects extends Component
{
    public function __construct()
    {
        //
    }

    public function render(): View|Closure|string
    {
        $projectsJson = file_get_contents(public_path('data/best-projects.js'));
        var_dump($projectsJson);
        $cleanedContent = preg_replace('/[\x00-\x1F\x7F]/', '', $projectsJson);
        $projects = json_decode($projectsJson, true);
        return view('components.portfolio.best-projects', ['projects'=> $projects]);
    }
}