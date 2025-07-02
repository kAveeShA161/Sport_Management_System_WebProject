@extends('admin.layoutAd.app')

@section('content')
<h2>Store Items</h2>
<a href="{{ route('admin.store_items.create') }}">Add New Item</a>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table>
    <tr>
        <th>Name</th><th>Price</th><th>Qty</th><th>Image</th><th>Actions</th>
    </tr>
    @foreach($items as $item)
    <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->price }}</td>
        <td>{{ $item->quantity }}</td>
        <td>
            @if($item->image)
                <img src="{{ asset('storage/' . $item->image) }}" width="50">
            @endif
        </td>
        <td>
            <a href="{{ route('admin.store_items.edit', $item) }}">Edit</a>
            <form method="POST" action="{{ route('admin.store_items.destroy', $item) }}" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Delete?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
