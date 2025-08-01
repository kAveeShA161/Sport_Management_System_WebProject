@extends('admin.layoutAd.app')

@section('content')

<div class="container-form">
    <div class="form-card">
        <div class="form-title">
            <i class="fa-solid fa-pen-to-square"></i> Edit Team Members</h2>
        </div>

        <form action="{{ route('admin.teams.update', $team->id) }}" method="POST">
            {{-- Use POST method with PUT for updating --}}
            @csrf
            @method('PUT')

            {{-- Sport Name --}}
            <div class="mb-3">
                <div class="form-group">
                    <label>Select Sport</label>
                    <select name="sport_name" class="form-control" >
                        <option value="{{ old('sport_name', $team->sport_name) }}">{{ old('sport_name', $team->sport_name) }}</option>
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
                        <option value="{{ $team->coach_id }}" selected>
                            {{ optional($coaches->firstWhere('id', $team->coach_id))->coach_name ?? 'Select Coach' }}
                        </option>
                        @foreach($coaches as $coach)
                            @if($coach->id != $team->coach_id)
                                <option value="{{ $coach->id }}">{{ $coach->coach_name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>


            {{-- Student --}}
            <div class="mb-3">
                <div class="form-group">
                    <label>Select Student</label>
                    <select name="student_id" class="form-control" required>
                        <option value="{{ old('student_id', $team->student_id) }}">
                            {{ optional($students->firstWhere('id', $team->student_id))->student_name ?? 'Select Student' }}
                        </option>
                        @foreach($students as $student)
                            <option value="{{ $student->id }}"
                                {{ old('student_id', $team->student_id) == $student->id ? 'selected' : '' }}>
                                {{ $student->student_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>    


            {{-- Student Role --}}
            <div class="mb-3">
                <div class="form-group">
                    <label>Student Role</label>
                    <select name="student_role" class="form-control" required>
                        <option value="{{ old('student_role', $team->student_role) }}">{{ old('student_role', $team->student_role) }}</option>
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
