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
Route::get('/dashboard/editproduct', [DashboardController::class, 'editproduct']);
Route::get('/dashboard/update', [DashboardController::class, 'update']);
Route::get('/dashboard/delete', [DashboardController::class, 'delete']);
Route::get('/dashboard/info', [DashboardController::class, 'info']);

//Route::get('/report/add', [ReportsController::class, 'add']);
//Route::post('/report/add', [ReportsController::class, 'add']);
Route::get('/report/view', [ReportsController::class, 'view']);
Route::get('/report/delete', [ReportsController::class, 'delete']);
