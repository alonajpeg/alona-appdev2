<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/greeting', function(){
    return "Hello Universe";
});

//POST Route
Route::post('/post', function () {
    return 'post route created';
});

//PUT Route
Route::put('/put/{id}', function ($id) {
    return 'put route created';
});

//PATCH Route
Route::patch('/patch/{id}', function (){
    return 'patch route created';
});

//DELETE Route
Route::delete('/delete/{id}', function (){
    return 'delete route created';
});