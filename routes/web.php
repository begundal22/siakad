<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;
use App\Http\Controllers\ArticleController;
Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('mahasiswa', ArticleController::class);
Route::get('/article/cetak_pdf', [ArticleController::class, 'cetak_pdf'])-name('cetak_pdf');

