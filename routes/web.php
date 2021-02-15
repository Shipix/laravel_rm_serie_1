<?php

use Illuminate\Support\Facades\Route;

Route::get('/Rayane', function () {
    $prenom="rayane";
    return "<h2>$prenom</h2>";
});
