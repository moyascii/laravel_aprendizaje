<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

Route::resource('portfolio', ProjectController::class)
    ->parameters(['portfolio' => 'project'])
    ->names('projects');

//Route::get('/portfolio', [ProjectController::class, 'index'])->name('projects.index');
//Route::get('/portfolio/crear', [ProjectController::class, 'create'])->name('projects.create');
//
//Route::get('/portfolio/{project}/editar', [ProjectController::class, 'edit'])->name('projects.edit');
////Puedo usar put o patch
//Route::patch('/portfolio/{project}', [ProjectController::class, 'update'])->name('projects.update');
//
//Route::post('/portfolio', [ProjectController::class, 'store'])->name('projects.store');
//Route::get('/portfolio/{project}', [ProjectController::class, 'show'])->name('projects.show');
//
//Route::delete('/portfolio/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');

Route::view('/contact', 'contact')->name('contact');

Route::post('contact', [\App\Http\Controllers\MessageController::class, 'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
