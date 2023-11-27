@extends('layouts.main')
@include('partials.navbar')

@section('container')
    {{-- Hero Section Start --}}
    <div class="container mt-4">
        <h1>All Categories {{ $category }}</h1>

        <hr>
        <ul>
            @foreach ($posts as $post)
                <li>
                    <div>
                        <h1>{{ $post->title }}</h1>
                        <p>{{ $post->excerpt }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    {{-- Hero Section End --}}
@endsection