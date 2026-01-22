@extends('layout')

@section('title', 'Login')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-lg-5 col-md-7">
        <div class="card shadow-lg border-0 rounded-lg">
            <div class="card-header bg-primary text-white text-center py-4">
                <h3 class="font-weight-light my-2">Login Akun</h3>
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

                <form action="{{ route('login.post') }}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" value="{{ old('email') }}" required />
                        <label for="inputEmail">Email Address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password" required />
                        <label for="inputPassword">Password</label>
                    </div>
                    
                    <div class="d-grid gap-2 mt-4">
                        <button class="btn btn-primary btn-lg" type="submit">Login</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center py-3">
                <div class="small"><a href="{{ route('register') }}">Belum punya akun? Daftar disini!</a></div>
            </div>
        </div>
    </div>
</div>
@endsection
