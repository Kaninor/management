<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class,'home']);
Route::get('/admin', [PagesController::class,'admin']);
Route::get('/dumpdata', [PagesController::class,'dumpdata']);
Route::get('/dashboard', [PagesController::class,'dashboard']);
Route::get('/settings', [PagesController::class,'settings']);
Route::get('/reports', [PagesController::class,'reports']);
Route::get('/about', [PagesController::class,'about']);

Route::get('/add', [PagesController::class,'add']);
Route::get('/edit', [PagesController::class,'edit']);
Route::get('/delete', [PagesController::class,'delete']);