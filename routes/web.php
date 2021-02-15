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

Route::get('/route1/',function(){
    return view("route1");
});

Route::get('/route2/',function(){
    return view("route2");
});

Route::get('/route3/',function(){
    return view("route3");
});

Route::get('/couleur/{var}',function($var){
    
    $color=["rouge","vert","jaune","rose"];

    return view("couleur", compact("color"));
});