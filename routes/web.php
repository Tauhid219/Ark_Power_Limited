<?php

use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'layouts.home');

Route::get('/', 'App\Http\Controllers\BaseController@home');
Route::get('/news', [BaseController::class, 'news'])->name('news');
Route::get('/about', [BaseController::class, 'aboutUs'])->name('about');
Route::get('/career', [BaseController::class, 'career'])->name('career');
Route::get('/careers/{id}', [BaseController::class, 'careerDetails'])->name('careerdetails');
Route::get('/services', [BaseController::class, 'service'])->name('services');
Route::get('/contact', [BaseController::class, 'contactUs'])->name('contact');
Route::get('/products', [BaseController::class, 'products'])->name('products');
Route::get('/news/{id}', [BaseController::class, 'newsDetails'])->name('newsdetails');
Route::get('/products/{id}', [BaseController::class, 'productDetails'])->name('productdetails');
Route::get('/test', [BaseController::class, 'testModel'])->name('test');
Route::get('/termcondition', [BaseController::class, 'termCondition'])->name('termcondition');



Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
