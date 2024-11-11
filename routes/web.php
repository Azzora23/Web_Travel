<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Auth;

// Bagian Home
Route::controller(UserController::class)->group(function () {
    // Mengarahkan root ke halaman home
    Route::get('/', function () {
        return redirect('/home');
    });

    // Route ke halaman home, blog, dan blog detail
    Route::get('/home', [UserController::class, 'home'])->name('home');
    Route::get('/blog', [UserController::class, 'blog'])->name('blog');
    Route::get('/blog/{slug}', [UserController::class, 'showArticle'])->name('blog.show');
    Route::get('/gallery', [UserController::class, 'gallery'])->name('gallery');
    Route::get('/contact', [UserController::class, 'contact'])->name('contact');
    Route::post('/contact', [UserController::class, 'storeContact'])->name('contact.store');

    // Route untuk login dan dashboard
    Route::get('/login', [UserController::class, 'showLogin'])->name('login');
    Route::post('/login', [UserController::class, 'login'])->name('login.submit');

    // register
    Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [UserController::class, 'register'])->name('register.submit');

    Route::get('/dashboard', [UserController::class, 'showDashboard'])->name('dashboard')->middleware('auth');

    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});

Route::get('/admin/articles', [ArticleController::class,'index'])->name('admin.articles');

// Bagian Article
Route::resource('articles', ArticleController::class);
