<!-- resources/views/posts/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create a New Post</h2>
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <textarea name="description" class="form-control" rows="4" placeholder="What's on your mind?"></textarea>
        </div>
        <div class="mb-3">
            <label for="media">Upload Images/Videos (Max 30MB each):</label>
            <input type="file" name="media[]" class="form-control" multiple>
        </div>
        <button type="submit" class="btn btn-primary">Post</button>
    </form>
</div>
@endsection
