<?php

use App\Models\MusicScore;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\AddScoreController;



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

Route::get('/test', function(){
    return view('test', [
        "title" => "Test"
    ]);
});

Route::get('/addScore',[AddScoreController::class, 'addScore']);
Route::post('/addScore/store', [AddScoreController::class, 'storeScore']);