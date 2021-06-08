<?php

use Illuminate\Support\Facades\Route;


Route::get('inicio', function () {
    return view('inicio');
});

Route::get('inicio/suma/{a}/{b}', function ($a,$b) {    
    return $a + $b;
});

