@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Category</h1>
    </div>

    <form action="/dashboard/categories/{{ $category->slug }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    {{-- Category Name --}}
        <div class="mb-3">
            <label for="name" class="form-label @error('name') is-invalid @enderror">Category Name</label>
            <input type="text" class="form-control" id="name" name="name" required autofocus value="{{ old('name', $category->name) }}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    {{-- Category Slug --}}
        <div class="mb-3">
            <label for="slug" class="form-label @error('slug') is-invalid @enderror">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" readonly required value="{{ old('slug', $category->slug) }}">
            @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    {{-- Category Image --}}
        <div class="mb-3">
            <label for="image" class="form-label @error('image') is-invalid @enderror">Upload Image</label>
            <input type="hidden" value="{{ $category->image }}" name="oldImage">
            @if ($category->image != null)
                <img src="{{ asset('storage/' . $category->image) }}" alt="" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
                <img src="" alt="" class="img-preview img-fluid mb-3 col-sm-5">
            @endif
            <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Category</button>
    </form>

    <script>
        // Slugable
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        name.addEventListener('input', function() {
            fetch('/dashboard/categories/checkSlug?name=' + encodeURIComponent(name.value))
                .then(response => response.json())
                .then(data => slug.value = data.slug)
                .catch(error => console.error('Error:', error));
        });

        // Preview Image
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection