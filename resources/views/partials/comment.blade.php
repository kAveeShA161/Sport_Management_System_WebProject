<div class="comment" style="margin-left: {{ $level * 30 }}px;">
    <img src="{{ asset('storage/' . $comment->user->profile_image) }}" width="30" class="rounded-circle me-2">
    <strong>{{ $comment->user->name }}</strong>
    <small>{{ $comment->created_at->diffForHumans() }}</small>
    <p>{{ $comment->body }}</p>

    {{-- Delete Button --}}
    @if (Auth::check() && Auth::id() === $comment->user_id)
        <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
    @endif

    {{-- Reply Form --}}
    <form action="{{ route('comments.store') }}" method="POST" style="margin-left: 10px;">
        @csrf
        <input type="hidden" name="post_id" value="{{ $postId }}">
        <input type="hidden" name="parent_id" value="{{ $comment->id }}">
        <textarea name="body" required placeholder="Write a reply..."></textarea>
        <button type="submit" class="btn btn-sm btn-primary mt-1">Reply</button>
    </form>

    {{-- Recursive Replies --}}
    @foreach ($comment->replies as $reply)
        @include('partials.comment', ['comment' => $reply, 'level' => $level + 1, 'postId' => $postId])
    @endforeach
</div>
