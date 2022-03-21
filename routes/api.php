<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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

//Get all list of book

Route::get('/book', [BookController::class, 'getbook']);

//Get specific book 
Route::get('/book/{id}', [BookController::class, 'getidbook']);

//add book
Route::post('/addbook', [BookController::class, 'addbook']);

// Update book list
Route::put('/update/{id}', [BookController::class, 'update']);

//delete book
Route::delete('/delete/{id}', [BookController::class, 'delete']);