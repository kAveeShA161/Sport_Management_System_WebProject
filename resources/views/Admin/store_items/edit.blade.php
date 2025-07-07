@extends('admin.layoutAd.app')

@section('content')
<div class="container-form">
    <div class="form-card">
      <div class="form-title">
        <i class="fa-solid fa-pen-to-square"></i> Edit Store Item
      </div>  
        @if($errors->any())
            <div style="color: red;">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.store_items.update', $store_item) }}">
            @csrf
            @method('PUT')

            @if($store_item->image)
                <img class="student-img" style="border-radius: 50%; width:100px; height: 100px;" src="{{ asset('storage/' . $store_item->image) }}" width="80">
            @endif

            <div class="mb-3">
                <label>Name:</label>
                <input class="form-control" name="name" value="{{ old('name', $store_item->name) }}" required>
            </div>

            <div class="mb-3">
                <label>Price:</label>
                <input class="form-control" name="price" type="number" step="0.01" value="{{ old('price', $store_item->price) }}" required>
            </div>

            <div class="mb-3">
                <label>Quantity:</label>
                <input class="form-control" name="quantity" type="number" value="{{ old('quantity', $store_item->quantity) }}" required>
            </div>

            <div class="mb-3">
                <label>Image:</label>
                <input class="form-control" name="image" type="file">
            </div>
            

            <button class="btn btn-submit" type="submit">Update Item</button>
        </form>
    </div>
</div>
@endsection
