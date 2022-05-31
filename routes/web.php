<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\City;

use App\Http\Controllers\UserController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\Controller;

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


Route::get('/', [Controller::class, 'index'])->name('index');

Route::get('/users', [UserController::class, 'userIndex'])->name('users.index');
Route::post('/users/create', [UserController::class, 'createUser'])->name('users.create');
Route::get('/users/{id}/edit', [UserController::class, 'editUser'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'updateUser'])->name('users.update');

Route::get('/cities', [CityController::class, 'citiesIndex'])->name('cities.index');
Route::post('/cities/create', [CityController::class, 'createCity'])->name('cities.create');
Route::get('/city/{id}/edit', [CityController::class, 'editCity'])->name('cities.edit');
Route::put('/cities/{id}', [CityController::class, 'updateCity'])->name('cities.update');







