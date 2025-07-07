@extends('admin.layoutAd.app')

@section('content')

<div class="container-form">
    <div class="form-card">
        <div class="form-title">
            <i class="fa-solid fa-pen-to-square"></i> Edit News
        </div>

        <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
            {{-- Use POST method with PUT for updating --}}
            @csrf
            @method('PUT')

            @if($news->image_path)
                <img class="student-img" style="width: 100px; height: 100px" src="{{ asset('storage/' . $news->image_path) }}" alt="News Image">
            @endif

            <div class="mb-3">
                <label for="title" class="form-label">News Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $news->title) }}" required>
                @error('title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">News Description</label>
                <textarea name="description" class="form-control" rows="4" required>{{ old('description', $news->description) }}</textarea>
                @error('description')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Change Image (optional)</label>
                <input type="file" name="image" class="form-control">
                @error('image')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button class="btn btn-submit">Update News</button>
        </form>
    </div>
</div>

@endsection
