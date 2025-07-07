@extends('layouts.app')

@section('content')

<div class="container">

    <div class="container py-5">
        <div class="row justify-content-center g-4">
            @foreach($items as $item)
                <div class="col-auto">
                    <div class="product-card">
                        @if($item->image)
                            <div class="product-img">
                                <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="{{ $item->name }}">
                            </div>
                        @endif
                        <div class="card-body">
                            <h3 class="product-title"><b>{{ $item->name }}</b></h3>
                            <p class="card-text"><b>Price:</b> Rs. {{ number_format($item->price, 2) }}</p>
                            <p class="card-text"><b>Quantity:</b> {{ $item->quantity }}</p>
                            <button href="#" class="add-cart-btn">Order Now</button> {{-- Add link to order route if needed --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
