@extends('layouts.main')
@include('partials.navbar')

@section('container')
    {{-- Hero Section Start --}}
    <div class="container mt-4">
        <h1>Halaman Posts</h1>

        <hr>
        <div class="mt-5">
            @foreach ($posts as $post)
            <h2>
                <a href="/posts/{{ $post->slug; }}">{{ $post->title }}</a>
            </h2>
            <a href="/categories/{{ $post->category->slug }}">kategori : {{ $post->category->name }}</a>
            <p>{{ $post->published_at }}</p>
            <p>{{ $post->excerpt }}</p>
            @endforeach
        </div>
    </div>
    {{-- Hero Section End --}}
@endsection