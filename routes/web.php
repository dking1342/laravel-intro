<?php

use App\Http\Controllers\PizzaController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
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

Route::get('/pizzas', [PizzaController::class,"index"])->middleware(['auth'])->name("pizzas.index");
Route::get("/pizzas/create",[PizzaController::class,"create"])->name("pizzas.create");
Route::post("/pizzas",[PizzaController::class,"store"])->name("pizzas.store");
Route::get("/pizzas/{id}", [PizzaController::class,"show"])->middleware(['auth'])->name("pizzas.show");
Route::delete("/pizzas/{id}", [PizzaController::class,"destroy"])->middleware(['auth'])->name("pizzas.destroy");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
