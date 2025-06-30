<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});


// Public Routes --> Routes to the main pages
Route::get('/about-wabag-dda', [HomeController::class, 'aboutWabagDDA'])->name('home.about');
Route::get('/about/mps-message', [HomeController::class, 'mpsMessage'])->name('home.about.mps-message');
Route::get('/about/ceos-message', [HomeController::class, 'ceosMessage'])->name('home.about.ceos-message');
Route::get('/about/mission-vision', [HomeController::class, 'missionVision'])->name('home.about.mission-vision');
Route::get('/about/organization-structure', [HomeController::class, 'orgStructure'])->name('home.about.org-structure');

