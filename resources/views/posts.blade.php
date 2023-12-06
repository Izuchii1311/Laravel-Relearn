@extends('layouts.main')
@include('partials.navbar')

@section('container')
    {{-- Hero Section Start --}}
    <div class="container mt-4">
        <h1 class="text-center mb-3">{{ $title }}</h1>

        <div class="row mb-3 justify-content-center">
            <div class="col-md-6">
                <form action="/posts" method="get">
                    @if (request('category'))
                        <input type="hidden" name="category" value={{ request('category') }}>
                    @endif
                    @if (request('author'))
                        <input type="hidden" name="author" value={{ request('author') }}>
                    @endif
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
                        <button class="input-group-text" type="submit" id="search">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <hr>

        @if ($posts->count() > 0) {{-- true --}}
            <div class="card mb-3">
                @if($posts[0]->image != null)
                    <div style="max-height: 400px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top img-fluid mb-2" alt="{{ $posts[0]->category->name }}">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
                @endif
                <div class="card-body">
                    <h2 class="card-title text-center">
                        <a href="/posts/{{ $posts[0]->slug; }}" class="text-decoration-none text-black">{{ $posts[0]->title }}</a>
                    </h2>
                    <p class="text-center">
                        <small class="text-body-secondary">
                            By.
                            <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none text-dark-emphasis fst-italic">{{ $posts[0]->author->name }}</a>
                            in
                            <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none text-dark-emphasis fst-italic">{{ $posts[0]->category->slug }}</a>
                            {{ $posts[0]->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="mb-4 text-center">{{ $posts[0]->excerpt }}
                        <br>
                        <a href="/posts/{{ $posts[0]->slug; }}">Read more ...</a>
                    </p>
                </div>
            </div>

        <div class="container">
            <div class="row">

                @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="position-absolute bg-dark p-3 text-white" style="background-color: rgba(0, 0, 0, 0.7)">
                            <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a>
                        </div>
                        @if($post->image != null)
                            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid mb-2" alt="{{ $post->category->name }}">
                        @else
                            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="/posts/{{ $post->slug; }}" class="text-decoration-none text-black">{{ $post->title }}</a>
                            </h5>
                            <p> By.
                                <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none text-dark-emphasis fst-italic">{{ $post->author->name }}</a>
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

        @else
            <p class='text-center fs-4'>No Post Found.</p>
        @endif


        <div class="d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    {{-- Hero Section End --}}
@endsection