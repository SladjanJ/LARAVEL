<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactsController;

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

Route::match(['get', 'post'], '/home', [HomeController::class, 'index'])->name('home');

Route::match(['get', 'post'], '/admin', [AdminController::class, 'index'])->name('admin');
Route::match(['get', 'post'], '/posts', [PostsController::class, 'index'])->name('posts');

Route::resource('/contact', ContactsController::class)->names([
    'index' => 'contact.index',
    'create' => 'contact.create',
    'store' => 'contact.store',
    'show' => 'contact.show',
    'edit' => 'contact.edit',
    'update' => 'contact.update',
    'destroy' => 'contact.destroy',
]);

// DB
Route::get('/', [UserController::class, 'index']);
Route::post('index', [UserController::class, 'store'])->name('store');
Route::post('/', [UserController::class, 'index'])->name('index');
