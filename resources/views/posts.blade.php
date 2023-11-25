@extends('layouts.main')
@include('partials.navbar')

@section('container')
    {{-- Hero Section Start --}}
    <div class="container">
        <h1>Halaman Posts</h1>

        <div class="mt-5">
            @foreach ($posts as $post)
            <h2>
                <a href="/posts/{{ $post['slug']; }}">{{ $post['nama']; }}</a>
            </h2>
            <p>{{ $post['npm'] }}</p>
            <p>{{ $post['jurusan'] }}</p>
            @endforeach
        </div>
    </div>
    {{-- Hero Section End --}}
@endsection