<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetController;
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

Route::get('/portfolio', [ProjetController::class, 'index'])->name('projets.index');
Route::get('/portfolio/crear', [ProjetController::class, 'create'])->name('projets.create');
Route::post('/portfolio', [ProjetController::class, 'store'])->name('projets.store');
Route::get('/portfolio/{project}', [ProjetController::class, 'show'])->name('projets.show');

Route::view('/contact', 'contact')->name('contact');

Route::post('contact', [\App\Http\Controllers\MessageController::class, 'store']);
