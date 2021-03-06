<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ApiController;

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

Route::prefix('test')->group(function () {
    Route::get('/ping', 'App\Http\Controllers\API\TestController@ping');
});

Route::prefix('query')->group(function() {
    Route::post('/', [ApiController::class, 'queryResult']);
    Route::put('/rating', [ApiController::class, 'addRating']);
    Route::post('/rating', [ApiController::class, 'updateRatingComment']);
});

Route::post('/chargeStatus', [ApiController::class, 'chargeStatus']);


//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
