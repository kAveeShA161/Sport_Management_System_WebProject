<?php

// Removed duplicate use statement for Route
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReactionController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAuth\DashboardController;
use App\Http\Controllers\SportTeamController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdminAuth\StoreController;
use App\Http\Controllers\AdminAuth\StoreItemController;
use App\Http\Controllers\AdminAuth\UserController;
use App\Http\Controllers\AdminAuth\AdminPostController;
use App\Http\Controllers\UserSportTeamController;


Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('/login');
});

Auth::routes();

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//     | You may specify the options for password reset here, such as the view



Route::get('/', function () {
    return view('landing'); // 👈 Loads your Bootstrap homepage
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/reaction/store', [ReactionController::class, 'storeReaction']);
    Route::delete('/reaction/remove', [ReactionController::class, 'removeReaction']);
});

Route::get('/community', [PostController::class, 'index'])->name('community.index');

Route::get('/community/create', [PostController::class, 'create'])->name('community.create');
Route::post('/community', [PostController::class, 'store'])->name('community.store');

Route::middleware(['auth'])->group(function () {
    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
});

Route::post('/posts/{post}/react', [ReactionController::class, 'react'])->middleware('auth');


// Admin login routes
Route::get('admin/login', [App\Http\Controllers\AdminAuth\LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [App\Http\Controllers\AdminAuth\LoginController::class, 'login'])->name('admin.login.submit');
Route::post('admin/logout', [App\Http\Controllers\AdminAuth\LoginController::class, 'logout'])->name('admin.logout');

Route::get('/admin/dashboard', [App\Http\Controllers\AdminAuth\DashboardController::class, 'index'])->name('admin.dashboard');
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('teams', SportTeamController::class);
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('coaches', CoachController::class);
    Route::resource('members', MemberController::class);
});

Route::get('/admin/teams/{team?}', [SportTeamController::class, 'index'])->name('admin.teams.index');
Route::put('/admin/teams/{team}', [SportTeamController::class, 'update'])->name('admin.teams.update');

Route::get('/admin/posts', [PostController::class, 'index'])->name('admin.posts.index');



Route::prefix('admin')->name('admin.')->middleware(['web', 'auth', 'is_admin'])->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
});

Route::prefix('admin')->name('admin.')->middleware(['web', 'auth:admin'])->group(function () {
    Route::get('/comments', [\App\Http\Controllers\AdminAuth\AdminCommentController::class, 'index'])->name('comments.index');
    Route::delete('/comments/{id}', [\App\Http\Controllers\AdminAuth\AdminCommentController::class, 'destroy'])->name('comments.destroy');
    Route::get('/posts/manage', [App\Http\Controllers\AdminAuth\AdminPostController::class, 'index'])->name('posts.manage');
    Route::delete('/posts/{id}', [App\Http\Controllers\AdminAuth\AdminPostController::class, 'destroy'])->name('posts.destroy');

});

Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/sports', [App\Http\Controllers\SportTeamController::class, 'index'])->name('sports.index');

Route::prefix('admin')->name('admin.')->middleware(['auth:admin'])->group(function () {
    Route::resource('store_items', \App\Http\Controllers\AdminAuth\StoreItemController::class);
});

// Show all store items to users
Route::get('/store', [App\Http\Controllers\StoreItemUserController::class, 'index'])->name('store.index');


Route::get('/sports', [UserSportTeamController::class, 'index'])->name('sports.index');

use App\Http\Controllers\AdminAuth\UserManagementController;

Route::middleware(['auth:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/users', [UserManagementController::class, 'index'])->name('users.index');
    Route::delete('/users/{id}', [UserManagementController::class, 'destroy'])->name('users.destroy');
});
