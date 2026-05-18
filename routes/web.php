<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/menu', [MenuController::class, 'index']);