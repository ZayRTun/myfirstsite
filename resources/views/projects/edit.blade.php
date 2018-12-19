@extends('layout')

@section('title', 'Edit project')

@section('content')
    <h1 class="title">Edit project</h1>

    <form action="/projects/{{ $project->id }}" method="POST">
        @method('PATCH')
        @csrf

        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>

            <div class="control">
                <textarea class="textarea" name="description">{{ $project->description }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
              <button class="button is-link" type="submit">Update project</button>
            </div>
        </div>
    </form>

    <form action="/projects/{{ $project->id }}" method="POST">
        @method('DELETE')
        @csrf

        <div class="field">
            <div class="control">
              <button class="button is-danger">Delete Project</button>
            </div>
        </div>
    </form>
@endsection
