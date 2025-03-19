<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
    
});


Route::get('/abiti', function () {
    return view('abiti');
    
});



Route::get('/galleria', function () {
    return view('galleria');
    
});
