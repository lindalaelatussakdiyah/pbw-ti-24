@extends('layout')

@section('title', 'Register')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-lg-6 col-md-8">
        <div class="card shadow-lg border-0 rounded-lg">
            <div class="card-header bg-success text-white text-center py-4">
                <h3 class="font-weight-light my-2">Buat Akun Baru</h3>
            </div>
            <div class="card-body p-5">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('register.post') }}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputName" type="text" name="name" placeholder="Nama Lengkap" value="{{ old('name') }}" required />
                        <label for="inputName">Nama Lengkap</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" value="{{ old('email') }}" required />
                        <label for="inputEmail">Email Address</label>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Create a password" required />
                                <label for="inputPassword">Password</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="inputPasswordConfirm" type="password" name="password_confirmation" placeholder="Confirm password" required />
                                <label for="inputPasswordConfirm">Konfirmasi Password</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-grid gap-2 mt-4">
                        <button class="btn btn-success btn-lg" type="submit">Daftar Sekarang</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center py-3">
                <div class="small"><a href="{{ route('login') }}">Sudah punya akun? Login disini</a></div>
            </div>
        </div>
    </div>
</div>
@endsection
