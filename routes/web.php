<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    $chiffre = 5;
    return view("welcome", compact("chiffre"));
});

Route::get('/exo3',function(){
    $mb1 = 45;
    $mb2 = 54;
    return view("home", compact("mb1","mb2"));
});