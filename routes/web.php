<?php


use Illuminate\Support\Facades\Route;
// connect to models
use App\Models\Post;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

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



Route::get('/blog', [PostController::class, 'index']);


// Halaman Single Post
// {} = while card, untuk mengambil apapun dari " / "
// {post} mengambil ke PostController, di binding
// kalau hanya ditulis {post} otomatis akan terkirim id, maka tambahkan :slug
Route::get('posts/{post:slug}', [PostController::class, 'show']);

// Lebih baik Data dipindahkan ke Controller seperti "post:slug"

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()

    ]);
});

Route::get('categories/{category:slug}', function(Category $category){
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});

// bahkan kita bisa meminjam view punyanya "posts" di User, kalo mau bkin view baru juga boleh
Route::get('authors/{author:username}', function(User $author){
    return view('posts', [
        'title' => 'User Posts',
        'posts' => $author->posts,
    ]);
});
