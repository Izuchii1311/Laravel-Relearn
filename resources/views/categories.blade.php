@extends('layouts.main')
@include('partials.navbar')

@section('container')
    {{-- Hero Section Start --}}
    <div class="container mt-4">
        <h1>All Categories</h1>
        <hr>

        <div class="container">
            <div class="row">
                @foreach ($categories as $index => $category)
                    <div class="col-md-4">
                        <a href="/posts?category={{ $category->slug }}">
                            <div class="card" style="width: 18rem;">
                                <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img-top" alt="{{ $category->name }}">
                                <div class="card-img-overlay d-flex align-items-center p-0">
                                    <h5 class="card-title text-center flex-fill p-4 text-white" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</di>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- Hero Section End --}}
@endsection