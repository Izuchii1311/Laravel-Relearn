@extends('dashboard.layouts.main')

@section('container')
    {{-- Hero Section Start --}}
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>{{ $post->title }}</h1>
                <p>{{ $post->category->name }}</p>
                <hr>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top img-fluid mb-2" alt="{{ $post->category->name }}">
                <a href="/dashboard/posts" class="btn btn-success">Back to my posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning text-white">Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger mx-2 border-0" onclick="return confirm('Are you sure ?')">Delete</button>
                </form>
                <hr>
                <article class="my-3 fs-5">{!! $post->body !!}</article>

                <a href="/dashboard/posts" class="d-block mt-4">Back to Posts</a>
            </div>
        </div>
    </div>
    {{-- Hero Section End --}}
@endsection