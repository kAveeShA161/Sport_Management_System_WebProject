@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Profile</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Profile Image --}}
        <div class="mb-3">
            <label for="profile_image" class="form-label">Profile Image</label><br>
            @if ($user->profile_image)
                <img src="{{ asset('storage/' . $user->profile_image) }}" width="100" height="100" class="mb-2 rounded-circle">
            @endif
            <input type="file" name="profile_image" class="form-control">
            @error('profile_image') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        {{-- Name and Email --}}
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" class="form-control" required>
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" required>
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        {{-- Phone --}}
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" name="phone" value="{{ old('phone', $user->phone) }}" class="form-control">
        </div>

        {{-- Faculty --}}
        <div class="mb-3">
            <label for="faculty" class="form-label">Faculty</label>
            <div class="col-md-6">
                <select name="faculty" id="faculty" class="form-control @error('faculty') is-invalid @enderror" required>
                    <option value="{{ old('faculty', $user->faculty) }}">{{ old('faculty', $user->faculty) }}</option>
                    <option value="Agricultural Sciences">Agricultural Sciences</option>
                    <option value="Applied Sciences">Applied Sciences</option>
                    <option value="Geomatics">Geomatics</option>
                    <option value="Management Studies">Management Studies</option>
                    <option value="Social Sciences and Languages">Social Sciences and Languages</option>
                    <option value="Computing">Computing</option>
                    <option value="Medicine">Medicine</option>
                    <option value="Graduate Studies">Graduate Studies</option>
                    <option value="Technology">Technology</option>
                </select>
                @error('faculty')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
            </div>
        </div>

        {{-- Department --}}
        <div class="mb-3">
            <label for="department" class="form-label">Department</label>
            <select name="department" id="department" class="form-control @error('department') is-invalid @enderror" required>
                <option value="{{ old('department', $user->department) }}">{{ old('department', $user->department) }}</option>
                <option value="Department of Agribusiness Management">Department of Agribusiness Management</option>
                <option value="Department of Export Agriculture">Department of Export Agriculture</option><option value="Electrical Engineering">Electrical Engineering</option>
                <option value="Department of Livestock Production">Department of Livestock Production</option>
                <option value="Department of Food Science & Technology">Department of Food Science & Technology</option>
                <option value="Department of Natural Resources">Department of Natural Resources</option>
                <option value="Department of Physical Sciences & Technology">Department of Physical Sciences & Technology</option>
                <option value="Department of Computing & Information Systems (CIS)">Department of Computing & Information Systems (CIS)</option>
                <option value="Department of Sports Sciences & Physical Education">Department of Sports Sciences & Physical Education</option>
                <option value="Department of Software Engineering">Department of Software Engineering</option>
                <option value="Department of Computing and Information Systems">Department of Computing and Information Systems</option>
                <option value="Department of Data Science">Department of Data Science</option>
                <option value="Department of CPRSG">Department of CPRSG</option>
                <option value="Department of Surveying and Geodesy">Department of Surveying and Geodesy</option>
                <option value="Department of Accountancy and Finance">Department of Accountancy and Finance</option>
                <option value="Department of Business Management">Department of Business Management</option>
                <option value="Department of Marketing Management">Department of Marketing Management</option>
                <option value="Department of Tourism Management">Department of Tourism Management</option>
                <option value="Department of Anatomy">Department of Anatomy</option>
                <option value="Department of Biochemistry">Department of Biochemistry</option>
                <option value="Department of Community Medicine">Department of Community Medicine</option>
                <option value="Department of Forensic Medicine & Toxicology">Department of Forensic Medicine & Toxicology</option>
                <option value="Department of Medicine">Department of Medicine</option>
                <option value="Department of Microbiology">Department of Microbiology</option>
                <option value="Department of Obstetrics & Gynaecology">Department of Obstetrics & Gynaecology</option>
                <option value="Department of Paediatrics">Department of Paediatrics</option>
                <option value="Department of Parasitology">Department of Parasitology</option>
                <option value="Department of Pathology">Department of Pathology</option>
                <option value="Department of Pharmacology">Department of Pharmacology</option>
                <option value="Department of Physiology">Department of Physiology</option>
                <option value="Department of Primary Care & Family Medicine">Department of Primary Care & Family Medicine</option>
                <option value="Department of Psychiatry">Department of Psychiatry</option>
                <option value="Department of Surgery">Department of Surgery</option>
                <option value="Department of Economics and Statistics">Department of Economics and Statistics</option>
                <option value="Department of English Language Teaching">Department of English Language Teaching</option>
                <option value="Department of Geography & Environmental Management">Department of Geography & Environmental Management</option>
                <option value="Department of Languages">Department of Languages</option>
                <option value="Department of Social Sciences">Department of Social Sciences</option>
                <option value="Department of Information Technology">Department of Information Technology</option>
                <option value="Department of Engineering Technology">Department of Engineering Technology</option>
                <option value="Department of Biosystems Technology">Department of Biosystems Technology</option>
                <option value="Graduate Studies">Graduate Studies</option>
            </select>
        </div>

        {{-- Batch --}}
        <div class="mb-3">
            <label for="batch" class="form-label">Batch</label>
            <select name="batch" id="batch" class="form-control @error('batch') is-invalid @enderror" required>
                <option value="{{ old('batch', $user->batch) }}">{{ old('batch', $user->batch) }}</option>
                <option value="2019/2020">2019/2020</option>
                <option value="2020/2021">2020/2021</option>
                <option value="2021/2022">2021/2022</option>
                <option value="2022/2023">2022/2023</option>
            </select>
        </div>

        {{-- Gender --}}
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <div class="col-md-6 pt-2">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="Male" 
                        {{ old('gender', $user->gender) == 'Male' ? 'checked' : '' }} required>
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="Female"
                        {{ old('gender', $user->gender) == 'Female' ? 'checked' : '' }}>
                    <label class="form-check-label" for="female">Female</label>
                </div>
                @error('gender')
                    <div class="text-danger"><strong>{{ $message }}</strong></div>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
