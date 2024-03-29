<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\{HomeController, UserController, FrontendController, CategoryController};

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Frontend
Route::get('/', [FrontendController::class, 'Index'])->name('blogger.home');
// Frontend

// Category part
Route::resource('category', CategoryController::class);
// Category part

// User
Route::get('/users', [UserController::class, 'users'])->name('users');
Route::get('/user/delete/{user_id}', [UserController::class, 'UserDelete'])->name('user.delete');

Route::get('/edit/profile', [UserController::class, 'EditProfile'])->name('edit.profile');
Route::post('/update/profile', [UserController::class, 'UpdateProfile'])->name('update.profile');
Route::post('/update/profile/photo', [UserController::class, 'UpdateProfilePhoto'])->name('update.profile.photo');
// User
