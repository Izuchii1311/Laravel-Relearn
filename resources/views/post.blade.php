@extends('layouts.main')
@include('partials.navbar')

@section('container')
    {{-- Hero Section Start --}}
    <div class="container mt-4">
        <h1>Single Post</h1>

        <hr>
        <h1>{{ $post->title }}</h1>
        <p>{!! $post->body !!}</p>

    </div>
    {{-- Hero Section End --}}
@endsection