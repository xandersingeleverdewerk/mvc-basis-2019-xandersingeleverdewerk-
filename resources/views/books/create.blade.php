@extends('layout.layout')

@section('content')

    <h1 class="mt-5">Books</h1>

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
                <a class="nav-link" href="{{ route('books.index') }}">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('books.create') }}">Create</a>
            </li>
        </ul>
    </nav>

    {!! Form::open(['route' => 'books.store']) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', '', ['title' => 'form-control', 'id' => 'title']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::textarea('description', '', ['class' => 'form-control', 'id' => 'description']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('isbn', 'Isbn') !!}
        {!! Form::text('isbn', '', ['class' => 'form-control', 'id' => 'isbn']) !!}
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

    {!! Form::close() !!}
@endsection
