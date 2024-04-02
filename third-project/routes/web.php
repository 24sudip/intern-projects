<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\{HomeController, UserController, FrontendController, CategoryController, BlogController, TagController};
use App\Http\Controllers\{TagInventoryController};

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Frontend
Route::get('/', [FrontendController::class, 'Index'])->name('blogger.home');
Route::get('/contact', [FrontendController::class, 'Contact'])->name('contact');
Route::get('/about', [FrontendController::class, 'About'])->name('about');
// Frontend

// Category part
Route::resource('category', CategoryController::class);
// Category part

// Tag part
Route::resource('tag', TagController::class);
// Tag part

// Blog part
Route::resource('blog', BlogController::class);
Route::post('/blog/banner/{blog_id}', [BlogController::class, 'blogBanner'])->name('blog.banner');
Route::get('/blog/tag/{id}', [TagInventoryController::class, 'tag'])->name('blog.tag');
Route::post('/tag/inventory/store/{id}', [TagInventoryController::class, 'TagInventoryStore'])->name('tag.inventory.store');
// Blog part

// User
Route::get('/users', [UserController::class, 'users'])->name('users');
Route::get('/user/delete/{user_id}', [UserController::class, 'UserDelete'])->name('user.delete');

Route::get('/edit/profile', [UserController::class, 'EditProfile'])->name('edit.profile');
Route::post('/update/profile', [UserController::class, 'UpdateProfile'])->name('update.profile');
Route::post('/update/profile/photo', [UserController::class, 'UpdateProfilePhoto'])->name('update.profile.photo');
// User
