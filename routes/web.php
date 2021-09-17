<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;


Route::get('/', [PostController::class, 'index'])->name('posts.index');

Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('category/{category}', [PostController::class, 'category'])->name('posts.category');

Route::get('tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');

Route::get('auth/facebook', [FacebookController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('event', [EventController::class, 'index'])->name('event');


//  Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
//  Route::get('contact', [ContactController::class, 'index'])->name('contact');


Route::middleware(['auth:sanctum','verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(["middleware" => ['auth:sanctum','verified']], function (){
    Route::get('/dashboard', function () {
        return view('dashboard');
        })->name('dashboard');
        
    // Route::get('/contact', [ContactController::class, 'index'])->name('contact.index'); 
    // Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');    

});