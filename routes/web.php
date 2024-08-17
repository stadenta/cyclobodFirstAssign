<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/assignment1', function () {
    return view('assignment1');
});

Route::get('/assignment2', function () {
    return view('assignment2');
});

Route::get('/assignment3', function () {
    return view('assignment3');
});

Route::get('/assignment4', function () {
    return view('assignment4');
});