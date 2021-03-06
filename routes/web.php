<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\locationsController; 
use App\Http\Controllers\episodesController; 
use App\Http\Controllers\crudController; 

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

Route::controller(locationsController::class)->group(function () {                  
    Route::get('/location', 'index');
    Route::get('/location/{id}', 'show');
 });

 Route::controller(episodesController::class)->group(function () {                  
    Route::get('/episode', 'index');
    Route::get('/episode/{id}', 'show');
 });

 Route::controller(crudController::class)->group(function () {                  
    Route::get('/{entity}', 'index');
    Route::delete('/{entity}', 'delete');
    Route::post('/{entity}', 'insert');
    Route::patch('/{entity}', 'insert');
 });
