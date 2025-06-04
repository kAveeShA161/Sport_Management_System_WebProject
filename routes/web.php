<?php

// Removed duplicate use statement for Route
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReactionController;
use App\Http\Controllers\CommentController;

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('/login');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
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

Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

Route::get('/community', [PostController::class, 'index'])->name('community.index');

Route::get('/community/create', [PostController::class, 'create'])->name('community.create');
Route::post('/community', [PostController::class, 'store'])->name('community.store');

Route::middleware(['auth'])->group(function () {
    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
});