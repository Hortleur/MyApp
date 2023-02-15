<?php

use App\Http\Controllers\TopicsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PoemController;
use App\Http\Controllers\GenreController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Poems
Route::controller(PoemController::class)->group(function(){
   Route::get('/', 'index');
   Route::get("/id", 'show');
   Route::get('/genre/id',  'getAllByGenre');
});

//Genre
Route::controller(GenreController::class)->group(function (){
    Route::get('/genre', 'index');
    Route::get('/genre/{id}', 'show');
});

//Topic
Route::apiResource('topic', TopicsController::class);
