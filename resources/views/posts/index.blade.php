<!-- resources/views/posts/index.blade.php -->

@extends('layouts.app')

@section('content')
@php use Illuminate\Support\Str; @endphp

<style>
   
    body.communitypage {
    background: #f5f8fa;
    color: #21314d;
    }
    .community-title {
    font-size: 2rem;
    font-weight: 700;
    color: #184d8a;
    margin: 32px 0 24px 0;
    text-align: center;
    }

    .btn .btn-primary{
        padding: 6px 16px;
    }
    .btn-primary {
    background-color: #003366;
    align-items: end;
    padding: 6px 16px;
    }
    .btn-primary:hover {
    background-color: #084c9e;
    }
    .post-bar {
    background: lightblue;
    border-radius: 12px;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.08);
    padding: 20px;
    margin: 32px auto;
    max-width: 540px;
    }
    .post-actions {
    margin-top: 18px;
    }

    .custom-file-upload {
    display: flex;
    align-items: center;
    gap: 6px;
    background-color: #0c4eb0;
    border: none;
    color: #555;
    font-weight: 500;
    font-size: 1rem;
    padding: 6px 16px;
    border-radius: 8px;
    transition: background 0.15s;
    cursor: pointer;
    }
    .custom-file-upload:hover {
    background: #13478b;
    }
    .custom-file-upload .bi {
    font-size: 1.3rem;
    }
    
    .action-video {
    color: #fff;
    }
    .action-photo {
    color: #fff;
    }


    .post-card {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    margin-bottom: 28px;
    padding: 20px 24px;
    }
    .post-author {
    font-weight: 600;
    color: #002b5b;
    font-size: 1rem;
    }
    .post-date {
    font-size: 0.92rem;
    color: #888;
    margin-left: 8px;
    }
    .post-content {
    margin: 12px 0 16px 0;
    font-size: 1.08rem;
    }
    

    input[type="file"] {
        display: none;
    }

    // Comments
    .comments-section {
    margin-top: 18px;
    padding-left: 12px;
    border-left: 2px solid #e1e6ed;
    }
    .comment {
    margin-bottom: 12px;
    }
    .comment-author {
    font-weight: 500;
    color: #184d8a;
    font-size: 0.97rem;
    }
    .comment-date {
    color: #aaa;
    font-size: 0.87rem;
    margin-left: 6px;
    }
    .comment-content {
    margin-top: 2px;
    font-size: 0.98rem;
    }
    .add-comment {
    margin-top: 10px;
    }
    .add-comment input {
    border-radius: 8px;
    }
    @media (max-width: 767px) {
    .create-post-card,
    .post-card {
        padding: 16px;
    }
    .community-title {
        font-size: 1.4rem;
    }

    }

    .trash {
    background: transparent;
    border: none;   
    color: #2e0005;
    font-size: 1.2rem;
    cursor: pointer;
    transition: color 0.2s;
    }
    .trash:hover {
    color: #dc3545;
    }
        .reaction-option {
            font-size: 22px;
            cursor: pointer;
            transition: transform 0.2s;
            user-select: none;
        }
        .reaction-option:hover {
            transform: scale(1.4);
        }
        .reaction-panel {
            display: none;
            position: absolute;
            top: 100%;
            margin-top: 6px;
            left: 0;
            background: white;
            border-radius: 30px;
            padding: 5px 10px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.15);
            display: flex;
            gap: 10px;
            z-index: 10;
            user-select: none;
            opacity: 0;
            transition: opacity 0.2s ease;
        }
        .reaction-panel.show {
            display: flex;
            opacity: 1;
        }
        .reaction-btn {
            cursor: pointer;
            font-size: 22px;
            user-select: none;
            position: relative;
            background: #f5f8fa;
            border: none;
            border-radius: 20px;
            margin-right: 8px;
            padding: 4px 14px;
            font-size: 1.1rem;
            color: #184d8a;
            transition: background 0.2s;
        }

        .reaction-btn:hover,
        .reaction-btn.active {
        background: #184d8a;
        color: #fff;
        }
        .reactions {
            margin-bottom: 8px;
        }

        .reaction-wrapper {
            position: relative;
            display: inline-block;
        }

</style>

<div class="container py-5">
    <div class="post-bar position-relative">
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <textarea name="description" class="form-control" rows="3" placeholder="What's on your mind?" required></textarea>
            </div>
            <div class="d-flex justify-content-between post-actions">
                <div class="mb-3">
                    <label for="media" class="custom-file-upload action-photo"><i class="bi bi-camera-fill me-2"></i> Images</label>
                    <input id="media" type="file" name="media[]" accept="image/*" multiple>
                </div>

                <div class="mb-3">
                    <label for="media" class="custom-file-upload action-video"><i class="bi bi-camera-video-fill me-2"></i> Video</label>
                    <input type="file" id="media" name="media[]" multiple>
                </div>
                <button type="submit" class="btn btn-primary " >Create Post</button>
            </div>
            
        </form>
    </div>



    @foreach($posts as $post)
    
        
            <div class="post-card">
                <div class="d-flex justify-content-between mb-1">
                    <div class="d-flex align-items-center mb-1">
                        <img class="rounded-circle me-2" width="38" height="38" alt="User" src="{{ asset('storage/' . $post->user->profile_image) }}" width="40" class="rounded-circle me-2">
                        <span class="post-author">{{ $post->user->name }}</span><br>
                        <span class="post-date">:{{ $post->created_at->diffForHumans() }}</span>
                    </div>

                        @if (auth()->check() && auth()->id() === $post->user_id)
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this post?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="trash"><i class="bi bi-trash me-2"></i></button>
                            </form>
                        @endif
                </div>        


                <hr>
                <p class="post-content">{{ $post->description }}</p>
                
                 

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
                       
                            $reactionIcons = [
                                'like' => '👍',
                                'love' => '❤️',
                                'haha' => '😂',
                                'wow' => '😮',
                                'sad' => '😢',
                                'angry' => '😡',
                            ];

                            $userReaction = $post->reactions->where('user_id', auth()->id())->first();
                        @endphp

                    <div class="reaction-wrapper position-relative d-inline-block">
                        <button class="reaction-btn main-reaction {{ $userReaction ? 'active' : '' }}" type="button" aria-label="React with emoji">
                            @if($userReaction)
                                {{ $reactionIcons[$userReaction->type] ?? '' }}
                            @else
                                <i class="bi bi-hand-thumbs-up"></i>
                            @endif
                        </button>


                        <div class="reaction-panel">
                            @foreach (['like' => '👍', 'love' => '❤️', 'haha' => '😂', 'wow' => '😮', 'sad' =>'😢', 'angry' => '😡'] as $type => $icon)
                                <button class="react-btn" data-type="{{ $type }}">
                                    {{ $icon }} {{ isset($reactions[$type]) ? $reactions[$type]->count() : 0 }}
                                </button>
                            @endforeach
                        </div>
                    </div>
                        
                        <div class="who-reacted-dropdown mt-2">
                            <button class="btn btn-sm btn-outline-secondary toggle-reaction-list" type="button">
                                Show Reactions
                            </button>

                            <div class="reaction-details mt-2" style="display: none;">
                                <small>
                                    @foreach ($reactions as $type => $group)
                                        {{ $group->count() }} {{ $type }} by
                                        {{ implode(', ', $group->pluck('user.name')->toArray()) }}<br>
                                    @endforeach
                                </small>
                            </div>
                        </div>

                    </div>



                        @php
                        $userReaction = $post->reactions->where('user_id', auth()->id())->first();
                        @endphp

                        
                        

                        



                        <hr>
            <div class="comments-section">
                <form class="add-comment d-flex mt-2" action="{{ route('comments.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <input class="form-control me-2" name="body" placeholder="Write a comment..." required></input>
                    <button class="btn btn-outline-primary" type="submit">Send</button>
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
            $(document).ready(function () {
                // Toggle panel when reaction button is clicked
                $('.main-reaction').on('click', function (e) {
                    e.stopPropagation(); // Prevent click from bubbling
                    const panel = $(this).siblings('.reaction-panel');
                    $('.reaction-panel').not(panel).hide(); // Hide others
                    if (panel.hasClass('show')) {
                        panel.removeClass('show');
                    } else {
                        $('.reaction-panel').removeClass('show'); // hide all others
                        panel.addClass('show');
                    }

                });

                // Click outside to close any open panel
                $(document).on('click', function () {
                    $('.reaction-panel').removeClass('show');

                });

                // Prevent close when clicking inside the panel
                $('.reaction-panel').on('click', function (e) {
                    e.stopPropagation();
                });

                // React button AJAX call
                $('.react-btn').click(function () {
                const type = $(this).data('type');
                const postId = $(this).closest('.reactions').data('post-id');

                const panel = $(this).closest('.reaction-panel'); // get the panel
                panel.removeClass('show'); // ✅ cleanly hides with CSS

                $.ajax({
                    url: `/posts/${postId}/react`,
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        type: type
                    },
                    success: function (response) {
                        alert('Reaction saved!');
                        location.reload(); // Or dynamically update the count
                    }
                });
            });
            });
        </script>

        <script>
            $(document).ready(function () {
                $('.toggle-reaction-list').on('click', function () {
                    const details = $(this).siblings('.reaction-details');

                    if (details.is(':visible')) {
                        details.slideUp();
                        $(this).text('Show Reactions');
                    } else {
                        details.slideDown();
                        $(this).text('Hide Reactions');
                    }
                });
            });
        </script>




@endsection
