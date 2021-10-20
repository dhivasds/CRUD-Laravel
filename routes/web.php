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
        "title" => 'Home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Dhivas Dharma Saputra",
        "email" => "dhivasdharma@gmail.com",
        "image" => "Dhivas.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
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
    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});


// Halaman Single Post
// {} = while card, untuk mengambil apapun dari " / "
// function $slug untuk mendapatkan "slug" dan memakainya di view post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
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

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});


