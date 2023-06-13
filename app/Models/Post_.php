<?php

namespace App\Models;



class post 
{
    private static $blog_posts = [
        [
            "title" => "judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Arifin Nugroho",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. A eligendi neque illum. Consequatur quo est neque dolor. 
            Fugit odio praesentium tenetur exercitationem sint architecto tempore ipsa, eum aliquam placeat cumque?"
        ],
        [
            "title" => "judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Arifin setya",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. A eligendi neque illum. Consequatur quo est neque dolor. 
            Fugit odio praesentium tenetur exercitationem sint architecto tempore ipsa, eum aliquam placeat cumque?"
        ],
    ];

    public static function all()
    {
        return collect (self :: $blog_posts);
    }
    public static function find($slug)
    {
        $posts = static :: all();

        return $posts ->firstWhere('slug', $slug);
    }
}
