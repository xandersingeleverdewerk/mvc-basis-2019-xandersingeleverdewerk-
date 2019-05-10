@extends('layout.layout')

@section('content')
    <h1>Reviews</h1>

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
                <a class="nav-link" href="{{ url('/reviews') }}">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/reviews/create') }}">Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('/reviews/'.$review->id) }}">Show</a>
            </li>
        </ul>
    </nav>

    <div class="card">
        <div class="card-header">
            Product Details
        </div>
        <div class="card-body">
            <h2 class="card-title">{{ $review->title }}</h2>
            <p class="card-text">{{ $review->username }}</p>
            <p class="card-text">{{ $review->body }}</p>
            <p class="card-text">{{ $review->rating }}</p>
        </div>
    </div>
@endsection
