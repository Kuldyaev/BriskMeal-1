<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RecipeController;

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
Route::get('/catalog', [RecipeController::class, 'index'])
    ->name('catalog');
Route::get('/recipe/{id}', [RecipeController::class, 'show'])->name('recipe');
Route::get('/plans', function () {
    return view('plans');
})->name('plans');
Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
