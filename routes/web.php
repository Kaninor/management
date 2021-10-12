<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReportsController;

Route::get('/', [PagesController::class, 'home']);
Route::get('/admin', [PagesController::class, 'admin']);
Route::get('/dumpdata', [PagesController::class, 'dumpdata']);
Route::get('/dashboard', [PagesController::class, 'dashboard']);
Route::get('/settings', [PagesController::class, 'settings']);
Route::get('/reports', [PagesController::class, 'reports']);
Route::get('/about', [PagesController::class, 'about']);

Route::get('/dashboard/add', [DashboardController::class, 'add']);
Route::get('/dashboard/edit', [DashboardController::class, 'edit']);
Route::get('/dashboard/info', [DashboardController::class, 'info']);

Route::get('/report/view', [ReportsController::class, 'view']);
