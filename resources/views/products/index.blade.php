@extends('layout.layout')

@section('content')

    <h1 class="mt-5">Products</h1>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('products.index') }}">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('products.create') }}">Create</a>
            </li>
        </ul>
    </nav>

    <table class="table .table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Productname</th>
            <th scope="col">Price</th>
            <th scope="col">Product Details</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td scope="row">{{ $product->id }}</td>
                <td>{{ $product->productname }}</td>
                <td>{{ $product->price  }}</td>
                <td><a href="{{ route('products.show',
                                        ['product' => $product->id]) }}">Details</a></td>
                <td><a href="{{ route('products.edit',
                                        ['product' => $product->id]) }}">Edit</a></td>
                <td><a href="{{ route('products.delete',
                                        ['product' => $product->id]) }}">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
