<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $nama = "Syaifudin";
        return view('layouts.app', compact('nama'));
    }
}
