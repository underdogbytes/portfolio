<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ArtsController;

Route::get('/', [HomeController::class, 'index']);
Route::get('contato', [PagesController::class, 'contato']);
Route::get('sobre', [PagesController::class, 'sobre']);
Route::get('cv', [PagesController::class, 'cv']);
Route::get('manifesto', [PagesController::class, 'manifesto']);
Route::get('apoio', [PagesController::class, 'apoio']);

Route::controller(ProjectsController::class)->group(function(){
    Route::get('projetos', 'index')->name('projects.index');
    Route::get('projetos/{slug}', 'show')->name('projects.show');
});