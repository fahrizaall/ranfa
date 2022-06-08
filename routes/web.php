<?php

use App\Http\Controllers\MoreController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, 'index']);
Route::get('/category/{category}', [PostsController::class, 'category']);
Route::resource('/blog', PostsController::class);

// Route::get('/category/{$category}', function() {return view('blog.category');});
// Route::get('/blog/category/{category}', ['as'=>'blog.category','uses'=>'PostsController@category']);

// Route::get('/', function () { return view('home'); });
// Route::get('/auth/login', function () { return view('auth/login');});
// Route::get('/auth/register', function () { return view('auth/register');});
// Route::get('/post', function () { return view('post');});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');