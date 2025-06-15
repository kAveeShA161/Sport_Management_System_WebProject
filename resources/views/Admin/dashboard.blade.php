@extends('admin.layoutAd.app')
@section('content')
<div class="container mt-5 pt-5">
    <h3 class="text-white mb-4">Dashboard</h3>
   
  <div class="row">
    <div class="col-md-6 mb-4">
        <a href="{{ route('admin.coaches.index') }}" class="btn btn-primary w-100">
            ➕ Add Coach Details
        </a>
    </div>
    <div class="col-md-6 mb-4">
        <a href="{{ route('admin.members.index') }}" class="btn btn-success w-100">
            ➕ Add Student (Member) Details
        </a>
    </div>
</div>
  