@extends('admin.layoutAd.app')

@section('content')

<div class="container">
    <h2>Sport Teams</h2>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Sport Teams</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('admin.teams.create') }}" class="btn btn-primary mb-3">
                Add New Team <i class="fa fa-plus" aria-hidden="true"></i>
            </a>

            <div class="table-responsive">
                <table class="table table-bordered">
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
                        @foreach($teams as $team)
                        <tr>
                            <td>{{ $team->sport_name }}</td>
                            <td>{{ $team->coach->coach_name ?? 'N/A' }}</td>
                            <td>{{ $team->student->student_name ?? 'N/A' }}</td>
                            <td>{{ $team->student_role }}</td>
                            <td>
                                <a href="{{ route('admin.teams.edit', $team->id) }}" class="btn btn-info">Edit</a>

                                <form action="{{ route('admin.teams.destroy', $team->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
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
