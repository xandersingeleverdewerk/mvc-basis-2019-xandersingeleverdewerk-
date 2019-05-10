@extends('layout.layout')

@section('content')
    <h1 class="mt-5">Reviews</h1>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('/reviews') }}">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/reviews/create') }}">Create</a>
            </li>
        </ul>
    </nav>

    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Rating</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reviews as $review)
            <tr>
                <th scope="row">{{ $review->id }}</th>
                <td>{{ $review->title }}</td>
                <td>{{ $review->username }}</td>
                <td>{{ $review->rating }}</td>
                <td><a href="{{ url('/reviews/'.$review->id.'/edit') }}">Edit</a></td>
                <td><a href="{{ url('/reviews/'.$review->id.'/delete') }}">Delete</a></td>
            </tr>
        @endforeach

        </tbody>
    </table>

@endsection
