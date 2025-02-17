<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
 return 'Hello World';
});

Route::get('/', function () {
    return 'selamat datang';
});

Route::get('/about', function () {
    return 'Muhammad Alif Febriansyah/2341720025';
});

// route parameters

Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

// optional parameters

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya'.$nama;
});

Route::get('/user/{name?}', function ($name='John') {
return 'Nama saya '.$name;
});

// route name

Route::get('/user/profile', function() {
 //
})->name('profile');

// route group and routes prefixes

Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
        // Uses first & second middleware...
    });
Route::get('/user/profile', function () {
        // Uses first & second middleware...
    });
});
Route::domain('{account}.example.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
        //
    });
});
Route::middleware('auth')->group(function () {
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/post', [PostController::class, 'index']);
    Route::get('/event', [EventController::class, 'index']);
});

Route::prefix('admin')->group(function () {
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/post', [PostController::class, 'index']);
    Route::get('/event', [EventController::class, 'index']);
});

Route::redirect('/here', '/there');

// view routes

Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);


