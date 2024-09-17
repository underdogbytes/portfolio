<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function apoio() { return view('pages.apoio'); }
    public function contato() { return view('pages.contato'); }
    public function cv() { return view('pages.cv'); }
    public function manifesto() { return view('pages.manifesto'); }
    public function sobre() { return view('pages.sobre'); }
}