<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controller\HeloController;
use App\Http\Controllers\SiswaController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('halo', function(){
    return ["me" => "Guanteng"];
});

// Route::get('halcontroller', [HeloController::class, 'index']);
// Route::post('halcontroller', [HeloController::class, 'store']);
// Route::get('halcontroller', [HeloController::class, 'show']);
// Route::put('halcontroller', [HeloController::class, 'update']);
// Route::delete('halcontroller', [HeloController::class, 'destroy']);
Route::resource('halcontroller', HeloController::class);

Route::resource('siswa', SiswaController::class);
Route::resource('books', BookController::class);