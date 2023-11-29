@extends('layouts.main')
@include('partials.navbar')

@section('container')
    {{-- Hero Section Start --}}
    <div class="container mt-4">
        <h1>{{ $post->title }}</h1>
        <p> By.
            <a href="/authors/{{ $post->author->username }}" class="text-decoration-none text-dark-emphasis fst-italic">{{ $post->author->name }}</a>
            in
            <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-dark-emphasis fst-italic">{{ $post->category->slug }}</a>
        </p>
        <hr>
        <p>{!! $post->body !!}</p>

    </div>
    {{-- Hero Section End --}}
@endsection