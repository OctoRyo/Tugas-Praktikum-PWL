<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        // Artikel 1: Teknologi
        Post::create([
            'slug'         => 'belajar-laravel-di-praktikum-trpl',
            'title'        => 'Belajar Laravel di Praktikum TRPL',
            'author'       => 'Oktorio Mahmud Ozy Saputra',
            'category'     => 'Teknologi',
            'published_at' => '2024-01-10',
            'body'         => 'Laravel adalah framework PHP yang sangat luar biasa untuk membuat website. Di praktikum kelas 1TRPLB ini, kita belajar dasar-dasar Laravel mulai dari instalasi, mengatur routing, hingga membuat tampilan web menggunakan fitur Blade Templating. Serunya lagi, kita juga belajar membuat komponen (seperti Navbar dan Layout) agar kodingan HTML kita lebih rapi dan tidak berulang-ulang. Walaupun di awal sering ketemu error, tapi dari error itulah kita jadi lebih paham cara kerja sistemnya. Semangat terus belajar coding!',
        ]);

        // Artikel 2: Hewan Peliharaan
        Post::create([
            'slug'         => 'mengenal-kura-kura-sebagai-hewan-peliharaan',
            'title'        => 'Mengenal Kura-kura Sebagai Hewan Peliharaan',
            'author'       => 'Oktorio Mahmud Ozy Saputra',
            'category'     => 'Hewan Peliharaan',
            'published_at' => '2024-02-05',
            'body'         => 'Kura-kura adalah salah satu hewan peliharaan yang sangat populer karena perawatannya yang relatif mudah. Mereka dikenal sebagai hewan yang tenang dan memiliki umur yang cukup panjang jika dirawat dengan benar. Hal terpenting dalam memelihara kura-kura adalah memastikan mereka mendapatkan sinar matahari yang cukup dan asupan kalsium untuk menjaga tempurungnya tetap kuat.',
        ]);
    }
}
