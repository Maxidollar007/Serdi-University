<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('admin',adminController::class);

Route::post('admins',[LoginController::class,'login']);
Route::get('admins',[LoginController::class,'login']);

