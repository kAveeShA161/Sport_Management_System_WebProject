@extends('admin.layoutAd.app')

@section('content')

<div class="container-form">
    <div class="form-card">
        <div class="form-title">
            <i class="fa-solid fa-newspaper"></i> Add Latest News
        </div>

        <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- News Title -->
            <div class="mb-3">
                <label for="title" class="form-label">News Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                @error('title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">News Description</label>
                <textarea name="description" class="form-control" rows="4" required>{{ old('description') }}</textarea>
                @error('description')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Image Upload -->
            <div class="mb-3">
                <label class="form-label">News Image</label>
                <input type="file" name="image" class="form-control">
                @error('image')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button class="btn btn-submit">Add News</button>
        </form>
    </div>
</div>

@endsection


