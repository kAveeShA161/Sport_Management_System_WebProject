@extends('admin.layoutAd.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Manage User Posts</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @forelse ($posts as $post)
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <strong>Posted by: {{ $post->user->name ?? 'N/A' }}</strong>
                <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>

            <div class="card-body">
                <p><strong>Description:</strong> {{ $post->description }}</p>

                <div class="row">
                    @foreach ($post->media as $media)
                        <div class="col-md-4 mb-3">
                            @if ($media->type === 'image')
                                <img src="{{ asset($media->file_path) }}" class="img-fluid rounded" alt="Post Image">
                            @elseif ($media->type === 'video')
                                <video controls class="w-100 rounded">
                                    <source src="{{ asset($media->file_path) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @empty
        <div class="alert alert-info">No posts found.</div>
    @endforelse

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
</div>
@endsection
