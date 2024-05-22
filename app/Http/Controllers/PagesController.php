<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function cv() { return view('pages.cv'); }
    public function contato() { return view('pages.contato'); }
    public function manifesto() { return view('pages.manifesto'); }
}
