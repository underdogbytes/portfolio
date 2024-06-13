<?php

namespace App\Http\Controllers;

use App\View\Components\LayoutNavbar;

class HomeController extends Controller
{
    public function index()
    {
        $projectsJson = file_get_contents(public_path('data/best-projects.js'));
        $cleanedContent = preg_replace('/[\x00-\x1F\x7F]/', '', $projectsJson);
        $projects = json_decode($projectsJson, true);
        return view('home', ['projects'=> $projects]);
    }
}