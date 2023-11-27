@extends('layouts.main')
@include('partials.navbar')

@section('container')
    {{-- Hero Section Start --}}
    <div class="container mt-4">
        <h1>All Categories</h1>

        <hr>
        @foreach ($categories as $index => $category)
            <h6>{{ $index }}). <a href="/categories/{{ $category->slug }}">{{ $category->name}}</a></h6>
        @endforeach
    </div>
    {{-- Hero Section End --}}
@endsection