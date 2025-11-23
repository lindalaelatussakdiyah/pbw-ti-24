@extends('layout')

@section('title', 'Tambah Mahasiswa')

@section('content')
<div class="container mt-5">

    <h2 class="mb-4">Tambah Mahasiswa</h2>

    <form action="{{ route('insertdata') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" required>
        </div>

        <div class="mb-3">
            <label>NIM</label>
            <input type="number" class="form-control" name="nim" required>
        </div>

        <div class="mb-3">
            <label>Jurusan</label>
            <input type="text" class="form-control" name="jurusan" required>
        </div>

        <div class="mb-3">
            <label>IPK</label>
            <input type="text" class="form-control" name="ipk">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
    </form>

</div>
@endsection
