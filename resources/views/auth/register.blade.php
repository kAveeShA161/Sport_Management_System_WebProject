@extends('layouts.app')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('stylesheet.css') }}" />

    <body class="registerform">
        <div class="register-container">
            <h4 class="text-center mb-4">Register Form</h4>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                    @error('name')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" />
                    @error('email')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                        name="phone" value="{{ old('phone') }}" required />
                    @error('phone')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="faculty" class="form-label">Faculty</label>
                    <select name="faculty" id="faculty" class="form-control @error('faculty') is-invalid @enderror" required>
                        <option value="">Select Faculty</option>
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
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="department" class="form-label">Department</label>
                    <select name="department" id="department" class="form-control @error('department') is-invalid @enderror" required>
                                    <option value="">Select Department</option>
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
                    @error('department')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="batch" class="form-label">Batch</label>
                    <select name="batch" id="batch" class="form-control @error('batch') is-invalid @enderror" required>
                        <option value="">Select Batch</option>
                        <option value="2019/2020">2019/2020</option>
                        <option value="2020/2021">2020/2021</option>
                        <option value="2021/2022">2021/2022</option>
                        <option value="2022/2023">2022/2023</option>
                    </select>
                    @error('batch')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label gender-label">Gender</label>
                    <div class="d-flex align-items-center mt-2">
                        <div class="form-check me-4">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required />
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="Female" />
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                    </div>
                    @error('gender')
                        <span class="text-danger small d-block mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="password"
                        class="form-control @error('password') is-invalid @enderror" name="password" required
                        autocomplete="new-password" />
                    @error('password')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password-confirm" class="form-label">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control"
                        name="password_confirmation" required autocomplete="new-password" />
                </div>

                <button type="submit" class="btn-login">Register</button>
            </form>
        </div>
    </body>
@endsection
