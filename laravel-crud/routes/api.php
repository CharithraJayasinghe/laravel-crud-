<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/createProduct', [ProductController::class, 'store']);
Route::get('/getAllProducts', [ProductController::class, 'show']);
Route::put('/updateProduct/{id}', [ProductController::class, 'update']);
Route::delete('/deleteProduct/{id}', [ProductController::class, 'destroy']);


Route::post('/createAnimal', [AnimalController::class, 'store']);
Route::get('/getAllAnimals', [AnimalController::class, 'show']);
Route::put('/updateAnimal/{id}', [AnimalController::class, 'update']);




