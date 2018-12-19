@extends('layout')

@section('title', 'Create Projects')

@section('content')
    <h1>Create Projects</h1>
    <form action="/projects" method="POST">
        {{ csrf_field() }}

        <div>
            <input type="text" name="title" placeholder="Project title">
        </div>

        <div>
            <textarea name="description" cols="30" rows="10" placeholder="Project description"></textarea>
        </div>

        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection
