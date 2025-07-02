@extends('admin.layoutAd.app')

@section('content')
<div class="container">
    <h2>User Accounts</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Profile</th>
                <th>Name</th>
                <th>Email</th>
                <th>Faculty</th>
                <th>Department</th>
                <th>Batch</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>
                        @if($user->profile_image)
                            <img src="{{ asset('storage/' . $user->profile_image) }}" width="50">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->faculty }}</td>
                    <td>{{ $user->department }}</td>
                    <td>{{ $user->batch }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="9" class="text-center">No users found.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
