<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        Profile::create([
            'name'    => 'Oktorio Mahmud Ozy Saputra',
            'email'   => 'oktorio.ozy@example.com',
            'bio'     => 'Mahasiswa semester 1 Jurusan Teknologi Rekayasa Perangkat Lunak di Politeknik. Saya memiliki ketertarikan besar di bidang pemrograman web, khususnya menggunakan framework Laravel. Saat ini aktif belajar dan mengembangkan kemampuan coding melalui praktikum dan proyek-proyek kecil. Hobi saya adalah berenang dan membaca artikel seputar teknologi terkini.',
            'phone'   => '081234567890',
            'address' => 'Jln. Jendral Sudirman No. 45, Kota Bandung, Jawa Barat',
            'avatar'  => null,
        ]);
    }
}
