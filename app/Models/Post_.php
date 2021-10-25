<?php

namespace App\Models;


class Post
{
    private static $blog_posts =[
         [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dhivas Dharma",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas excepturi est totam illo eligendi corrupti, praesentium illum molestias maiores eveniet exercitationem deserunt reprehenderit animi, delectus repellendus quos accusamus alias pariatur vel ipsum ea. Delectus ad nihil iure quod magnam architecto nesciunt omnis obcaecati iusto. Autem, debitis dolores reiciendis natus sapiente voluptatibus ullam facilis a architecto cum incidunt sed minima recusandae magni similique vero minus. Eos quam ex rerum saepe mollitia, reiciendis ad nulla sed animi."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Fauzan Kamil",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt accusantium eius officiis quos, ducimus cumque veritatis tempora eaque minima voluptas laudantium, maiores modi eum impedit consequatur quod sequi excepturi quo deleniti ut magni. Dolores ex cupiditate dolor deserunt! Commodi enim error, laborum iste ex, deserunt reprehenderit, blanditiis alias accusamus reiciendis nam! Voluptatum commodi ea debitis ex eligendi illo expedita praesentium quo! Cumque reiciendis quia quaerat, error nemo excepturi suscipit voluptatem ipsam a quisquam eveniet amet quam voluptates. Exercitationem porro deleniti aliquam tempore maiores? Praesentium, nobis."
        ]
];


    public static function all()
    {
        // karna dia static kita butuh keyword "self::", kalo sebagai properti biasa kita pakai "$this->"
        return collect(self::$blog_posts); //collection "collect()"
    }

    public static function find($slug)
    {
        // self:: untuk properti static
        // static:: untuk method static
        $posts =  static::all(); 

        // ambil semua $posts yang bentuknya "collection" cari yang pertama ditemukan yang 'slug'nya sama dengan '$slug'
        return $posts->firstWhere('slug', $slug);
    }
}
