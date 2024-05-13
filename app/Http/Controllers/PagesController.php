<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function manifesto()
    {
        return view('pages.manifesto');
    }
    
    public function portfolio()
    {
        return view('pages.portfolio');
    }
}
