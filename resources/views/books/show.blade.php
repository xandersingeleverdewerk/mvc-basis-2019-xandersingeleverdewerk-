@extends('layout.layout')

@section('content')
    <h1 class="mt-5">Books</h1>

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('books.index') }}">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('books.create') }}">Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('books.show',
                                               ['books' => $book->id]) }}">Book Details</a>
            </li>
        </ul>
    </nav>

    <div class="card">
        <div class="card-header">
            Book Details
        </div>
        <div class="card-body">
            <h2 class="card-title">{{ $book->title }}</h2>
            <p class="card-text">{{ $book->description }}</p>
            <p class="card-text">{{ $book->isbn }}</p>
        </div>
    </div>

@endsection
