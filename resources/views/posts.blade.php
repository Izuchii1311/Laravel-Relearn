@extends('layouts.main')
@include('partials.navbar')

@section('container')
    {{-- Hero Section Start --}}
    <div class="container mt-4">
        <h1>Halaman Posts</h1>

        <hr>
        <div class="mt-5">
            @foreach ($posts as $post)
            <h2 class="title">
                <a href="/posts/{{ $post->slug; }}" class="text-decoration-none text-black">{{ $post->title }}</a>
            </h2>
            <p> By.
                <a href="/authors/{{ $post->author->username }}" class="text-decoration-none text-dark-emphasis fst-italic">{{ $post->author->name }}</a>
                in
                <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-dark-emphasis fst-italic">{{ $post->category->slug }}</a>
            </p>
            <p class="mb-4">{{ $post->excerpt }}
                <br>
                <a href="/posts/{{ $post->slug; }}">Read more ...</a>
            </p>
            @endforeach
        </div>
    </div>
    {{-- Hero Section End --}}
@endsection