<?php

use App\Http\Controllers\api\BlogController;
use App\Http\Controllers\api\cartController;
use App\Http\Controllers\api\CategoryController;
use App\Http\Controllers\api\EventController;
use Illuminate\Http\Request;
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

Route::get('blogs', [BlogController::class, 'index']);
Route::get('latest', [BlogController::class, 'latest']);
Route::get('more', [BlogController::class, 'more']);
Route::get('search/param={param}', [BlogController::class, 'search']);

Route::get('events', [EventController::class, 'index']);
Route::get('events/search/param={param}', [EventController::class, 'search']);

Route::post('addCart', [cartController::class, 'addToCart']);

Route::get('category/{model}', [CategoryController::class, 'getCategory']);
