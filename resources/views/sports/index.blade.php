@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="section-title">Sports Teams</h2>
    
    
    <!-- Search Form -->
    <!-- Search Form with Dropdown -->
    <div class="row justify-content-center mt-4 mb-5">
        <div class="col-md-8">
            <form class="input-group" method="GET" action="{{ route('sports.index') }}">
                
                <select name="search" id="search" class="form-select">
                    <option value="">-- Select Sport --</option>
                    @foreach ($sportsList as $sport)
                        <option value="{{ $sport }}" {{ $sport == $selectedSport ? 'selected' : '' }}>
                            {{ $sport }}
                        </option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
    </div>

    <hr class="section-divider" />

    @foreach ($sports as $sportName => $members)
        <div class="sport-section mt-4">
            <h3 class="section-title">{{ $sportName }}</h3>
        
            <div class="row text-center justify-content-center mb-4">
                <div class="col-md-4 profile-box highlighted">
                    @php
                        $coach = $members->first()->coach;
                    @endphp

                    <!-- Coach Info -->
                        <div class="circle">
                            <img src="{{ asset('storage/' . $coach->photo) }}" width="100">
                        </div>
                        <div class="name-box">
                            <p><strong>Coach:</strong> {{ $coach->coach_name }}</p>
                            <small style="font-size: 12px">{{ $coach->email }}</small><br>
                            <small style="font-size: 12px">{{ $coach->telephone_number }}</small>
                        </div>
                </div>
            </div>    
            
            <div class="row text-center justify-content-center mb-4">
                {{-- Show Captain --}}
                <div class="col-md-4 profile-box highlighted">
                    @foreach ($members as $member)
                        @if ($member->student_role === 'Captain')
                            @php $student = $member->student; @endphp
                                <div class="circle">
                                    <img src="{{ asset('storage/' . $student->photo) }}" width="100" class="mb-2">
                                </div>
                                <div class="name-box">
                                    <p><strong>Captain:</strong> {{ $student->student_name }}</p>
                                    <small style="font-size: 12px">{{ $student->student_email }}</small><br> 
                                    <small style="font-size: 12px">{{ $student->student_contact }}</small> 
                                </div>              
                        @endif
                    @endforeach
                </div>

                {{-- Show Vice Captain --}}
                <div class="col-md-4 profile-box highlighted">
                    @foreach ($members as $member)
                        @if ($member->student_role === 'Vice Captain')
                            @php $student = $member->student; @endphp
                                <div class="circle">
                                    <img src="{{ asset('storage/' . $student->photo) }}" width="100" class="mb-2">
                                </div>
                                <div class="name-box">
                                    <p><strong>Vice Captain:</strong> {{ $student->student_name }}</p>
                                    <small style="font-size: 12px">{{ $student->student_email }}</small><br> 
                                    <small style="font-size: 12px">{{ $student->student_contact }}</small> 
                                </div>              
                        @endif
                    @endforeach
                </div>
            </div>    
             
</div>

    <!-- Divider -->
    <hr class="section-divider" />

{{-- Show other team members --}}
<h4 class="section-title">Team Members</h4>
<div class="row text-center justify-content-center">
    @foreach ($members as $member)
        @if ($member->student_role !== 'Captain' && $member->student_role !== 'Vice Captain')
            @php $student = $member->student; @endphp
            <div class="col-md-3 profile-box">
                <div class="circle">
                    <img src="{{ asset('storage/' . $student->photo) }}" width="100" class="mb-2">
                </div>
                <div class="name-box">    
                    
                    <span> {{ $student->student_name }}</span><br>
                    <small style="font-size: 12px"> {{ $student->student_email }}</small><br>
                    <small style="font-size: 12px"> {{ $student->student_contact }}</small>
                </div>
            </div>
        @endif
    @endforeach
</div>






            
        
    @endforeach
</div>
@endsection
