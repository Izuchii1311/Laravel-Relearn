@extends('layouts.main')

@include('partials.navbar')
@section('container')
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-md-5">
            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center my-4 fw-bold">Registration Form</h1>
                <form action="/register" method="POST">
                    @csrf
                    <div class="form-floating my-4">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Input your name..." name="name" required value="{{ old("name") }}">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating my-4">
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Create a username..." name="username" required value="{{ old("username") }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating my-4">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="youremail@example.com" name="email" required value="{{ old("email") }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating my-4">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required>
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Register</button>
                    <small class="mt-2 mb-3 text-body-secondary d-block text-center">
                        Have an account ?
                        <a href="/login" class="text-decoration-none">Login now!</a>
                    </small>
                </form>
            </main>
        </div>
    </div>
</div>
@endsection