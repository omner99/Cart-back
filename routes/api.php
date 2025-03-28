<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CustomerController;

Route::apiResource('items', ItemController::class);
/*Route::get('/items',[ItemController::class,'index']);
Route::get('/items/{id}',[ItemController::class,'show']);
Route::post('/items',[ItemController::class,'store']);
Route::put('/items/{id}',[ItemController::class,'update']);
Route::delete('/items/{id}',[ItemController::class,'destroy']);*/

Route::apiResource('customers', CustomerController::class);

Route::apiResource('addresses', AddressController::class);
