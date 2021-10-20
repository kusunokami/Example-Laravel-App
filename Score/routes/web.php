<?php

use App\Models\MusicScore;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\ScoreController;




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

Route::get('/', [MusicController::class, 'index']);
Route::get('/addScore',[ScoreController::class, 'addScore']);
Route::post('/addScore/store', [ScoreController::class, 'storeScore']);
Route::get('/deleteScore/{id}',[ScoreController::class, 'delScore']);