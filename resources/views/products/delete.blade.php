@extends('layout.layout')

@section('content')

    <h1 class="mt-5">Products</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('products.index') }}">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('products.create') }}">Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('products.delete',
                                        ['product' => $product->id]) }}">Delete Product</a>
            </li>
        </ul>
    </nav>

    {!! Form::open(['url' => route('products.destroy', $product->id), 'method' => 'DELETE']) !!}

    <div class="form-group">
        {!! Form::label('productname', 'Productname') !!}
        {!! Form::text('productname', $product->productname, ['class' => 'form-control',
                                                              'id' => 'productname',
                                                              'disabled' => 'disabled']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::textarea('description', $product->description, ['class' => 'form-control',
                                                                  'id' => 'description',
                                                                  'disabled' => 'disabled']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('price', 'Price') !!}
        {!! Form::text('price', $product->price, ['class' => 'form-control',
                                                               'id' => 'price',
                                                               'disabled' => 'disabled']) !!}
    </div>
    <button type="submit" class="btn btn-primary">Delete</button>

    {!! Form::close() !!}
@endsection
