{{-- resources/views/admin/comments/index.blade.php --}}
@extends('admin.layoutAd.app')

@section('content')

<div class="container mt-4">
    <h2 class="mb-4">All Comments</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @foreach ($comments as $comment)
        <div class="card mb-3">
            <div class="card-header d-flex justify-content-between">
                <strong>Post by: {{ $comment->post->user->name ?? 'N/A' }}</strong>
                <form action="{{ route('admin.comments.destroy', $comment->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this comment?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
            <div class="card-body">
                <p><strong>Post Description:</strong> {{ $comment->post->description }}</p>
                <p><strong>Commented by:</strong> {{ $comment->user->name ?? 'N/A' }}</p>
                <p><strong>Comment:</strong> {{ $comment->body }}</p>
            </div>
        </div>
    @endforeach

    <div class="d-flex justify-content-center">
        {{ $comments->links() }}
    </div>
</div>
@endsection
