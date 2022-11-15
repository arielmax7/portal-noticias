<?php

use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Country\CountryController;
use App\Http\Controllers\News\NewsController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::resource('news', NewsController::class)->only([
    'index','show'
]);

Route::resource('categories', CategoryController::class)->except([
    'create','edit'
]);

Route::resource('countries', CountryController::class)->only([
    'index','show'
]);
