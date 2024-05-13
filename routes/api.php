<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\EnsureTokenIsValid;

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



//GET Route
// Route::get('/greeting', function(){
//     return "Hello Universe";
// });


// //POST Route
// Route::post('/post', function () {
//     return 'post route created';
// });

// //PUT Route
// Route::put('/put/{id}', function ($id) {
//     return 'put route created';
// });

// //PATCH Route
// Route::patch('/patch/{id}', function (){
//     return 'patch route created';
// });

// //DELETE Route
// Route::delete('/delete/{id}', function (){
//     return 'delete route created';
// });

Route::middleware('extract.token')->group(function () {
    Route::get('/user', [UserController::class,'index']);
    Route::post('/user',[UserController::class, 'index']);
    Route::patch('/user/{id}',[UserController::class, 'update']);
    Route::put('/user/{id}',[UserController::class, 'update']);
    Route::delete('/user/{id}',[UserController::class, 'destroy']);
});