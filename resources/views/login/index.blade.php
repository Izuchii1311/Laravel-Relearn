@extends('layouts.main')

@include('partials.navbar')
@section('container')
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-md-5">
            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center my-4 fw-bold">Please Login</h1>
                <form>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" placeholder="youremail@example.com">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" placeholder="Password">
                        <label for="password">Password</label>
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