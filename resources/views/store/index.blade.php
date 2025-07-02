@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Available Store Items</h1>

    <div class="row">
        @foreach($items as $item)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="{{ $item->name }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">Price: Rs. {{ number_format($item->price, 2) }}</p>
                        <p class="card-text">Quantity Available: {{ $item->quantity }}</p>
                        <a href="#" class="btn btn-primary">Order Now</a> {{-- Add link to order route if needed --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
