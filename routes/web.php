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
    Route::get('/orders/pizzas', 'index')->name('pizzas.index')->middleware('auth');
    Route::get('/orders/pizzas/create', 'create')->name('pizzas.create');
    Route::post('/orders/pizzas', 'store')->name('pizzas.store');
    Route::get('/orders/pizzas/{id}', 'show')->name('pizzas.show')->middleware('auth');
    Route::delete('/orders/pizzas/{id}', 'destroy')->name('pizzas.destroy')->middleware('auth');
});

$blackList = [
    'register' => false
];
Auth::routes($blackList);

Route::get('/home', [HomeController::class, 'index'])->name('home');
