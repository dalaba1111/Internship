<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/pizzas', 'Pizzacontroller@index')->name('pizzas.index')->middleware('auth');
Route::get('/pizzas/create', 'Pizzacontroller@create')->name('pizzas.create');
Route::post('/pizzas', 'Pizzacontroller@store')->name('pizzas.store');
Route::get('/pizzas/{id}', 'Pizzacontroller@show')->name('pizzas.show')->middleware('auth');;
Route::delete('/pizzas/{id}', 'Pizzacontroller@destroy')->name('pizzas.destroy')->middleware('auth');;

Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

