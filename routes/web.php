<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\QueryController;

Route::get('/', [PagesController::class, 'home']);
Route::get('/admin', [PagesController::class, 'admin']);
Route::get('/dumpdata', [PagesController::class, 'dumpdata']);
Route::get('/dashboard', [PagesController::class, 'dashboard']);
Route::get('/settings', [PagesController::class, 'settings']);
Route::get('/reports', [PagesController::class, 'reports']);
Route::get('/about', [PagesController::class, 'about']);

Route::get('/add', [QueryController::class, 'add']);
Route::get('/edit', [QueryController::class, 'edit']);
Route::get('/editproduct', [QueryController::class, 'editproduct']);
Route::get('/delete', [QueryController::class, 'delete']);
