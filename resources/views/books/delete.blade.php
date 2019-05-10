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
                <a class="nav-link" href="{{ route('books.create') }}">Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('books.delete',
                                        ['book' => $book->id]) }}">Delete Book</a>
            </li>
        </ul>
    </nav>

    {!! Form::open(['url' => route('books.destroy', $book->id), 'method' => 'DELETE']) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', $book->title, ['class' => 'form-control',
                                               'id' => 'title',
                                               'disabled' => 'disabled']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::textarea('description', $book->description, ['class' => 'form-control',
                                                               'id' => 'description',
                                                               'disabled' => 'disabled']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('isbn', 'Isbn') !!}
        {!! Form::text('isbn', $book->isbn, ['class' => 'form-control',
                                             'id' => 'isbn',
                                             'disabled' => 'disabled']) !!}
    </div>
    <button type="submit" class="btn btn-primary">Delete</button>

    {!! Form::close() !!}
@endsection
