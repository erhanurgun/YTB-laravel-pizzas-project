<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(PizzaController::class)->group(function () {
    // bu kısımdaki sıralama önemli!
    Route::get('/pizzas', 'index')->middleware('auth');
    Route::get('/pizzas/create', 'create');
    Route::post('/pizzas', 'store');
    Route::get('/pizzas/{id}', 'show')->middleware('auth');
    Route::delete('/pizzas/{id}', 'destroy')->middleware('auth');
});


Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
