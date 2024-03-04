<?php

namespace App\Http\Controllers;

use App\View\Components\LayoutNavbar;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}