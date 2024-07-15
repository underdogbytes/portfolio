<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PortfolioController;

Route::get('/', [HomeController::class, 'index']);
Route::get('contato', [PagesController::class, 'contato']);
Route::get('sobre', [PagesController::class, 'sobre']);
Route::get('cv', [PagesController::class, 'cv']);
Route::get('manifesto', [PagesController::class, 'manifesto']);
Route::get('apoio', [PagesController::class, 'apoio']);

Route::controller(PortfolioController::class)->group(function(){
  Route::get('portfolio', 'index');
  Route::get('portfolio/{slug}', 'show');
});