@extends('template')
@section('titlePage', 'Home')
@section('content')
<a href="{{route('product.create')}}">
    <button type="button" class="btn btn-success">
        Add Product
    </button>
</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Stock</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($products as $product)
      <tr>
        <th scope="row">{{$product->id}}</th>
        <td>{{$product->name}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->stock}}</td>
        <td>
            <button type="button" class="btn btn-danger">Delete</button>
        </td>
      </tr>
    @empty
        <h1>Empty Array</h1>
      @endforelse
    </tbody>
  </table>
@endsection
