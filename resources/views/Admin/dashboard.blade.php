@extends('admin.layoutAd.app')
@section('content')

<br><br>
    <h3 class="text-white mb-4">Dashboard</h3>
   
  <div class="row">

    <div class="content">
        <div class="action-buttons">
        <button class="btn btn-primary" ><a href="{{ route('admin.coaches.index') }}" ><i class="fas fa-user-plus"></i> Add Coach</a></button>
        <button class="btn btn-secondary"><a href="{{ route('admin.members.index') }}" ><i class="fas fa-people-group"></i> Add Team Members</a></button>
        </div>
    </div>

    <div class="content">
      <h3><i class="fas fa-newspaper"></i> Latest News</h3>
    </div>

</div>
  