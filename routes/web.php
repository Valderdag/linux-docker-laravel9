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
Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);
/*
 * SITE
 */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/', [App\Http\Controllers\Main\IndexController::class, '__invoke'])->name('/');;
//Route::get('/category', [App\Http\Controllers\Category\IndexController::class, '__invoke'])->name('category.index');
/*
 * ADMIN
 */
Route::group(['middleware' => ['auth', 'admin']], function () {
//Main
    Route::get('/admin', [App\Http\Controllers\Admin\Main\IndexController::class, '__invoke'])->name('admin.index');
//Category
    Route::get('/admin/category', [App\Http\Controllers\Admin\Category\IndexController::class, '__invoke'])->name('admin.category.index');
    Route::get('/admin/category/create', [App\Http\Controllers\Admin\Category\CreateController::class, '__invoke'])->name('admin.category.create');
    Route::post('/admin/category/store', [App\Http\Controllers\Admin\Category\StoreController::class, '__invoke'])->name('admin.category.store');
    Route::get('/category/{category}', [App\Http\Controllers\Admin\Category\ShowController::class, '__invoke'])->name('admin.category.show');
    Route::get('/category/{category}/edit', [App\Http\Controllers\Admin\Category\EditController::class, '__invoke'])->name('admin.category.edit');
    Route::patch('/category/{category}', [App\Http\Controllers\Admin\Category\UpdateController::class, '__invoke'])->name('admin.category.update');
    Route::delete('/category/{category}', [App\Http\Controllers\Admin\Category\DeleteController::class, '__invoke'])->name('admin.category.delete');
//Tags
    Route::get('/admin/tag', [App\Http\Controllers\Admin\Tag\IndexController::class, '__invoke'])->name('admin.tag.index');
    Route::get('/admin/tag/create', [App\Http\Controllers\Admin\Tag\CreateController::class, '__invoke'])->name('admin.tag.create');
    Route::post('/admin/tag/store', [App\Http\Controllers\Admin\Tag\StoreController::class, '__invoke'])->name('admin.tag.store');
    Route::get('/tag/{tag}', [App\Http\Controllers\Admin\Tag\ShowController::class, '__invoke'])->name('admin.tag.show');
    Route::get('/tag/{tag}/edit', [App\Http\Controllers\Admin\Tag\EditController::class, '__invoke'])->name('admin.tag.edit');
    Route::patch('/tag/{tag}', [App\Http\Controllers\Admin\Tag\UpdateController::class, '__invoke'])->name('admin.tag.update');
    Route::delete('/tag/{tag}', [App\Http\Controllers\Admin\Tag\DeleteController::class, '__invoke'])->name('admin.tag.delete');
//Posts
    Route::get('/admin/post', [App\Http\Controllers\Admin\Post\IndexController::class, '__invoke'])->name('admin.post.index');
    Route::get('/admin/post/create', [App\Http\Controllers\Admin\Post\CreateController::class, '__invoke'])->name('admin.post.create');
    Route::post('/admin/post/store', [App\Http\Controllers\Admin\Post\StoreController::class, '__invoke'])->name('admin.post.store');
    Route::get('/post/{post}', [App\Http\Controllers\Admin\Post\ShowController::class, '__invoke'])->name('admin.post.show');
    Route::get('/post/{post}/edit', [App\Http\Controllers\Admin\Post\EditController::class, '__invoke'])->name('admin.post.edit');
    Route::patch('/post/{post}', [App\Http\Controllers\Admin\Post\UpdateController::class, '__invoke'])->name('admin.post.update');
    Route::delete('/post/{post}', [App\Http\Controllers\Admin\Post\DeleteController::class, '__invoke'])->name('admin.post.delete');
//Users
    Route::get('/admin/user', [App\Http\Controllers\Admin\User\IndexController::class, '__invoke'])->name('admin.user.index');
    Route::get('/admin/user/create', [App\Http\Controllers\Admin\User\CreateController::class, '__invoke'])->name('admin.user.create');
    Route::post('/admin/user/store', [App\Http\Controllers\Admin\User\StoreController::class, '__invoke'])->name('admin.user.store');
    Route::get('/user/{user}', [App\Http\Controllers\Admin\User\ShowController::class, '__invoke'])->name('admin.user.show');
    Route::get('/user/{user}/edit', [App\Http\Controllers\Admin\User\EditController::class, '__invoke'])->name('admin.user.edit');
    Route::patch('/user/{user}', [App\Http\Controllers\Admin\User\UpdateController::class, '__invoke'])->name('admin.user.update');
    Route::delete('/user/{user}', [App\Http\Controllers\Admin\User\DeleteController::class, '__invoke'])->name('admin.user.delete');
});
