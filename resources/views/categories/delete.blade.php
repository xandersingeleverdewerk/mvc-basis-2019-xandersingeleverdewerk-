@extends('layout.layout')
@section('content')
    <h1 class="mt-5">categories</h1>

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
                <a class="nav-link active" href="{{ url('/categories/'.$category->id.'/destroy') }}">Delete</a>
            </li>
        </ul>
    </nav>

    {!! Form::open(['url' => '/categories/'.$category->id, 'method' => 'DELETE']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', $category->name, ['class' => 'form-control',
                                                'id' => 'title', 'disabled' => 'disabled']) !!}
    </div>
    <button type="submit" class="btn btn-primary">Delete</button>

    {!! Form::close() !!}
@endsection
