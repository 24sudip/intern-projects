<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, UserController, BookController};

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// User
Route::get('/user/list', [UserController::class, 'UserList'])->name('user.list');
Route::post('/user/status/{userId}', [UserController::class, 'UserStatus'])->name('user.status');
Route::get('/edit/profile', [UserController::class, 'EditProfile'])->name('edit.profile');
Route::post('/profile/update', [UserController::class, 'ProfileUpdate'])->name('profile.update');
Route::post('/update/profile/photo', [UserController::class, 'UpdateProfilePhoto'])->name('update.profile.photo');
// User

// Subject
Route::get('/category/page', [UserController::class, 'CategoryPage'])->name('category.page');
// Subject

// Books
Route::get('/create/book', [BookController::class, 'CreateBook'])->name('create.book');
Route::post('/store/book', [BookController::class, 'StoreBook'])->name('store.book');
Route::get('/view/book', [BookController::class, 'ViewBook'])->name('view.book');
Route::get('/edit/book/{id}', [BookController::class, 'EditBook'])->name('edit.book');
Route::post('/update/book/{id}', [BookController::class, 'UpdateBook'])->name('update.book');
Route::get('/show/book/{id}', [BookController::class, 'ShowBook'])->name('show.book');
Route::get('/soft/delete/book/{id}', [BookController::class, 'SoftDeleteBook'])->name('soft.delete.book');
Route::get('/show/soft/deleted/book', [BookController::class, 'showSoftDeletedBook'])->name('show.soft.deleted.book');
Route::get('/restore/book/{id}', [BookController::class, 'RestoreBook'])->name('restore.book');
Route::get('/force/delete/book/{id}', [BookController::class, 'ForceDeleteBook'])->name('force.delete.book');
// Books
