@extends('layout')

@section('title', 'Create Projects')

@section('content')
    <h1>Create Projects</h1>
    <form action="/projects" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Tile</label>
            <input type="text" name="title" class="form-control" id="title" aria-describedby="title" placeholder="Title">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" cols="30" rows="10" placeholder="Description"></textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
@endsection
