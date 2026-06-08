<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

// Route untuk halaman daftar blog (Mengambil semua data asli dari database)
Route::get('/blog', function () {
    return view('blog', [
        'title' => 'Blog',
        'posts' => Post::all() // Eloquent otomatis mengambil semua baris dari tabel posts
    ]);
});

// Route untuk halaman detail post (Mencari otomatis berdasarkan slug di database)
Route::get('/blog/{slug}', function ($slug) {
    // Mencari artikel berdasarkan slug, jika tidak ada langsung otomatis menampilkan halaman error 404
    $post = Post::where('slug', $slug)->firstOrFail(); 

    return view('post', [
        'title' => $post->title,
        'post'  => $post
    ]);
});