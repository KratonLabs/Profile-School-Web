<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.home');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
