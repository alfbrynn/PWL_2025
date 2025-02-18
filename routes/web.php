<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
 
// Route::get('/hello', function () {
//  return 'Hello World';
// });

Route::get('/world', function () {
    return 'World';
});

// Route::get('/', function (){
//     return 'selamat datang';
// });

Route::get('/about', function () {
 return 'Muhammad Alif Febriansyah/2341720025';
});

// route parameters ======================================================

// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya '.$name;
// });

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

// Route::get('articles/{id}', function ($id){
//     return 'Halaman artikel dengan ID '.$id;
// }); 

// optional parameters ============================================================

// Route::get('/user/{name?}', function ($name=null) {
//     return 'Nama saya'.$name;
// });

// Route::get('/user/{name?}', function ($name='John') {
// return 'Nama saya '.$name;
// });

// route name ==============================================================

Route::get('/user/profile', function() {
    return 'nama saya alif';
})->name('profile');

// route group and routes prefixes ===================================================

// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//         // Uses first & second middleware...
//     });
// Route::get('/user/profile', function () {
//         // Uses first & second middleware...
//     });
// });
// Route::domain('{account}.example.com')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {
//         //
//     });
// });
// Route::middleware('auth')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });

// Route::prefix('admin')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });

// Route::redirect('/here', '/there');

// view routes =============================================================

// Route::view('/welcome', 'welcome');
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

// Controller ==============================================================

Route::get('/hello', [WelcomeController::class,'hello']);

// Route::get('/', [PageController::class,'index']);

// Route::get('/about', [PageController::class, 'about']);

// Route::get('/articles/{id}', [pageController::class, 'articles']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/article/{id}', [ArticleController::class, 'article']);

// Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);