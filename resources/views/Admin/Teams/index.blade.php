@extends('admin.layoutAd.app')

@section('content')

    <div class="container-table">
        <div class="table-card">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="text-primary" style="color: #002b5b;">Sports Team Table</h4>
                <a href="{{ route('admin.teams.create') }}" class="btn btn-primary btn-add-member">
                    <i class="fas fa-user-plus me-1"></i> Add New Team 
                </a>
            </div>
        
            

            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>Sport Name</th>
                            <th>Coach</th>
                            <th>Student</th>
                            <th>Student Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($teams as $sport_name => $teamGroup)
                            @foreach($teamGroup as $team)
                                <tr>
                                    <td>{{ $sport_name }}</td>
                                    <td>{{ $team->coach->coach_name ?? 'N/A' }}</td>
                                    <td>{{ $team->student->student_name ?? 'N/A' }}</td>
                                    <td>{{ $team->student_role }}</td>
                                    <td>
                                        <a href="{{ route('admin.teams.edit', $team->id) }}" class="action-icons"><i class="fas fa-edit text-primary" title="Edit"></i></a>

                                        <form action="{{ route('admin.teams.destroy', $team->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="border: none; background: none;" onclick="return confirm('Are you sure?')" class="action-icons">
                                                <i class="fas fa-trash" title="Delete"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach

                    </tbody>
                </table>

                @if($teams->isEmpty())
                    <p>No teams found.</p>
                @endif

            </div>
        </div>
      </div>
    </div>


@endsection
