<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Profile;

Route::get('/', function () {
    return view('home', ['title' => 'Home page']);
});

Route::get('/about', function () {
    return view('about', [
        'nama'   => "Oktorio Mahmud Ozy Saputra",
        'kelas'  => "1TRPLB",
        'NIM'    => "1062551",
        'alamat' => "jln.jendral sudirman",
        'hobi'   => "Berenang",
        'title'  => 'Halaman About'
    ]);
});

Route::get('/halamanbebas', function () {
    return view('halamanbebas', ['title' => 'HalamanBebas']);
});

Route::get('/halamanhome', function () {
    return view('halamanhome');
});

Route::get('/detailhewan', function () {
    return view('detailhewan', ['title' => 'DetailHewan']);
});

Route::get('/blog', function () {
    $category = request('category');

    if ($category) {
        $posts = Post::where('category', $category)->latest('published_at')->get();
    } else {
        $posts = Post::latest('published_at')->get();
    }

    return view('blog', [
        'title'    => 'Blog',
        'posts'    => $posts,
        'category' => $category,
    ]);
});

Route::get('/blog/{slug}', function ($slug) {
    $post = Post::where('slug', $slug)->firstOrFail();

    return view('post', [
        'title' => $post->title,
        'post'  => $post,
    ]);
});

Route::get('/profile', function () {
    $profile = Profile::first();

    return view('profile', [
        'title'   => 'Profile',
        'profile' => $profile,
    ]);
});
