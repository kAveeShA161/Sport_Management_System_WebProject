@extends('admin.layoutAd.app')



@section('content')
<div class="container-form">
    <div class="form-card">
        <div class="form-title">
            <i class="fa-solid fa-plus"></i> Add New Coach
        </div>
            <form action="{{ route('admin.coaches.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="coach_name" class="form-label">Name</label>
                    <input type="text" name="coach_name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="sport" class="form-label">Sport</label>
                    <input type="text" name="sport" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="telephone_number" class="form-label">Telephone</label>
                    <input type="text" name="telephone_number" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="photo" class="form-label">Photo</label>
                    <input type="file" name="photo" class="form-control">
                </div>


                <button class="btn btn-submit">Add Coach</button>
            </form>
    </div>        
</div>
@endsection
