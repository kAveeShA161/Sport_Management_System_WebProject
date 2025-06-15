@extends('admin.layoutAd.app')

@section('content')

<div class="container mt-4">
    <h2>Edit Student</h2>

    <form action="{{ route('admin.members.update', $student->id) }}" method="POST" enctype="multipart/form-data">
        {{-- Use POST method with PUT for updating --}}
        @csrf
        @method('PUT')

         @if($student->photo)
            <img src="{{ asset('storage/' . $student->photo) }}" width="100" class="mb-2">
        @endif

        <div class="mb-3">
            <label for="student_name" class="form-label">Name</label>
            <input type="text" name="student_name" class="form-control" value="{{ old('student_name', $student->student_name) }}" required>
        </div>

        <div class="mb-3">
            <label for="student_email" class="form-label">Email</label>
            <input type="email" name="student_email" class="form-control" value="{{ old('student_email', $student->student_email) }}" required>
        </div>

        <div class="mb-3">
            <label for="student_contact" class="form-label">Contact</label>
            <input type="text" name="student_contact" class="form-control" value="{{ old('student_contact', $student->student_contact) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Photo</label>
            <input type="file" name="photo" class="form-control" value="{{ old('photo', $student->photo) }}">
        </div>

        <button class="btn btn-success">Update Student</button>
    </form>
</div>
@endsection
