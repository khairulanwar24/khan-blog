<?php

namespace App\Models;

class Post {
   private static $blog_posts = [
    [
        "title" => "Judul Tulisan Pertama",
        "slug" => "judul-tulisan-pertama",
        "author" => "Muhammad Khairul Anwar",
        "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus, repellat. Ipsa architecto consequatur modi asperiores ipsam cupiditate ipsum eaque animi enim recusandae. Distinctio provident debitis, eius similique at sunt! Fugiat quia perspiciatis voluptate temporibus deleniti cum explicabo exercitationem reiciendis deserunt unde rerum animi nobis reprehenderit, iure incidunt, maxime ratione nemo corrupti illum! Repellendus, quod officiis. Qui ad sapiente dolore, et adipisci sint reiciendis magni temporibus dignissimos deleniti? Commodi expedita minima nam possimus dignissimos aperiam ipsum in. Alias quasi aspernatur animi quibusdam perspiciatis dolores. Sequi a laudantium reprehenderit, ad illo quos?"
    ],
    [
        "title" => "Judul Tulisan Kedua",
        "slug" => "judul-tulisan-kedua",
        "author" => "Salsabilla Fatimah Azzahra",
        "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus, repellat. Ipsa architecto consequatur modi asperiores ipsam cupiditate ipsum eaque animi enim recusandae. Distinctio provident debitis, eius similique at sunt! Fugiat quia perspiciatis voluptate temporibus deleniti cum explicabo exercitationem reiciendis deserunt unde rerum animi nobis reprehenderit, iure incidunt, maxime ratione nemo corrupti illum! Repellendus, quod officiis. Qui ad sapiente dolore, et adipisci sint reiciendis magni temporibus dignissimos deleniti? Commodi expedita minima nam possimus dignissimos aperiam ipsum in. Alias quasi aspernatur animi quibusdam perspiciatis dolores. Sequi a laudantium reprehenderit, ad illo quos?"
    ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
