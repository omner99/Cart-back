<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/items', function () {
    return 'lista item';
});

Route::get('/items/{id}', function () {
    return 'un item';
});

Route::post('/items', function () {
    return $request->item();
});

Route::put('/items/{id}', function () {
    return $request->item();
});

Route::delete('/items/{id}', function () {
    return $request->item();
});

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
