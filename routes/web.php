<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\RegisteredUserController;


use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');



Route::get('/about-us', function () {
    return view('about'); 
})->name('about');


Route::get('/contact-us', function () {
    return view('contact'); 
})->name('contact');


Route::get('/services', function () {
    return view('services'); 
})->name('services');

Route::get('/register', function () {
    return view('auth.register'); 
})->name('register');

Route::get('/login', function () {
    return view('auth.login'); 
})->name('login');

Route::get('/payment', function () {
    return view('payment');
})->name('payment.show');

Route::post('/register', [RegisteredUserController::class, 'submit'])->name('register.submit');


Route::post('/contact-us', [ContactController::class, 'submit'])->name('contact.submit');


Route::get('/images', [ContactController::class, 'image'])->name('images');

Route::get('/payment', [RegisteredUserController::class, 'payment'])->name('payment.show');



