@extends('admin.layoutAd.app')

@section('content')
<div class="container-table">
    <div class="table-card">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="text" style="color: #002b5b;">Member List</h4>
            <a class="btn btn-primary btn-add-member" href="{{ route('admin.members.create') }}" class="btn btn-success mb-3">Add Member</a>

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
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($students as $student)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if($student->photo)
                                            <img class="student-img" src="{{ asset('storage/' . $student->photo) }}" width="60">
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td>{{ $student->student_name }}</td>
                                    <td>{{ $student->student_email }}</td>
                                    <td>{{ $student->student_contact }}</td>
                                    
                                    <td>
                                        <a href="{{ route('admin.members.edit', $student->id) }}" class="action-icons"><i class="fas fa-edit text-primary" title="Edit"></i></a>
                                        <form action="{{ route('admin.members.destroy', $student->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button style="border: none; background: none;" onclick="return confirm('Delete this student?')" class="action-icons"><i class="fas fa-trash" title="Delete"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">No students found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
        </div>           
                   
</div>
</div>
@endsection
