<?php

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



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "BUEK Corp",
            "slug" => "judul-post-pertama",
            "author" => "Gojou Satoru",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste magni, possimus quos reprehenderit quasi, delectus, debitis dolorem similique pariatur officia rerum quo neque. Assumenda, ab soluta sapiente doloremque iste placeat excepturi rerum sequi et maiores quod dolores ipsum labore adipisci facere quae. Sed, voluptates? Repellat non recusandae voluptatum ut in saepe atque eum alias nesciunt quasi blanditiis dolorum aliquid obcaecati, ipsam harum repudiandae molestiae consequatur ratione odio? Quas nam aperiam neque commodi accusamus quisquam quia sapiente eligendi? Quibusdam, labore harum."
        ],
        [
            "title" => "Nasyih Ulwan",
            "slug" => "judul-post-kedua",
            "author" => "Gojou Satoru",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis repellendus nemo quibusdam qui assumenda quidem beatae ipsa cumque! Quidem totam ratione blanditiis quaerat doloribus earum qui sequi. Enim itaque aperiam nihil eum deleniti vel corporis, ipsam consequuntur ut eveniet et libero ipsum non. Odit libero ducimus consequatur explicabo quod numquam?"
        ]
    ];

    return view('posts', [
        "title" => 'Posts',
        "posts" => $blog_posts
    ]);
});

// Halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "BUEK Corp",
            "slug" => "judul-post-pertama",
            "author" => "Gojou Satoru",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste magni, possimus quos reprehenderit quasi, delectus, debitis dolorem similique pariatur officia rerum quo neque. Assumenda, ab soluta sapiente doloremque iste placeat excepturi rerum sequi et maiores quod dolores ipsum labore adipisci facere quae. Sed, voluptates? Repellat non recusandae voluptatum ut in saepe atque eum alias nesciunt quasi blanditiis dolorum aliquid obcaecati, ipsam harum repudiandae molestiae consequatur ratione odio? Quas nam aperiam neque commodi accusamus quisquam quia sapiente eligendi? Quibusdam, labore harum."
        ],
        [
            "title" => "Nasyih Ulwan",
            "slug" => "judul-post-kedua",
            "author" => "Gojou Satoru",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis repellendus nemo quibusdam qui assumenda quidem beatae ipsa cumque! Quidem totam ratione blanditiis quaerat doloribus earum qui sequi. Enim itaque aperiam nihil eum deleniti vel corporis, ipsam consequuntur ut eveniet et libero ipsum non. Odit libero ducimus consequatur explicabo quod numquam?"
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
