@extends('layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="text-center mb-5">
            <h6 class="text-primary fw-bold text-uppercase">Hubungi Kami</h6>
            <h2 class="fw-bold display-5">Kami Siap Membantu</h2>
            <p class="lead text-muted">Punya pertanyaan atau masukan? Jangan ragu untuk menghubungi kami.</p>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-5 mb-5 mb-lg-0">
        <div class="card bg-primary text-white p-4 h-100 border-0 shadow">
            <div class="card-body">
                <h4 class="fw-bold mb-4">Informasi Kontak</h4>
                <div class="d-flex align-items-start mb-4">
                    <div class="fs-4 me-3"><i class="bi bi-geo-alt"></i></div>
                    <div>
                        <h6 class="fw-bold mb-1">Alamat</h6>
                        <p class="mb-0 text-white-50">Jl. Teknologi No. 123, Kampus Digital, Jakarta 12345</p>
                    </div>
                </div>
                <div class="d-flex align-items-start mb-4">
                    <div class="fs-4 me-3"><i class="bi bi-envelope"></i></div>
                    <div>
                        <h6 class="fw-bold mb-1">Email</h6>
                        <p class="mb-0 text-white-50">info@kampusapp.id</p>
                    </div>
                </div>
                <div class="d-flex align-items-start mb-4">
                    <div class="fs-4 me-3"><i class="bi bi-telephone"></i></div>
                    <div>
                        <h6 class="fw-bold mb-1">Telepon</h6>
                        <p class="mb-0 text-white-50">+62 21 5555 8888</p>
                    </div>
                </div>
                
                <div class="mt-5">
                    <h6 class="fw-bold mb-3">Sosial Media</h6>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-white fs-5"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white fs-5"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-white fs-5"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white fs-5"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-7">
        <div class="card border-0 shadow-sm p-4">
            <div class="card-body">
                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label fw-bold">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" name="name" required placeholder="Jhon Doe">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label fw-bold">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required placeholder="name@example.com">
                        </div>
                        <div class="col-12">
                            <label for="subject" class="form-label fw-bold">Subjek</label>
                            <input type="text" class="form-control" id="subject" name="subject" required placeholder="Perihal pesan...">
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label fw-bold">Pesan</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required placeholder="Tulis pesan Anda di sini..."></textarea>
                        </div>
                        <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-primary px-4 py-2 fw-bold w-100 w-md-auto">Kirim Pesan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
