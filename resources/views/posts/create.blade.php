<!-- resources/views/posts/create.blade.php -->

@extends('layouts.app')

@section('content')

<style>
    body {
        background-color: #f8f9fa;
    }
    
    .container {
        max-width: 600px;
        margin-top: 50px;
    }
    
    h2 {
        margin-bottom: 20px;
    }
    
    textarea {
        resize: none;
    }
</style>

<div class="container">
    <h2>What's on your mind</h2>
    
 
    
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <textarea name="description" class="form-control" rows="4" placeholder="What's on your mind?"></textarea>
        </div>
        <div class="mb-3">
            <label for="media">Upload Images:</label>
            <input type="file" name="media[]" multiple >
        </div>
        <div class="mb-3">
            <label for="media">Upload Video (Max 30MB each):</label>
            <input type="file" name="media[]"  multiple>
        </div>
        <button type="submit" class="btn btn-primary">Post</button>
    </form>
</div>
@endsection
