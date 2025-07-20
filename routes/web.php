<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/front-end-user/index');
});




// DETAIL CAR BYD PRODUK
Route::get('/byd-seal', function () {
    return view('/front-end-user/detail-car/byd-seal');
});