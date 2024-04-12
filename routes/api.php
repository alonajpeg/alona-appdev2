<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->get('/user',function (Request $request){
    return $request ->user();
});

Route::get('/products',[ProductController::class, 'index']);

Route::middleware('method')->group(function(){
    Route::get('/methods',);
});