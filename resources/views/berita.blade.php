@extends('layout')

@section('content')
<div class="row align-items-center mb-5">
    <div class="col-md-6">
        <h2 class="fw-bold">Berita Kampus</h2>
        <p class="text-muted">Informasi terbaru seputar kegiatan dan pengumuman kampus.</p>
    </div>
    <div class="col-md-6 text-md-end">
        <form action="{{ route('berita.index') }}" method="GET" class="d-flex justify-content-md-end">
            <div class="input-group w-75">
                <input type="text" class="form-control" placeholder="Cari berita..." aria-label="Cari berita">
                <button class="btn btn-primary" type="button">Cari</button>
            </div>
        </form>
    </div>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">
    @forelse($beritas as $berita)
    <div class="col">
        <div class="card h-100 shadow-sm border-0 hover-shadow transition">
            <img src="{{ $berita->gambar ? asset('storage/'.$berita->gambar) : 'https://source.unsplash.com/random/400x250/?news,university' }}" class="card-img-top" alt="{{ $berita->judul }}" style="height: 200px; object-fit: cover;">
            <div class="card-body">
                <span class="badge bg-primary mb-2">Berita</span>
                <h5 class="card-title fw-bold">
                    <a href="{{ route('berita.show', $berita->slug) }}" class="text-decoration-none text-dark stretched-link">
                        {{ $berita->judul }}
                    </a>
                </h5>
                <p class="card-text text-muted small">
                    {{ Str::limit(strip_tags($berita->isi), 100) }}
                </p>
            </div>
            <div class="card-footer bg-white border-top-0 d-flex justify-content-between align-items-center">
                <small class="text-muted"><i class="bi bi-calendar3 me-1"></i> {{ $berita->created_at->format('d M Y') }}</small>
                <small class="text-primary fw-bold">Baca Selengkapnya &rarr;</small>
            </div>
        </div>
    </div>
    @empty
    <div class="col-12">
        <div class="alert alert-info text-center" role="alert">
            <h4 class="alert-heading">Belum ada berita!</h4>
            <p>Saat ini belum ada berita yang diterbitkan. Silakan kembali lagi nanti.</p>
        </div>
    </div>
    @endforelse
</div>
@endsection
