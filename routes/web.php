<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;

Route::get('/', [BlogController::class, 'home'])->name('home');
Route::get('/sign-in', [AuthController::class, 'showSignInForm'])->name('sign-in');
Route::post('/sign-in', [AuthController::class, 'processSignIn'])->name('sign-in.post');
Route::get('/sign-up', [AuthController::class, 'showSignUpForm'])->name('sign-up');
Route::post('/sign-up', [AuthController::class, 'processSignUp'])->name('sign-up.post');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');


