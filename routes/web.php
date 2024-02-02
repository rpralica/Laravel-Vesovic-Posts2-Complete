<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostsController;

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

//Posts

Route::get('/', [PostsController::class, 'posts'])->name('post.index');
Route::get('/post/{post}', [PostsController::class, 'singlepost'])->name('post.singlepost');
Route::get('/create', [PostsController::class, 'create'])->name('post.create');
Route::post('/store', [PostsController::class, 'store'])->name('post.store');
Route::get('/edit/{post}', [PostsController::class, 'edit'])->name('post.edit');
Route::put('/update/{post}', [PostsController::class, 'update'])->name('post.update');
Route::delete('/post/{post}', [PostsController::class, 'destroy'])->name('post.delete');


//Users
Route::get('/users', [UserController::class, 'show'])->name('user.index');
Route::get('/user/{user}', [UserController::class, 'destroy'])->name('user.delete');
Route::get('/user/{user}/posts', [UserController::class, 'posts'])->name('user.posts');
