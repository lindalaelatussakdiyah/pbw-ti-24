<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;


/// =======================
/// STATIC PAGE
/// =======================
Route::view('/home', 'home');
Route::view('/contact', 'contact');
Route::view('/about', 'about');


/// =======================
/// BAGIAN DOSEN
/// =======================
Route::view('/dosen-home', 'dosen.home');
Route::view('/dosen-profil', 'dosen.profile');
Route::view('/dosen-berita', 'dosen.berita');

Route::get('/dosen-berita/{slug}', function ($slug) {
    return view('dosen.singleberita', compact('slug'));
});


/// =======================
/// CRUD MAHASISWA
/// =======================

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('insertdata');
Route::resource('mahasiswa', MahasiswaController::class);


/// =======================
/// BERITA MENGGUNAKAN CONTROLLER
/// =======================
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');


/// =======================
/// PROFIL & KONTAK
/// =======================
Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
