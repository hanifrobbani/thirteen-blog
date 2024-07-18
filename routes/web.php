<?php

use App\Http\Controllers\AllBlogController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CrudUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('main');
});
Route::get('/home', [AllBlogController::class, 'home']);
Route::get('/', [AllBlogController::class, 'home']);

Route::get('/dashboard', function () {
    return view('dashboard.welcome');
});

Route::get('/login', [UserController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [UserController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::resource('/user', CrudUserController::class);
// Route::get('/user/create', [CrudUserController::class, 'create'])->middleware('guest');
// Route::post('/user/create', [CrudUserController::class, 'store'])->middleware('guest');
// Route::put('/user/{id}/edit', [CrudUserController::class, 'update'])->middleware('auth');

//auth user to dashboard
// Route::get('/dashboard', [CrudUserController::class, 'index'])->middleware('auth');

//blogs
Route::resource('/blog', BlogController::class)->middleware('auth');

//comments
Route::post('/blog/{id}/comments', [CommentController::class, 'store'])->name('comments.store')->middleware('auth');

//all blogs
Route::resource('/post', AllBlogController::class)->middleware('auth');