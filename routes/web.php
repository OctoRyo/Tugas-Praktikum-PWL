<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', ['title' => 'Home page']);
});

Route::get('/about', function () {
    return view('about', [
        'nama' => "Oktorio Mahmud Ozy Saputra", 
        'kelas' => "1TRPLB", 
        'NIM' => "1062551", 
        'alamat' => "jln.jendral sudirman", 
        'hobi' => "Berenang", 
        'title' => 'Halaman About'
    ]);
});

Route::get('/halamanbebas', function () {
    return view('halamanbebas', ['title' => 'HalamanBebas']);
});

Route::get('/halamanhome', function () {
    return view('halamanhome', );
});

Route::get('/detailhewan', function () {
    return view('detailhewan', ['title' => 'DetailHewan']);
});

Route::get('/blog', function () {
    return view('blog', [
        'title' => 'Blog',
        'posts' => Post::all() // Mengubah 'blog' menjadi 'posts' agar sesuai dengan @foreach ($posts as $post)
    ]);
});

// 2. Perbaikan: Membungkus logika Single Post ke dalam Route dengan Parameter {slug}
Route::get('/blog/{slug}', function ($slug) {
    // Mengambil semua data dari model Post
    $allPosts = Post::all();

    // Mencari 1 post spesifik berdasarkan slug yang ada di URL
    $post = Arr::first($allPosts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    // Jika post tidak ditemukan, jalankan fungsi abort (404) agar tidak error blank
    if (!$post) {
        abort(404);
    }

    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});