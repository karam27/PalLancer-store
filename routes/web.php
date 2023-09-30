<?php

use App\Http\Controllers\Admin\CategoriesController;
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






Route::prefix('admin/categories')->namespace('Admin')->group(function () {

    Route::get('/', [CategoriesController::class, 'index'])->name('admin.categories.index');
    Route::get('/create', [CategoriesController::class, 'create'])->name('create');
    Route::get('/{id}', [CategoriesController::class, 'show'])->name('show');

    Route::post('/create', [CategoriesController::class, 'store'])->name('admin.categories.store');
    Route::get('/{id}/edit', [CategoriesController::class, 'edit'])->name('admin.categroies.edit');
    Route::put('/{id}', [CategoriesController::class, 'update'])->name('admin.categories.update');
    Route::delete('/{id}', [CategoriesController::class, 'destory'])->name('admin.categories.destory');
});
