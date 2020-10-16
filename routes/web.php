<?php

use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;
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

Route::get('/', [NavController::class, "welcome"]);
Route::get('/ajout', [NavController::class, "add"]);
Route::get('/liste', [NavController::class, "show"]);

Route::post('/add', [ActionController::class, "add"]);
Route::post('/delete', [ActionController::class, "delete"]);
Route::post('/modification', [ActionController::class, "modify"]);
Route::post('/update', [ActionController::class, "update"]);
