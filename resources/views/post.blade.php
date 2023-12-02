@extends('layouts.main')
@include('partials.navbar')

@section('container')
    {{-- Hero Section Start --}}
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>{{ $post->title }}</h1>
                <hr>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top img-fluid" alt="{{ $post->category->name }}">
                <p> By.
                    <a href="/post?author={{ $post->author->username }}" class="text-decoration-none text-dark-emphasis fst-italic">{{ $post->author->name }}</a>
                    in
                    <a href="/post?category={{ $post->category->slug }}" class="text-decoration-none text-dark-emphasis fst-italic">{{ $post->category->slug }}</a>
                </p>
                <hr>
                <article class="my-3 fs-5">{!! $post->body !!}</article>

                <a href="/posts" class="d-block mt-4">Back to Posts</a>
            </div>
        </div>
    </div>
    {{-- Hero Section End --}}
@endsection