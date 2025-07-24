<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/front-end-user/index');
});

// DETAIL CAR BYD PRODUK
Route::get('/byd-seal', function () {
    return view('/front-end-user/detail-car/byd-seal');
});

Route::get('/byd-atto3', function () {
    return view('/front-end-user/detail-car/byd-atto3');
});

Route::get('/byd-dolphin', function () {
    return view('/front-end-user/detail-car/byd-dolphin');
});

Route::get('/byd-m6', function () {
    return view('/front-end-user/detail-car/byd-m6');
});

Route::get('/byd-sealion7', function () {
    return view('/front-end-user/detail-car/byd-sealion7');
});

Route::get('/byd-atto1', function () {
    return view('/front-end-user/detail-car/byd-atto1');
});

Route::get('/byd-pricelist', [App\Http\Controllers\PriceListController::class, 'index']);

// NOTFOUND 404 TAMPILAN
Route::get('/notfound', function () {
    return view('/notfound');
});