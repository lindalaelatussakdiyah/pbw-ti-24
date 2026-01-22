@extends('layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card border-0 shadow-sm overflow-hidden">
            <div class="card-header bg-primary text-white p-4">
                <h2 class="mb-0">Profil Kampus</h2>
            </div>
            <div class="card-body p-5 bg-white">
                <div class="row align-items-center mb-5">
                    <div class="col-md-4 text-center">
                        <div class="rounded-circle bg-light d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 200px; height: 200px; overflow: hidden;">
                            <img src="https://source.unsplash.com/random/200x200/?university,logo" alt="Logo Kampus" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h3 class="fw-bold mb-3">Universitas Teknologi Masa Depan</h3>
                        <p class="text-muted mb-4">Mewujudkan generasi unggul yang siap menghadapi tantangan global dengan teknologi dan inovasi.</p>
                        <hr>
                        <div class="d-flex justify-content-start gap-4">
                            <div>
                                <h5 class="fw-bold">Berdiri</h5>
                                <p>2005</p>
                            </div>
                            <div>
                                <h5 class="fw-bold">Mahasiswa</h5>
                                <p>5000+</p>
                            </div>
                            <div>
                                <h5 class="fw-bold">Fakultas</h5>
                                <p>8</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="p-4 bg-light rounded-3 h-100">
                            <h4 class="fw-bold mb-3 text-primary">Visi</h4>
                            <p>Menjadi pusat pendidikan tinggi terkemuka yang menghasilkan lulusan berkompetensi tinggi, berkarakter, dan inovatif di bidang teknologi informasi pada tahun 2030.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="p-4 bg-light rounded-3 h-100">
                            <h4 class="fw-bold mb-3 text-primary">Misi</h4>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Menyelenggarakan pendidikan berkualitas.</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Mengembangkan penelitian inovatif.</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Melakukan pengabdian kepada masyarakat.</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Membangun kerjasama strategis.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
