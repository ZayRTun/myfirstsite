@extends('layouts.app')


@section('content')
    <div class="container">
        <h1>Create Projects</h1>
        <form action="/projects" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Tile</label>
                <input type="text" name="title" class="form-control {{ $errors->has('title') ? 'border-danger' : '' }}" id="title" aria-describedby="title" placeholder="Title" value="{{ old('title') }}">

            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control {{ $errors->has('description') ? 'border-danger' : '' }}" id="description" placeholder="Description">{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>

    @include('errors')
@endsection
