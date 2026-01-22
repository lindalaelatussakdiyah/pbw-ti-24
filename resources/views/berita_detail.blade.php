@extends('layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('berita.index') }}">Berita</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ Str::limit($berita->judul, 20) }}</li>
            </ol>
        </nav>

        <article class="blog-post">
            <h1 class="blog-post-title fw-bold mb-3">{{ $berita->judul }}</h1>
            <p class="blog-post-meta text-muted mb-4">
                <i class="bi bi-calendar3 me-1"></i> {{ $berita->created_at->format('d F Y') }}
                <span class="mx-2">&bull;</span>
                <i class="bi bi-person me-1"></i> Admin
            </p>

            <div class="mb-4 rounded-3 overflow-hidden shadow-sm">
                <img src="{{ $berita->gambar ? asset('storage/'.$berita->gambar) : 'https://source.unsplash.com/random/800x400/?news' }}" class="img-fluid w-100" alt="{{ $berita->judul }}">
            </div>

            <div class="blog-post-content fs-5 lh-lg">
                {!! $berita->isi !!}
            </div>
        </article>

        <div class="mt-5 border-top pt-4">
            <a href="{{ route('berita.index') }}" class="btn btn-outline-primary">
                <i class="bi bi-arrow-left me-2"></i>Kembali ke Berita
            </a>
        </div>
    </div>
</div>
@endsection
