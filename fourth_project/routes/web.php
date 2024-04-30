<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, UserController};

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// User
Route::get('/user/list', [UserController::class, 'UserList'])->name('user.list');
Route::get('/user/delete/{userId}', [UserController::class, 'UserDelete'])->name('user.delete');
Route::get('/edit/profile/{userId}', [UserController::class, 'EditProfile'])->name('edit.profile');
// User
