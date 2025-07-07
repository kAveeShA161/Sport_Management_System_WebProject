@extends('admin.layoutAd.app')

@section('content')
<div class="container-table">
    <div class="table-card">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text" style="color: #002b5b;">Store Items</h4>
            <a class="btn btn-primary btn-add-member" href="{{ route('admin.store_items.create') }}"><i class="fas fa-plus me-1"></i> Add New Item</a>

            @if(session('success'))
                <p>{{ session('success') }}</p>
            @endif
        </div>
        <div class="table-responsive">
            <table class="table align-middle">
                <tr>
                    <th>Image</th><th>Name</th><th>Price</th><th>Qty</th><th>Actions</th>
                </tr>
                @foreach($items as $item)
                <tr>
                    <td>
                        @if($item->image)
                            <img class="student-img" src="{{ asset('storage/' . $item->image) }}" width="50">
                        @endif
                    </td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->quantity }}</td>
                    
                    <td>
                        <a href="{{ route('admin.store_items.edit', $item) }}"><i class="fas fa-edit text-primary" title="Edit"></i></a>
                        <form method="POST" action="{{ route('admin.store_items.destroy', $item) }}" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="border: none; background: none;" onclick="return confirm('Delete?')"><i class="fas fa-trash" title="Delete"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>    
    </div>        
</div>        
@endsection
