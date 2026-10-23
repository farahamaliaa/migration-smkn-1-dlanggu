<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerulanganController extends Controller
{
    public function index()
    {
        $nilaiSiswa = [
            ['nama' => 'Dhavy', 'nilai' => 80],
            ['nama' => 'Rizky', 'nilai' => 90],
            ['nama' => 'Rafid', 'nilai' => 70],
            ['nama' => 'Farid', 'nilai' => 60],
        ];

        return view('perulangan', compact('nilaiSiswa'));
    }
}
