@extends('layouts.main')
@include('partials.navbar')

@section('container')
    {{-- Hero Section Start --}}
    <div class="container mt-4">
        <h1>About Me 🔥</h1>

        <hr>
        <h3>{{ $name }}</h3>
        <h6>{{ $email }}</h6>
        <img src="img/{{ $image }}" alt="" class="img-thumbnail rounded-circle border-3 border-danger" width="20%">
    </div>
    {{-- Hero Section End --}}
@endsection