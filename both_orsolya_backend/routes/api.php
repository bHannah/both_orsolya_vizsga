<?php

use App\Http\Controllers\SzavakController;
use App\Http\Controllers\TemaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/szavak', [SzavakController::class, 'getSzavak']);
Route::get('/tema', [TemaController::class, 'getTema']);
Route::get('/szavak/{temaId}', [SzavakController::class, 'getSzavakTemankent']);