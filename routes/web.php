<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/artcicle/{id}', function () {
    return view('welcome');
})
