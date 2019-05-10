@extends('layout.layout')

@section('content')
    <h1>Categories</h1>

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
                <a class="nav-link" href="{{ url('/categories') }}">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/categories/create') }}">Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('/categories/'.$category->id) }}">Show</a>
            </li>
        </ul>
    </nav>

    <div class="card">
        <div class="card-header">
            Product Details
        </div>
        <div class="card-body">
            <h2 class="card-title">{{ $category->name }}</h2>
        </div>
    </div>
@endsection
