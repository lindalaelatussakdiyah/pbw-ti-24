<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Route;
use App\Models\Berita;
use App\Http\Controllers\MahasiswaController;


//// Web Routes ////
/// update file baru ///

Route::get('/home', function () {
    return view('home');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/welcome', function () {
    return view('welcome');
});


/// ===== bagian sesuai materi dosen ======= ///
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dosen-home', function () {
    return view('dosen.Home',);
});

Route::get('dosen-profil', function () {
    return view('dosen.profile');
});

Route::get('/dosen-berita', function () {
    return view('dosen.berita');
});

Route::get('/dosen-berita/{slug}', function ($slugp) {
    return view('dosen.singleberita');
});

Route::get('/dosen-about', function () {
    return view('dosen.about');
});

Route::get('/dosen-mahasiswa', function () {
    return view('dosen,nahasiswa');
});

Route::get('/dosen-mahasiswa',[MahasiswaController::Class, 'index'])->name('mahasiswa');
Route::post('/dosen- insertdata' [MahasiswaController::Class,'insertdata' ])->name('insertdata');
Route::get('/dosen-tambahmahasiswa', [MahasiswanController::Class, 'tambahmahasiswa'])->name('tambahmahasiswa');
Router::get('/dosen-tampildata/{id}', [MahasiswaController::Class, 'tampildata'])->name('tampildata');

Route::get('/about', function () {
    return view('about');
});


