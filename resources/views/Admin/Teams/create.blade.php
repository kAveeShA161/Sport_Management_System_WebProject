@extends('admin.layoutAd.app')

@section('content')
<div class="container-form">
    <div class="form-card">
      <div class="form-title">
            <i class="fa-solid fa-plus"></i> Add New Sport Team
      </div>
    <form action="{{ route('admin.teams.store') }}" method="POST">
        @csrf

        {{-- Sport Name --}}
        <div class="mb-3">
            <div class="form-group">
                <label>Select Sport</label>
                <select name="sport_name" class="form-control" required>
                    <option value="">-- Select Sport --</option>
                    <option value="Football">Football</option>
                    <option value="Basketball">Basketball</option>
                    <option value="Cricket">Cricket</option>
                    <option value="Volleyball">Volleyball</option>
                    <option value="Badminton">Badminton</option>
                    <!-- Add more sports as needed -->
                </select>
            </div>
        </div>

        {{-- Coach --}}
        <div class="mb-3">
            <div class="form-group">
                <label>Select Coach</label>
                <select name="coach_id" class="form-control" required>
                    <option value="">-- Select Coach --</option>
                    @foreach($coaches as $coach)
                        <option value="{{ $coach->id }}">{{ $coach->coach_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        {{-- Student --}}
        <div class="mb-3">
            <div class="form-group">
                <label>Select Student</label>
                <select name="student_id" id="student-select" class="form-control" required>
                    <option value="">-- Select Student --</option>
                    @foreach($students as $student)
                        <option value="{{ $student->id }}">{{ $student->student_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>    

        {{-- Student Role --}}
        <div class="mb-3">
            <div class="form-group">
                <label>Student Role</label>
                <select name="student_role" class="form-control" required>
                    <option value="">-- Select Role --</option>
                    <option value="Captain">Captain</option>
                    <option value="Vice Captain">Vice Captain</option>
                    <option value="Player">Player</option>
                    <!-- Add more roles as needed -->
                </select>
            </div>
        </div>

        {{-- Submit --}}
        <button type="submit" class="btn btn-submit">Create Team</button>
    </form>
      
    </div>
</div>
@endsection
