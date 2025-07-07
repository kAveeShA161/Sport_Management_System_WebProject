{{-- resources/views/admin/comments/index.blade.php --}}
@extends('admin.layoutAd.app')

@section('content')

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @foreach ($comments as $comment)
        <div class="comment-card">
            <div class="post-by">
                <strong class="post-by-left"><i class="fa-solid fa-user"></i> Post by: <span class="content-text">{{ $comment->post->user->name ?? 'N/A' }}</span></strong>
                <form action="{{ route('admin.comments.destroy', $comment->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this comment?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="trash" style="border: none; background: none;"><i class="fa-solid fa-trash delete-icon" title="Delete comment"></i></button>
                </form>
            </div>
            <hr class="post-separator" />
            <div class="card-body">
                <p class="post-desc"><i class="fa-solid fa-file-lines"></i> Post Description:</strong><span class="content-text"> {{ $comment->post->description }}</span></p>
                <p class="comment-by"><i class="fa-solid fa-reply"></i> Commented by:</strong><span class="content-text"> {{ $comment->user->name ?? 'N/A' }}</span></p>
                <p class="comment-text"><i class="fa-solid fa-comment"></i> Comment:</strong><span class="content-text"> {{ $comment->body }}</span></p>
            </div>
        </div>
    @endforeach

    <div class="d-flex justify-content-center">
        {{ $comments->links() }}
    </div>

@endsection
