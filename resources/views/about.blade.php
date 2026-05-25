<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
        <h1>Profil</h1>
        <img src="img/profil.jpeg" alt="profil" width="300">
        <h3>Nama: {{ $nama }}</h3>
        <h3>Kelas: {{ $kelas }}</h3>
        <h3>NIM : {{ $NIM }}</h3>
        <h3>Alamat : {{ $alamat }}</h3>
        <h3>Hobi : {{ $hobi }}</h3>
        <script src="js/script.js"></script>
</x-layout>