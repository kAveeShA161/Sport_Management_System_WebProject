@extends('admin.layoutAd.app')

@section('content')
<div class="container-table">
    <div class="table-card">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="text" style="color: #002b5b;">User Accounts</h4>
      </div>  
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table justify-content-between">
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
                                    <img class="student-img" src="{{ asset('storage/' . $user->profile_image) }}" width="50">
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
                                    <button style="border: none; background: none;" class="btn btn-danger btn-sm"><i class="fas fa-trash" title="Delete"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="9" class="text-center">No users found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>    
      </div>    
</div>
@endsection
