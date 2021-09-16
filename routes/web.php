<?php

use Illuminate\Support\Facades\Route;
Use Illuminate\Support\Facades\View;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'homepage']);
Route::get('/profil', [PageController::class, 'profilepage']);