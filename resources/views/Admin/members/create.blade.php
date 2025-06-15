@extends('admin.layoutAd.app')

@section('content')

<div class="container mt-4">
    <h2>Add New Student</h2>

    <form action="{{ route('admin.members.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="student_name" class="form-label">Name</label>
            <input type="text" name="student_name" class="form-control" value="{{ old('student_name') }}" required>
        </div>

        <div class="mb-3">
            <label for="student_email" class="form-label">Email</label>
            <input type="email" name="student_email" class="form-control" value="{{ old('student_email') }}" required>
        </div>

        <div class="mb-3">
            <label for="student_contact" class="form-label">Contact</label>
            <input type="text" name="student_contact" class="form-control" value="{{ old('student_contact') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Photo</label>
            <input type="file" name="photo" class="form-control">
        </div>

        <button class="btn btn-primary">Add Student</button>
    </form>
</div>
@endsection