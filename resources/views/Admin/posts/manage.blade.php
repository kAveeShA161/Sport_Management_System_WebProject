@extends('admin.layoutAd.app')

@section('content')

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @forelse ($posts as $post)
        <div class="container">
            <div class="comment-card">
                <div class="post-by">
                    <strong class="post-by-left"><i class="fa-solid fa-user"></i> Posted by: <span class="content-text">{{ $post->user->name ?? 'N/A' }}</span></strong>
                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?')">
                        @csrf
                        @method('DELETE')
                         <button type="submit" class="trash" style="border: none; background: none;"><i class="fa-solid fa-trash delete-icon" title="Delete post"></i></button>
                    </form>
                </div>
                <hr class="post-separator" />
                <div class="post-desc">
                    <p ><i class="fa-solid fa-file-lines"></i> Description: <span class="content-text">{{ $post->description }}</span></p>
                </div>    
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

@endsection
