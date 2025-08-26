<?php

use Illuminate\Support\Facades\Route;

Route::get('/w', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('layouts.app');
});
