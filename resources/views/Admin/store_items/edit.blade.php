@extends('admin.layoutAd.app')

@section('content')
    <h2>Edit Store Item</h2>

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

        <label>Name:</label><br>
        <input name="name" value="{{ old('name', $store_item->name) }}" required><br><br>

        <label>Price:</label><br>
        <input name="price" type="number" step="0.01" value="{{ old('price', $store_item->price) }}" required><br><br>

        <label>Quantity:</label><br>
        <input name="quantity" type="number" value="{{ old('quantity', $store_item->quantity) }}" required><br><br>

        <label>Image (optional):</label><br>
        <input name="image" type="file"><br><br>

        @if($store_item->image)
            <img src="{{ asset('storage/' . $store_item->image) }}" width="80"><br><br>
        @endif

        <button type="submit">Update Item</button>
    </form>
@endsection
