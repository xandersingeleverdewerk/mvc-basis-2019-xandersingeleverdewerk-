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
                <a class="nav-link active" href="{{ route('products.create') }}">Create</a>
            </li>
        </ul>
    </nav>
    
    {!! Form::open(['route' => 'products.store']) !!}

    <div class="form-group">
        {!! Form::label('productname', 'Productname') !!}
        {!! Form::text('productname', '', ['class' => 'form-control', 'id' => 'productname']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::textarea('description', '', ['class' => 'form-control', 'id' => 'description']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('price', 'Price') !!}
        {!! Form::text('price', '', ['class' => 'form-control', 'id' => 'price']) !!}
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

    {!! Form::close() !!}
@endsection
