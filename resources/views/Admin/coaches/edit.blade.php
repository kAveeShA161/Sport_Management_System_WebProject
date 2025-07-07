@extends('admin.layoutAd.app')

@section('content')

<div class="container-form">
    <div class="form-card">
        <div class="form-title">
           <i class="fa-solid fa-pen-to-square"></i> Edit Coach
        </div>    

        <form action="{{ route('admin.coaches.update', $coach->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            @if($coach->photo)
                <img class="student-img" style="width: 100px; height: 100px" src="{{ asset('storage/' . $coach->photo) }}" width="100" class="mb-2">
            @endif
            

            <div class="mb-3">
                <label for="coach_name" class="form-label">Name</label>
                <input type="text" name="coach_name" class="form-control" value="{{ old('coach_name', $coach->coach_name) }}" required>
            </div>

            <div class="mb-3">
                <label for="sport" class="form-label">Sport</label>
                <input type="text" name="sport" class="form-control" value="{{ old('sport', $coach->sport) }}" required>
            </div>

            <div class="mb-3">
                <label for="telephone_number" class="form-label">Telephone</label>
                <input type="text" name="telephone_number" class="form-control" value="{{ old('telephone_number', $coach->telephone_number) }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email', $coach->email) }}" required>
            </div>

            <div class="mb-3">
                <label for="photo" class="form-label">Photo</label>
                <input type="file" name="photo" class="form-control" value="{{ old('photo', $coach->photo) }}">
            </div>


            <button class="btn btn-submit">Update Coach</button>
        </form>
    </div>
</div>
@endsection
