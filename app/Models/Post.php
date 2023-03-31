<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    // use HasFactory;
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}