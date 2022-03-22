@extends('layout')

@section('table')
<table class="table mt-4">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Description</th>
        <th scope="col">Quantity</th>
        <th scope="col">Date</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <th scope="row">{{ $product->id }}</th>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->created_at }}</td>
            <td>
                <a class="btn btn-danger" href="{{ route('products.destroy', $product->id) }}">Eliminar</a>
                <a class="btn btn-warning" href="{{ route('products.edit', $product->id) }}">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
