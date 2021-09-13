<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class,'home']);
Route::get('/admin', [PagesController::class,'admin']);
Route::get('/dumpdata', [PagesController::class,'dumpdata']);