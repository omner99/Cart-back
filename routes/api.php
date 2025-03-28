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

Route::get('/customers', function () {
    return $request->customers();
});

Route::get('/customers/{id}', function () {
    return 'un item';
});

Route::post('/customers', function () {
    return $request->customers();
});

Route::put('/customers/{id}', function () {
    return $request->customers();
});

Route::delete('/customers/{id}', function () {
    return $request->customers();
});

Route::get('/addresses', function () {
    return $request->addresses();
});

Route::get('/addresses/{id}', function () {
    return 'un item';
});

Route::post('/addresses', function () {
    return $request->addresses();
});

Route::put('/addresses/{id}', function () {
    return $request->addresses();
});

Route::delete('/addresses/{id}', function () {
    return $request->addresses();
});
