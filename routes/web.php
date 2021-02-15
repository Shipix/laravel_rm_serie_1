<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    $chiffre = 5;

    return view("welcome", compact("chiffre"));
});
