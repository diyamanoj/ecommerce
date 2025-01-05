
@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">Products</h2>
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">${{ $product->price }}</p>
                        <form action="{{ route('cart.add', $product->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
