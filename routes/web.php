<?php

use App\Http\Controllers\Admin\CategoriesController;
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
Route::get('admin/categories', [CategoriesController::class, 'index']);
Route::get('admin/categories/create', [CategoriesController::class, 'create']);
Route::post('admin/categories/create', [CategoriesController::class, 'store']);
Route::get('admin/categories/{id}/edit', [CategoriesController::class, 'edit']);
Route::put('admin/categories/{id}', [CategoriesController::class, 'update']);
Route::delete('admin/categories/{id}', [CategoriesController::class, 'destory']);
