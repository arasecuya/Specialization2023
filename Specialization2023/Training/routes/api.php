<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ActivityController;
use Illuminate\Support\Facades\Route;

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

Route::get('activitys', [ActivityController::class, 'index']); // FETCH DATA FROM MYSQL
Route::post('activitys', [ActivityController::class, 'store']); // CREATE DATA FROM MYSQL
Route::get('activitys/{id}', [ActivityController::class, 'show']); // CREATE DATA FROM MYSQL
Route::delete('activitys/{id}', [ActivityController::class, 'destroy']); // CREATE DATA FROM MYSQL
Route::put('activitys/{id}', [ActivityController::class, 'update']); // CREATE DATA FROM MYSQL

