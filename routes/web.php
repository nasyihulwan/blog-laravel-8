<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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

Route::get('/', function () {
    return view('home', [
        "title" => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => 'About',
        "name" => "Nasyih Ulwan",
        "email" => "mnasyihulwan1103@gmail.com",
        "image" => "gojo.webp"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/post/{slug}', [PostController::class, 'show']);