<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CompetitionsController;
use \App\Http\Controllers\PlayersController;
use \App\Http\Controllers\SchoolsController;

use \App\Http\Controllers\PagesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [
    PagesController::class,
    'home'
])->name('home');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

route::resource('players', PlayersController::class);
route::resource('competitions', CompetitionsController::class);
route::resource('schools', SchoolsController::class);
