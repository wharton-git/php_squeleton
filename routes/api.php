<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AnimalController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

    //ito params
    ], function ($router) {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);

});

Route::post('addAnimal', [AnimalController::class, 'addAnimal']);
Route::post('animalSante', [AnimalController::class, 'animalSante']);
Route::patch('/animalSante/{id}', [AnimalController::class, 'updateSante']);
Route::get('animals', [AnimalController::class, 'index']);
Route::get('sante', [AnimalController::class, 'indexSante']);


Route::patch('/editAnimal/{id}', [AnimalController::class, 'updateAnimal']);
Route::delete('/deleteAnimal/{id}', [AnimalController::class, 'destroy']);
Route::put('/showAnimal/{id}', [AnimalController::class, 'showAnimal']);
Route::post('test', [AnimalController::class, 'storee']);
