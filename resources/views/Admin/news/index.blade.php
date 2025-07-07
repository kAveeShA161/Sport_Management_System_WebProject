@extends('admin.layoutAd.app')

@section('content')
<div class="container-table">
    <div class="table-card">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text" style="color: #002b5b;">News List</h4>
            <a class="btn btn-primary btn-add-member" href="{{ route('admin.news.create') }}">Add News</a>

            @if(session('success'))
                <div class="alert alert-success mt-2">{{ session('success') }}</div>
            @endif
        </div>

        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Posted At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($news as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                @if($item->image_path)
                                    <img src="{{ asset('storage/' . $item->image_path) }}" width="60" alt="News Image">
                                @else
                                    N/A
                                @endif
                            </td>
                            <td>{{ $item->title }}</td>
                            <td>{{ Str::limit($item->description, 60) }}</td>
                            <td>{{ $item->created_at->format('Y-m-d') }}</td>
                            <td>
                                <a href="{{ route('admin.news.edit', $item->id) }}" class="action-icons"><i class="fas fa-edit text-primary" title="Edit"></i></a>
                                <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button style="border: none; background: none;" onclick="return confirm('Delete this news item?')" class="action-icons">
                                        <i class="fas fa-trash text-danger" title="Delete"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">No news entries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>           
    </div>
</div>
@endsection
