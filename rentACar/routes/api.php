<?php

use App\Models\Auto;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\RentiranjeController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/autos', [AutoController::class, 'vratiSveAute']);
Route::post('/autos', [AutoController::class, 'dodajAuto']);
Route::put('/autos/{auto}', [AutoController::class, 'izmeniAuto']);
Route::delete('/autos/{auto}', [AutoController::class, 'izbrisiAuto']);

Route::get('/rentiranjes', [RentiranjeController::class, 'vratiSvaRentiranja']);
Route::post('/rentiranjes', [RentiranjeController::class, 'dodajRentiranje']);