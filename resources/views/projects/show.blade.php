@extends('layout')

@section('title', $project->title)

@section('content')
    <h1 class="title">{{ $project->title }}</h1>
    <p>{{ $project->description }}</p>
@endsection
