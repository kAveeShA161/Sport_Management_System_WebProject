@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Sports Teams</h2>

    <!-- Search Form -->
    <!-- Search Form with Dropdown -->
    <form method="GET" action="{{ route('sports.index') }}">
        <label for="search">Filter by Sport:</label>
        <select name="search" id="search" class="form-control w-25 d-inline-block">
            <option value="">-- Select Sport --</option>
            @foreach ($sportsList as $sport)
                <option value="{{ $sport }}" {{ $sport == $selectedSport ? 'selected' : '' }}>
                    {{ $sport }}
                </option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>


    @foreach ($sports as $sportName => $members)
        <div class="sport-section mt-4">
            <h3>{{ $sportName }}</h3>

            @php
                $coach = $members->first()->coach;
            @endphp

            <!-- Coach Info -->
            <div class="card mb-3">
                <h4>Coach</h4>
                <img src="{{ asset('storage/' . $coach->photo) }}" width="100">
                <p><strong>Name:</strong> {{ $coach->coach_name }}</p>
                <p><strong>Email:</strong> {{ $coach->email }}</p>
                <p><strong>Contact:</strong> {{ $coach->telephone_number }}</p>
            </div>

            <!-- Students -->
            <div class="row">
                @foreach ($members as $member)
                    @php $student = $member->student; @endphp
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <img src="{{ asset('storage/' . $student->photo) }}" width="100">
                            <p><strong>Role:</strong> {{ $member->student_role }}</p>
                            <p><strong>Name:</strong> {{ $student->student_name }}</p>
                            <p><strong>Email:</strong> {{ $student->student_email }}</p>
                            <p><strong>Contact:</strong> {{ $student->student_contact }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
@endsection
