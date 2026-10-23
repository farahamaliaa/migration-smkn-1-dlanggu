<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function tampil()
    {
        // membuat data palsu di dalam array
        $buku = [
            ['judul' => 'Seporsi Mie Ayam Sebelum Mati', 'penulis' => 'Brian Khrisna'],
            ['judul' => 'Bintang', 'penulis' => 'Tere Liye'],
            ['judul' => 'Bulan', 'penulis' => 'Tere Liye'],
            ['judul' => 'Langit', 'penulis' => 'Tere Liye'],
            ['judul' => 'Dasar Laravel Untuk Pemula', 'penulis' => 'Author Keren'],
        ];

        // mengembalikan respon tampilan dengan mengirimkan data yg sudah dibuat
        return view('buku')->with('buku', $buku);
    }
}
