<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;


use App\Http\Controllers\AuthController;

/// =======================
/// AUTHENTICATION
/// =======================
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


/// =======================
/// STATIC PAGE
/// =======================
Route::view('/home', 'home')->name('home');
Route::view('/contact', 'contact');
Route::view('/about', 'about');
Route::redirect('/', '/home');


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
/// CRUD MAHASISWA (PROTECTED)
/// =======================
Route::middleware(['auth'])->group(function () {
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
    Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
    Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('insertdata');
    Route::resource('mahasiswa', MahasiswaController::class)->except(['index', 'create', 'store']);
    // Note: resource route implicitly handles other methods, but manual definition above for custom naming is prioritized usually
});


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
