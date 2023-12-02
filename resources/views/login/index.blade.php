@extends('layouts.main')

@include('partials.navbar')
@section('container')
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-md-5">
            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center my-4 fw-bold">Please Login</h1>

                {{-- Flash Message --}}
                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <form action="/login" method="post">
                    @csrf
                    <div class="form-floating my-4">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="youremail@example.com" required autofocus value="{{ old("email") }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating my-4">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required  value="{{ old("password") }}">
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Login</button>
                    <small class="mt-2 mb-3 text-body-secondary d-block text-center">
                        <a href="/register" class="text-decoration-none">Register Now</a>
                    </small>
                </form>
            </main>
        </div>
    </div>
</div>
@endsection