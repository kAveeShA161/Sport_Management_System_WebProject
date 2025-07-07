@extends('layouts.app')

@section('content')
<div class="container profile-edit-form">
    <h3 class="mb-4" style="color: #003865;"><b>Edit Profile</b></h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-sm p-4 rounded">
        @csrf

        {{-- Profile Image --}}
        <div class="mb-4 d-flex align-items-center gap-4">
            <div class="position-relative">
                @if ($user->profile_image)
                    <img src="{{ asset('storage/' . $user->profile_image) }}" id="preview" class="profile-pic rounded-circle shadow">
                @else
                    <img src="{{ asset('images/default-profile.png') }}" id="preview" class="profile-pic rounded-circle shadow">
                @endif

                <label for="profile_image" class="upload-icon position-absolute">
                    <i class="bi bi-plus"></i>
                </label>
                <input type="file" id="profile_image" name="profile_image" class="d-none" onchange="previewImage(event)">
                @error('profile_image') <div class="text-danger small">{{ $message }}</div> @enderror
            </div>
        </div>

        {{-- Password --}}


        {{-- Name, Email, Phone --}}
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control" required>
                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" required>
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" value="{{ old('phone', $user->phone) }}" class="form-control">
            </div>
        </div>

        {{-- Faculty, Department --}}
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Faculty</label>
                <select name="faculty" class="form-select" required>
                    <option selected disabled>Select Faculty</option>
                    <option value="{{ old('faculty', $user->faculty) }}">{{ old('faculty', $user->faculty) }}</option>
                    <option value="Agricultural Sciences">Agricultural Sciences</option>
                    <option value="Applied Sciences">Applied Sciences</option>
                    <!-- [Add other options here] -->
                </select>
                @error('faculty') <div class="text-danger small">{{ $message }}</div> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Department</label>
                <select name="department" class="form-select" required>
                    <option selected disabled>Select Department</option>
                    <option value="{{ old('department', $user->department) }}">{{ old('department', $user->department) }}</option>
                    <option value="Department of Software Engineering">Department of Software Engineering</option>
                    <!-- [Add other options here] -->
                </select>
            </div>
        </div>

        {{-- Batch, Gender --}}
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Batch</label>
                <select name="batch" class="form-select" required>
                    <option value="{{ old('batch', $user->batch) }}">{{ old('batch', $user->batch) }}</option>
                    <option value="2020/2021">2020/2021</option>
                    <option value="2021/2022">2021/2022</option>
                    <!-- Add more as needed -->
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label d-block">Gender</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="Male" {{ old('gender', $user->gender) == 'Male' ? 'checked' : '' }}>
                    <label class="form-check-label">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="Female" {{ old('gender', $user->gender) == 'Female' ? 'checked' : '' }}>
                    <label class="form-check-label">Female</label>
                </div>
                @error('gender') <div class="text-danger small">{{ $message }}</div> @enderror
            </div>
        </div>

        <div class="mt-4 text-end">
            <button type="submit" class="btn btn-primary px-4">Update Profile</button>
        </div>
    </form>
</div>
@endsection
