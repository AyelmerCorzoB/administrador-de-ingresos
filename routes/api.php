<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/usuarios', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
