@extends('layouts.main')
@include('partials.navbar')

@section('container')
    {{-- Hero Section Start --}}
    <div class="container mt-4">
        <h1>{{ $title }}</h1>
        <hr>

        @if ($posts->count() > 0) {{-- true --}}
            <div class="card mb-3">
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
                <div class="card-body">
                    <h2 class="card-title text-center">
                        <a href="/posts/{{ $posts[0]->slug; }}" class="text-decoration-none text-black">{{ $posts[0]->title }}</a>
                    </h2>
                    <p class="text-center">
                        <small class="text-body-secondary">
                            By.
                            <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none text-dark-emphasis fst-italic">{{ $posts[0]->author->name }}</a>
                            in
                            <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none text-dark-emphasis fst-italic">{{ $posts[0]->category->slug }}</a>
                            {{ $posts[0]->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="mb-4 text-center">{{ $posts[0]->excerpt }}
                        <br>
                        <a href="/posts/{{ $posts[0]->slug; }}">Read more ...</a>
                    </p>
                </div>
            </div>

        @else
            <p class='text-center fs-4'>No Post Found.</p>
        @endif

        <div class="container">
            <div class="row">

                @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="position-absolute bg-dark p-3 text-white" style="background-color: rgba(0, 0, 0, 0.7)">
                            <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a>
                        </div>
                        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="/posts/{{ $post->slug; }}" class="text-decoration-none text-black">{{ $post->title }}</a>
                            </h5>
                            <p> By.
                                <a href="/authors/{{ $post->author->username }}" class="text-decoration-none text-dark-emphasis fst-italic">{{ $post->author->name }}</a>
                            </p>
                            <p class="mb-4">{{ $post->excerpt }}
                                <br>
                                <a href="/posts/{{ $post->slug; }}">Read more ...</a>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    {{-- Hero Section End --}}
@endsection