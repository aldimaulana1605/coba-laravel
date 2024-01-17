<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Aldi Maulana Bahari",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, nesciunt, consectetur facere amet perspiciatis enim, optio laudantium ab ullam voluptatum sapiente rem! Corporis, maxime! Neque, explicabo et voluptatibus vitae animi, sequi, doloribus facilis perferendis ipsam reprehenderit sit maiores! A aspernatur fugit nesciunt sunt veritatis, dignissimos quia tenetur magni non debitis quasi quisquam laudantium perferendis id molestias nobis culpa eveniet, numquam, harum incidunt esse. Qui impedit maxime, odio corrupti et, iste nihil recusandae fuga doloremque dolorum suscipit modi ducimus illo quod?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Adaii",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure illo assumenda pariatur necessitatibus unde provident eligendi cum dolores alias, debitis reiciendis possimus earum molestiae eaque aperiam deserunt hic itaque recusandae laborum praesentium blanditiis? Earum explicabo assumenda sint repellat perspiciatis deserunt unde voluptas ullam modi cumque enim tenetur veniam necessitatibus exercitationem ex odit, excepturi nam natus et quas ab ducimus minima labore! Expedita dolorum ab voluptatum tenetur ipsa sed fugiat non est veritatis itaque necessitatibus repellendus laborum praesentium quisquam quam quod ad excepturi at, vel earum! Accusantium nostrum nisi nam, at et in rem, hic dolorum laborum consequatur incidunt voluptas inventore!"
        ],
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
