<style>
    .comments-section {
    margin-top: 10px;
    padding-left: 12px;
    border-left: 2px solid #cad0d9;
    }
    .one-comment {
    margin-bottom: 5px;
    border: none;
    border-left: 3px solid #cad0d9;
    padding: 10px;
    background-color: #f9fbff
    }
    .comment {
    margin-bottom: 12px;
    border: none;
    padding: 10px;
    
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
</style>
<div class="comment" style="margin-left: {{ $level * 20 }}px;">
    <div class="one-comment">
        {{-- Comment Header --}}
        <div class="d-flex justify-content-between mb-1">
            <div class="d-flex align-items-center mb-1">
                <img src="{{ asset('storage/' . $comment->user->profile_image) }}" width="30" class="rounded-circle me-2">
                <strong class="comment-author">{{ $comment->user->name }}</strong>
                <small class="comment-date">:{{ $comment->created_at->diffForHumans() }}</small>
                
            </div>
            {{-- Delete Button --}}
            @if (Auth::check() && Auth::id() === $comment->user_id)
                <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="trash"><i class="bi bi-trash me-2"></i></button>
                </form>
            @endif
        </div>
        <p class="comment-content">{{ $comment->body }}</p>

        {{-- Reply Form --}}
    
            <form class="add-comment d-flex mt-2" action="{{ route('comments.store') }}" method="POST" style="margin-left: 10px;">
                @csrf
                <input type="hidden" name="post_id" value="{{ $postId }}">
                <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                <input class="form-control me-2" name="body" required placeholder="Write a reply..."></input>
                <button type="submit" class="btn btn-outline-primary">Reply</button>
            </form>
    </div>

    {{-- Recursive Replies --}}
    @foreach ($comment->replies as $reply)
        @include('partials.comment', ['comment' => $reply, 'level' => $level + 1, 'postId' => $postId])
    @endforeach
    
</div>
