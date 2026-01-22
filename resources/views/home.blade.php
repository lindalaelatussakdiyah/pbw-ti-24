@extends('layout')

@section('content')
<div class="row align-items-center mb-5">
    <div class="col-lg-6">
        <h1 class="display-4 fw-bold lh-1 mb-3">Selamat Datang di KampusApp</h1>
        <p class="lead">Portal informasi terintegrasi untuk mahasiswa dan dosen. Akses berita terbaru, data mahasiswa, dan informasi kampus dengan mudah.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="{{ route('berita.index') }}" class="btn btn-primary btn-lg px-4 me-md-2">Lihat Berita</a>
            <a href="{{ url('/about') }}" class="btn btn-outline-secondary btn-lg px-4">Tentang Kami</a>
        </div>
    </div>
    <div class="col-lg-6 text-center">
        <img src="https://source.unsplash.com/random/600x400/?campus,student" class="d-block mx-lg-auto img-fluid rounded shadow-lg" alt="Campus Life" loading="lazy">
    </div>
</div>

<div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
    <div class="col">
        <div class="p-4 rounded-3 shadow-sm bg-white h-100 border">
            <div class="d-inline-flex align-items-center justify-content-center bg-primary bg-gradient text-white fs-2 mb-3 rounded-3" style="width: 3rem; height: 3rem;">
                <i class="bi bi-newspaper"></i>
            </div>
            <h3 class="fs-2">Berita Terkini</h3>
            <p>Dapatkan informasi terbaru seputar kegiatan akademik dan non-akademik di lingkungan kampus.</p>
            <a href="{{ route('berita.index') }}" class="btn btn-primary">Baca Berita</a>
        </div>
    </div>
    <div class="col">
        <div class="p-4 rounded-3 shadow-sm bg-white h-100 border">
            <div class="d-inline-flex align-items-center justify-content-center bg-success bg-gradient text-white fs-2 mb-3 rounded-3" style="width: 3rem; height: 3rem;">
                <i class="bi bi-people"></i>
            </div>
            <h3 class="fs-2">Data Mahasiswa</h3>
            <p>Akses data mahasiswa lengkap, termasuk informasi akademik dan biodata yang terupdate.</p>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-success">Lihat Data</a>
        </div>
    </div>
    <div class="col">
        <div class="p-4 rounded-3 shadow-sm bg-white h-100 border">
            <div class="d-inline-flex align-items-center justify-content-center bg-info bg-gradient text-white fs-2 mb-3 rounded-3" style="width: 3rem; height: 3rem;">
                <i class="bi bi-person-badge"></i>
            </div>
            <h3 class="fs-2">Profil Kampus</h3>
            <p>Kenali lebih jauh tentang visi, misi, dan sejarah kampus kami yang inspiratif.</p>
            <a href="{{ route('profile') }}" class="btn btn-info text-white">Lihat Profil</a>
        </div>
    </div>
</div>
@endsection
