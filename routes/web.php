<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
 * PHP
 */
Route::get('/info', function () {
    return view('info.index');
});

Auth::routes();
/*
 * SITE
 */
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\Main\IndexController::class, '__invoke'])->name('/');;
Route::get('/category', [App\Http\Controllers\Category\IndexController::class, '__invoke'])->name('category.index');
/*
 * ADMIN
 */
Route::get('/admin', [App\Http\Controllers\Admin\Main\IndexController::class, '__invoke'])->name('admin.index');
Route::get('/admin/category', [App\Http\Controllers\Admin\Category\IndexController::class, '__invoke'])->name('admin.category.index');
Route::get('/admin/category/create', [App\Http\Controllers\Admin\Category\CreateController::class, '__invoke'])->name('admin.category.create');
Route::post('/admin/category/store', [App\Http\Controllers\Admin\Category\StoreController::class, '__invoke'])->name('admin.category.store');
