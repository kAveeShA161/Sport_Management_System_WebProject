<!-- resources/views/posts/index.blade.php -->

@extends('layouts.app')

@section('content')
@php use Illuminate\Support\Str; @endphp

<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <textarea name="description" class="form-control" rows="3" placeholder="Write your post..." required></textarea>
    </div>
    <div class="mb-3">
        <label for="media">Upload Images:</label>
        <input type="file" name="media[]" class="form-control" multiple>
    </div>

    <div class="mb-3">
        <label for="media">Upload Video (Max 30MB each):</label>
        <input type="file" name="media[]" class="form-control" multiple>
    </div>
    <button type="submit" class="btn btn-primary">Create Post</button>
</form>



<div class="container">
    <h2>Community Posts</h2>
    @foreach($posts as $post)
        <div class="card mb-4">
            <div class="card-body">
                <img src="{{ asset('storage/' . $post->user->profile_image) }}" width="40" class="rounded-circle me-2">
                <strong>{{ $post->user->name }}</strong><br>
                <small>{{ $post->created_at->diffForHumans() }}</small>
                <hr>
                <p>{{ $post->description }}</p>
                
                 

                @foreach($post->media as $media)
                    @if(Str::startsWith($media->type, 'image'))
                        <img src="{{ $media->file_path }}" alt="Image" class="img-thumbnail" width="300">
                    @elseif(Str::startsWith($media->type, 'video'))
                        <video controls class="w-100 mb-2">
                            <source src="{{ $media->file_path }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @endif
                @endforeach

                        <hr>

                <form action="{{ route('comments.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <textarea name="body" required></textarea>
                    <button type="submit">Comment</button>
                </form>

                
                

                {{-- Comments --}}
                @foreach ($post->comments as $comment)
                    <div class="comment">
                        <img src="{{ asset('storage/' . $comment->user->profile_image) }}" width="30" class="rounded-circle me-2">
                        <strong>{{ $comment->user->name }}</strong>
                        <small>{{ $comment->created_at->diffForHumans() }}</small>
                        <p>{{ $comment->body }}</p>

                        {{-- Replies --}}
                        @foreach ($comment->replies as $reply)
                            <div class="reply" style="margin-left: 30px;">
                                <img src="{{ asset('storage/' . $reply->user->profile_image) }}" width="30" class="rounded-circle me-2">
                                <strong>{{ $reply->user->name }}</strong>
                                <small>{{ $reply->created_at->diffForHumans() }}</small>
                                <p>{{ $reply->body }}</p>
                            </div>
                        @endforeach

                        {{-- Reply Form --}}
                        <form action="{{ route('comments.store') }}" method="POST" style="margin-left: 30px;">
                            @csrf
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                            <textarea name="body" required></textarea>
                            <button type="submit">Reply</button>
                        </form>
                    </div>
                @endforeach






            </div>
        </div>
    @endforeach

    {{ $posts->links() }}
</div>
@endsection
