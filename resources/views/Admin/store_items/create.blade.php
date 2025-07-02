@extends('admin.layoutAd.app')

@section('content')
    <h2>Add New Store Item</h2>

    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" enctype="multipart/form-data" action="{{ route('admin.store_items.store') }}">
        @csrf

        <label>Name:</label><br>
        <input name="name" value="{{ old('name') }}" required><br><br>

        <label>Price:</label><br>
        <input name="price" type="number" step="0.01" value="{{ old('price') }}" required><br><br>

        <label>Quantity:</label><br>
        <input name="quantity" type="number" value="{{ old('quantity') }}" required><br><br>

        <label>Image (optional):</label><br>
        <input name="image" type="file"><br><br>

        <button type="submit">Add Item</button>
    </form>
@endsection
