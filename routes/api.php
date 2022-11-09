<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controller\HeloController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;

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
//Route::resource('halcontroller', HeloController::class);

//Route::resource('siswa', SiswaController::class);
//Route::resource('books', BookController::class);

// Route:middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//public route
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::post('/books', [BookController::class, 'index']);
Route::post('/Books{id}', [BookController::class, 'show']);
Route::post('/Authors', [AuthController::class, 'index']);
Route::post('/Authors/{id}', [AuthController::class, 'show']);

//protected route
Route::middleware('auth:sanctum')->group(function () {
    Route::resource('books', BookController::class)->except('create', 'edit', 'show', 'index');
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::resource('authors', AuthorController::class)->except('create', 'edit', 'show', 'index');
});