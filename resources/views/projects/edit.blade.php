@extends('layout')

@section('title', 'Edit project')

@section('content')
    <h1 class="title">Edit project</h1>

    <form action="/projects/{{ $project->id }}" method="POST">
        @method('PATCH')
        @csrf

        <div class="form-group">
            <label for="title">Title</label>

            <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $project->title }}">
        </div>

        <div class="form-group">
            <label for="description">Description</label>

            <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $project->description }}</textarea>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>

    <form action="/projects/{{ $project->id }}" method="POST" class="mt-3">
        @method('DELETE')
        @csrf

        <div class="form-group">
            <button type="submit" class="btn btn-danger">Delete Project</button>
        </div>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul class="list-unstyled">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
