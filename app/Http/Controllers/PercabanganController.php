<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PercabanganController extends Controller
{
    public function index()
    {
        $nilai = 100;
        return view('percabangan', compact('nilai'));
    }
}
