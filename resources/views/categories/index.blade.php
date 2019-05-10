@extends('layout.layout')

@section('content')
    <h1 class="mt-5">Categories</h1>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('/categories') }}">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/categories/create') }}">Create</a>
            </li>
        </ul>
    </nav>

    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->name }}</td>
                <td><a href="{{ url('/categories/'.$category->id.'/edit')  }}">Edit</a></td>
                <td><a href="{{ url('/categories/'.$category->id.'/delete') }}">Delete</a></td>
            </tr>
        @endforeach

        </tbody>
    </table>

@endsection
