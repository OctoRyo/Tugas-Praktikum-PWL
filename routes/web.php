<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about',
    ['nama' => "Oktorio Mahmud Ozy Saputra", 
    'kelas' => "1TRPLB", 
    'NIM' => "1062551", 
    'alamat' => "jln.jendral sudirman", 
    'hobi' => "Berenang"]);
});

Route::get('/halamanbebas', function () {
    return view('halamanbebas');
});

Route::get('/halamanhome', function () {
    return view('halamanhome');
});

Route::get('/detailhewan', function () {
    return view('detailhewan');
});