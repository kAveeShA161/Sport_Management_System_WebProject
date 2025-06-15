@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Sports Teams</h2>

    <!-- Search Form -->
    <form method="GET" action="{{ route('sports.index') }}">
        <input type="text" name="search" placeholder="Search sport..." value="{{ request('search') }}">
        <button type="submit">Search</button>
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
                <img src="{{ asset($coach->profile_photo) }}" width="100">
                <p><strong>Name:</strong> {{ $coach->name }}</p>
                <p><strong>Email:</strong> {{ $coach->email }}</p>
                <p><strong>Contact:</strong> {{ $coach->contact_number }}</p>
            </div>

            <!-- Students -->
            <div class="row">
                @foreach ($members as $member)
                    @php $student = $member->student; @endphp
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <img src="{{ asset($student->profile_photo) }}" width="100">
                            <p><strong>Role:</strong> {{ $member->student_role }}</p>
                            <p><strong>Name:</strong> {{ $student->name }}</p>
                            <p><strong>Email:</strong> {{ $student->email }}</p>
                            <p><strong>Contact:</strong> {{ $student->contact_number }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
@endsection
