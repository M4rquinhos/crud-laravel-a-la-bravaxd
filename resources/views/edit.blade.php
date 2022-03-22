@extends('layout')

@section('content')
<div class="container">
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control"  name="name" value="{{ $product->name }}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Price</label>
            <input type="number" class="form-control"  name="price" value="{{ $product->price }}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $product->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Quantity</label>
            <input type="number" class="form-control"  name="quantity" value="{{ $product->quantity }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
