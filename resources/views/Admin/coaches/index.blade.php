@extends('admin.layoutAd.app')

@section('content')

<div class="container-table">
    <div class="table-card">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text" style="color: #002b5b;">Coaches List</h4>

                <a class="btn btn-primary btn-add-member" href="{{ route('admin.coaches.create') }}" ><i class="fas fa-user-plus me-1"></i> Add Coach</a>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
        </div>
        <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Sport</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($coaches as $coach)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    @if($coach->photo)
                                        <img class="student-img" src="{{ asset('storage/' . $coach->photo) }}" width="60">
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>{{ $coach->coach_name }}</td>
                                <td>{{ $coach->sport }}</td>
                                <td>{{ $coach->telephone_number }}</td>
                                <td>{{ $coach->email }}</td>
                                

                                <td>
                                    <a href="{{ route('admin.coaches.edit', $coach->id) }}" class="action-icons"><i class="fas fa-edit text-primary" title="Edit"></i></a>
                                    <form action="{{ route('admin.coaches.destroy', $coach->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button style="border: none; background: none;" onclick="return confirm('Delete this coach?')" class="btn btn-danger btn-sm"><i class="fas fa-trash" title="Delete"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="6">No coaches found.</td></tr>
                        @endforelse
                    </tbody>
                </table>
        </div>    
    
    </div>
</div>
@endsection
