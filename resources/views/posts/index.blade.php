<!-- resources/views/posts/index.blade.php -->

@extends('layouts.app')

@section('content')
@php use Illuminate\Support\Str; @endphp


<style>
    .container {
        max-width: 800px;
        margin: auto;
    }
    .card {
        margin-bottom: 20px;
    }
    .react-btn {
        background: none;
        border: none;
        cursor: pointer;
        font-size: 1.5em;
    }
    .reactions {
        display: flex;
        gap: 10px;
        margin-top: 10px;
    }
    .reaction-buttons {
        display: flex;
        gap: 10px;
    }
    .who-reacted {
        margin-top: 5px;
    }

    .comment, .reply {
        margin-top: 10px;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .active {
        background-color: #eef; /* light highlight */
        font-weight: bold;
        border-radius: 5px;
    }
    textarea {
        width: 100%;
        height: 80px;
        margin-bottom: 10px;
    }
    button {
        margin-top: 10px;
    }
</style>
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

                @if (auth()->check() && auth()->id() === $post->user_id)
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this post?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete Post</button>
                    </form>
                @endif



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
                        

                    <div class="reactions" data-post-id="{{ $post->id }}">
                        @php
                            $reactions = $post->reactions->groupBy('type');
                        @endphp

                        <div class="reaction-buttons">
                            @foreach (['like' => '👍', 'love' => '❤️', 'haha' => '😂', 'wow' => '😮', 'sad' =>'😢', 'angry' => '😡'] as $type => $icon)
                                <button class="react-btn" data-type="{{ $type }}">
                                    {{ $icon }} {{ isset($reactions[$type]) ? $reactions[$type]->count() : 0 }}
                                </button>
                            @endforeach
                        </div>

                        <div class="who-reacted">
                            <small>
                                @foreach ($reactions as $type => $group)
                                    {{ $group->count() }} {{ $type }} by
                                    {{ implode(', ', $group->pluck('user.name')->toArray()) }}<br>
                                @endforeach
                            </small>
                        </div>
                    </div>



                        @php
                        $userReaction = $post->reactions->where('user_id', auth()->id())->first();
                        @endphp

                        @if($userReaction)
                            <p>You reacted: {{ $userReaction->type }}</p>
                        @endif


                        <hr>

                <form action="{{ route('comments.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <textarea name="body" required></textarea>
                    <button type="submit">Comment</button>
                </form>

                
                

                {{-- Comments --}}
                @foreach ($post->comments->where('parent_id', null) as $comment)
                    @include('partials.comment', ['comment' => $comment, 'level' => 0, 'postId' => $post->id])
                @endforeach






            </div>
        </div>
    @endforeach

    {{ $posts->links() }}
</div>

        <script>
            $(document).ready(function() {
            $('.react-btn').click(function() {
                const type = $(this).data('type');
                const postId = $(this).closest('.reactions').data('post-id');

                $.ajax({
                    url: `/posts/${postId}/react`,
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        type: type
                    },
                    success: function(response) {
                        alert('Reaction saved!');
                        location.reload(); // or update the count dynamically
                    }
                });
            });
        });
        </script>


@endsection
