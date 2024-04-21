<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\{HomeController, UserController, FrontendController, CategoryController, BlogController, TagController};
use App\Http\Controllers\{TagInventoryController, GroupInventoryController, EmailController};

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Frontend
Route::get('/', [FrontendController::class, 'Index'])->name('blogger.home');
Route::get('/contact', [FrontendController::class, 'Contact'])->name('contact');
Route::get('/about', [FrontendController::class, 'About'])->name('about');
Route::get('/category/page/{id}', [FrontendController::class, 'CategoryPage'])->name('category.page');
Route::get('/blog/details/{id}', [FrontendController::class, 'BlogDetails'])->name('blog.details');
Route::get('/personal/page/{id}', [FrontendController::class, 'PersonalPage'])->name('personal.page');
Route::get('/admin/page', [FrontendController::class, 'AdminPage'])->name('admin.page');
Route::get('/minimal/page', [FrontendController::class, 'MinimalPage'])->name('minimal.page');
Route::get('/classic/page', [FrontendController::class, 'ClassicPage'])->name('classic.page');
Route::get('/all/blog', [FrontendController::class, 'AllBlog'])->name('all.blog');
Route::get('/tag/page/{id}', [FrontendController::class, 'TagPage'])->name('tag.page');
//
Route::post('/comment/store/{id}', [FrontendController::class, 'CommentStore'])->name('comment.store');
//
Route::get('/reply/add/{id}', [FrontendController::class, 'ReplyAdd'])->name('reply.add');
Route::post('/reply/store/{id}', [FrontendController::class, 'ReplyStore'])->name('reply.store');
//
Route::post('/search/result', [FrontendController::class, 'SearchResult'])->name('search.result');
Route::post('/subscribe', [FrontendController::class, 'Subscribe'])->name('subscribe');
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
Route::post('/blog/feature/{blog_id}', [BlogController::class, 'blogFeature'])->name('blog.feature');
// Blog part

// Tag Inventory
Route::get('/blog/tag/{id}', [TagInventoryController::class, 'TagInventory'])->name('blog.tag');
Route::post('/tag/inventory/store/{id}', [TagInventoryController::class, 'TagInventoryStore'])->name('tag.inventory.store');
Route::get('/tag/inventory/delete/{id}', [TagInventoryController::class, 'TagInventoryDelete'])->name('tag.inventory.delete');
// Tag Inventory

// Group Inventory
Route::get('/blog/group/show', [GroupInventoryController::class, 'GroupShow'])->name('group.show');
Route::get('/blog/group/{id}', [GroupInventoryController::class, 'GroupInventory'])->name('blog.group');
Route::post('/group/inventory/store/{id}', [GroupInventoryController::class, 'GroupInventoryStore'])->name('group.inventory.store');
Route::get('/group/inventory/delete/{id}', [GroupInventoryController::class, 'GroupInventoryDelete'])->name('group.inventory.delete');
// Group Inventory

// User
Route::get('/users', [UserController::class, 'users'])->name('users');
Route::get('/subscriber/list', [UserController::class, 'SubscriberList'])->name('subscriber.list');
Route::get('/user/block/{user_id}', [UserController::class, 'UserBlock'])->name('user.block');
//
Route::get('/edit/profile', [UserController::class, 'EditProfile'])->name('edit.profile');
Route::post('/update/profile', [UserController::class, 'UpdateProfile'])->name('update.profile');
Route::post('/update/profile/photo', [UserController::class, 'UpdateProfilePhoto'])->name('update.profile.photo');
// User

// Email
Route::get('/send/subscriber/email', [EmailController::class, 'sendSubscriberEmail']);
Route::post('/contact/email', [EmailController::class, 'ContactEmail'])->name('contact.email') ;
// Email
