@extends('layout.layout')
@section('content')
    <h1 class="mt-5">Reviews</h1>

    @if($errors->any())
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
                <a class="nav-link active" href="{{ url('/reviews/create') }}">Create</a>
            </li>
        </ul>
    </nav>

    {!! Form::open(['url' => '/reviews']) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', '', ['class' => 'form-control',
                                                'id' => 'title']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('username', 'Username') !!}
        {!! Form::text('username', '', ['class' => 'form-control',
                                                'id' => 'username']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body', 'Body') !!}
        {!! Form::text('body', '', ['class' => 'form-control',
                                                'id' => 'body']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('rating', 'Rating') !!}
        {!! Form::text('rating', '', ['class' => 'form-control',
                                                'id' => 'rating']) !!}
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

    {!! Form::close() !!}
@endsection
