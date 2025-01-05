
@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">Product Management</h2>
    <a href="{{ route('admin.product.create') }}" class="btn btn-success mb-3">Add New Product</a>
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">${{ $product->price }}</p>
                        <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('admin.product.delete', $product->id) }}" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
