<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/report/add', [ReportsController::class, 'add']);
Route::post('/report/delete', [ReportsController::class, 'delete']);

Route::post('/dashboard/delete', [DashboardController::class, 'delete']);
Route::post('/dashboard/addproduct', [DashboardController::class, 'addproduct']);
Route::post('/dashboard/editproduct', [DashboardController::class, 'editproduct']);
Route::post('/dashboard/update', [DashboardController::class, 'update']);
