<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class,'home']);
Route::get('/admin', [PagesController::class,'admin']);
Route::get('/dumpdata', [PagesController::class,'dumpdata']);
Route::get('/profile', [PagesController::class,'profile']);
Route::get('/settings', [PagesController::class,'settings']);
Route::get('/reports', [PagesController::class,'reports']);
Route::get('/about', [PagesController::class,'about']);