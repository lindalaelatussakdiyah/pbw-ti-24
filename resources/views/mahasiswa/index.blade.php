@extends('layout')

@section('content')
<div class="card border-0 shadow-sm rounded-3 overflow-hidden">
    <div class="card-header bg-white p-4 border-bottom-0 d-flex justify-content-between align-items-center">
        <h2 class="h4 mb-0 fw-bold">Daftar Mahasiswa</h2>
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary fw-medium px-4">
            <i class="bi bi-plus-lg me-2"></i>Tambah Mahasiswa
        </a>
    </div>
    
    <div class="card-body p-0">
        @if ($message = Session::get('success'))
        <div class="alert alert-success m-4 d-flex align-items-center" role="alert">
            <i class="bi bi-check-circle-fill me-2 fs-5"></i>
            <div>{{ $message }}</div>
        </div>
        @endif

        <div class="table-responsive">
            <table class="table table-hover table-nowrap mb-0 align-middle">
                <thead class="bg-light text-secondary text-uppercase small fw-bold">
                    <tr>
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Nama</th>
                        <th class="px-4 py-3">NIM</th>
                        <th class="px-4 py-3">Jurusan</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">No Hp</th>
                        <th class="px-4 py-3">IPK</th>
                        <th class="px-4 py-3 text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($mahasiswas as $m)
                    <tr>
                        <td class="px-4 py-3 text-muted">{{ $loop->iteration }}</td>
                        <td class="px-4 py-3 fw-bold text-dark">{{ $m->nama }}</td>
                        <td class="px-4 py-3 font-monospace">{{ $m->nim }}</td>
                        <td class="px-4 py-3">{{ $m->jurusan }}</td>
                        <td class="px-4 py-3">{{ $m->email }}</td>
                        <td class="px-4 py-3">{{ $m->noHp }}</td>
                        <td class="px-4 py-3">
                            <span class="badge bg-{{ $m->ipk >= 3.5 ? 'success' : ($m->ipk >= 3.0 ? 'info' : 'warning') }}-subtle text-{{ $m->ipk >= 3.5 ? 'success' : ($m->ipk >= 3.0 ? 'info' : 'warning') }} rounded-pill border border-{{ $m->ipk >= 3.5 ? 'success' : ($m->ipk >= 3.0 ? 'info' : 'warning') }} px-2">
                                {{ $m->ipk }}
                            </span>
                        </td>
                        <td class="px-4 py-3 text-end">
                            <a href="{{ route('mahasiswa.edit', $m->id) }}" class="btn btn-sm btn-outline-warning me-1" title="Edit">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="{{ route('mahasiswa.destroy', $m->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin hapus data ini?')" title="Hapus">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center py-5 text-muted">
                            <i class="bi bi-inbox fs-1 d-block mb-3"></i>
                            Belum ada data mahasiswa.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
