<?php

use App\Models\Post;

// connect to models
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;


use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
        "active" => 'home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about',

        "name" => "Dhivas Dharma Saputra",
        "email" => "dhivasdharma@gmail.com",
        "image" => "Dhivas.jpg"
    ]);
});



Route::get('/posts', [PostController::class, 'index']);


// Halaman Single Post
// {} = while card, untuk mengambil apapun dari " / "
// {post} mengambil ke PostController, di binding
// kalau hanya ditulis {post} otomatis akan terkirim id, maka tambahkan :slug
Route::get('posts/{post:slug}', [PostController::class, 'show']);

// Lebih baik Data dipindahkan ke Controller seperti "post:slug"

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',

        'categories' => Category::all()

    ]);
});

// auth = sudah login
// guest = belum login

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest'); // kalau menampilkan biasanya menggunakan 'create'
Route::post('/register', [RegisterController::class, 'store']); //'store' biasanya digunakan untuk menyimpan

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class);
