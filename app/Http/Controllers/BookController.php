<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function tampil()
    {
        $bukus = [
            ['judul' => 'Menguasai HTML CSS Dalam Semalam', 'pengarang' => 'Arga'],
            ['judul' => 'Menguasai Laravel', 'pengarang' => 'Farhan'],
            ['judul' => 'Islam Dalam Pemahaman Prabowo', 'pengarang' => 'Surya'],
            ['judul' => 'Cara Membuat Pisang Ijo', 'pengarang' => 'Bagas'],
            ['judul' => 'Bumi Manusia', 'pengarang' => 'Aditya'],
        ];

        return view('buku', compact('bukus'));
    }
}
