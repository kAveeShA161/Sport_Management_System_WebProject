@extends('admin.layoutAd.app')

@section('content')

<div class="container mt-4">
    <h2>Coaches List</h2>

    <a href="{{ route('admin.coaches.create') }}" class="btn btn-success mb-3">Add Coach</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Sport</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($coaches as $coach)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $coach->coach_name }}</td>
                    <td>{{ $coach->sport }}</td>
                    <td>{{ $coach->telephone_number }}</td>
                    <td>{{ $coach->email }}</td>
                    <td>
                        @if($coach->photo)
                            <img src="{{ asset('storage/' . $coach->photo) }}" width="60">
                        @else
                            N/A
                        @endif
                    </td>

                    <td>
                        <a href="{{ route('admin.coaches.edit', $coach->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.coaches.destroy', $coach->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Delete this coach?')" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6">No coaches found.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
