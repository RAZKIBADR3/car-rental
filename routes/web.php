<?php

use App\Http\Controllers\LocationsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VehiculesController;
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


//vehicles routes
Route::get('/vehicules',[VehiculesController::class, 'index']);
Route::get('/vehicule/create',[VehiculesController::class, 'create'])->middleware('auth.check');
Route::post('/vehicule/create',[VehiculesController::class, 'store'])->middleware('auth.check');

// users routes
Route::get('/user/login',[UsersController::class, 'loginForm'])->name('login');
Route::post('/user/login',[UsersController::class, 'login']);
Route::get('/user/logout',[UsersController::class, 'logOut'])->middleware('auth.check');


// locations routes
Route::get('/location/louer/{vehicule}',[LocationsController::class, 'louer']);
Route::post('/location/valider',[LocationsController::class, 'valider']);

Route::get('/locations',[LocationsController::class, 'index']);
Route::get('/locations/search',[LocationsController::class, 'search']);
