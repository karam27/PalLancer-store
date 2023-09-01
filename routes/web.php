<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/categories', [CategoriesController::class, 'index']);
Route::get('/categories/{id}/{title}', [CategoriesController::class, 'show']);
