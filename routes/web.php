<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LatihanController::class, 'tampil']);
Route::resource('photo', PhotoController::class)->except(['destroy']);
Route::get('buku', [BukuController::class, 'tampil']);
