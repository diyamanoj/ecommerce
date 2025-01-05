
@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">Shopping Cart</h2>
    @if ($cartItems->isEmpty())
        <p>Your cart is currently empty.</p>
    @else
        <form action="{{ route('cart.update') }}" method="POST">
            @csrf
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartItems as $item)
                            <tr>
                                <td>{{ $item->product->name }}</td>
                                <td>${{ $item->product->price }}</td>
                                <td>
                                    <input type="number" name="quantity[{{ $item->id }}]" value="{{ $item->quantity }}" min="1" class="form-control" />
                                </td>
                                <td>${{ $item->product->price * $item->quantity }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <button type="submit" class="btn btn-primary">Update Cart</button>
        </form>
        <a href="{{ route('checkout') }}" class="btn btn-success mt-3">Proceed to Checkout</a>
    @endif
</div>
@endsection
