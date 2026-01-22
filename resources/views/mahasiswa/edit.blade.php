@extends('layout')

@section('title', 'Edit Mahasiswa')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-header bg-white p-4 border-bottom-0">
                <h2 class="h4 mb-0 fw-bold">Edit Data Mahasiswa</h2>
                <p class="text-muted small mb-0">Perbarui informasi mahasiswa melalui formulir di bawah ini.</p>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    @if ($errors->any())
                    <div class="alert alert-danger mb-4">
                        <ul class="mb-0 ps-3">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-bold small text-uppercase">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" value="{{ old('nama', $mahasiswa->nama) }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold small text-uppercase">NIM</label>
                            <input type="number" class="form-control" name="nim" value="{{ old('nim', $mahasiswa->nim) }}" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-bold small text-uppercase">Jurusan</label>
                            <input type="text" class="form-control" name="jurusan" value="{{ old('jurusan', $mahasiswa->jurusan) }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold small text-uppercase">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email', $mahasiswa->email) }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold small text-uppercase">No. Handphone</label>
                            <input type="number" class="form-control" name="noHp" value="{{ old('noHp', $mahasiswa->noHp ?? $mahasiswa->nohp) }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold small text-uppercase">IPK</label>
                            <input type="number" step="0.01" min="0" max="4.00" class="form-control" name="ipk" value="{{ old('ipk', $mahasiswa->ipk) }}">
                        </div>
                        
                        <div class="col-12 mt-4 d-flex justify-content-end gap-2">
                            <a href="{{ route('mahasiswa.index') }}" class="btn btn-light border">Batal</a>
                            <button type="submit" class="btn btn-warning px-4 fw-bold">Update Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
