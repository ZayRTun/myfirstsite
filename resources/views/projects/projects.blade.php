@extends('layout')

@section('title', 'Projects')

@section('content')
    <h1 class="title">Projects</h1>

    <ul>
        @foreach ($projects as $project)
            <li><a href="/projects/{{ $project->id}}">{{ $project->title }}</a></li>
        @endforeach
    </ul>

    <p style="margin-top: 10px">
        <a class="button" href="/projects/create">Add new Project</a>
    </p>
@endsection
