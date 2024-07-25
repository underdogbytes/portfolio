<?php

namespace App\Http\Controllers;

use App\View\Components\LayoutNavbar;
use App\Services\ProjectService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }

    public function index()
    {
        $highlights = $this->projectService->loadProjects('data/highlights.js');
        return view('home', ['highlights' => $highlights]);
    }
}