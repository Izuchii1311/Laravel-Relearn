@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
    </div>

    <div class="table-responsive small">
        <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Posts + </a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>{{ $post->created_at->diffForHumans() }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="/dashboard/posts/{{ $post->slug }}" class="mx-2"><span class="badge bg-info">Detail</span></a>
                                <a href="/dashboard/posts/{{ $post->id }}" class="mx-2"><span class="badge bg-warning">Edit</span></a>
                                <a href="/dashboard/posts/{{ $post->id }}" class="mx-2"><span class="badge bg-danger">Delete</span></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection