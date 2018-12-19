@extends('layout')

@section('title', $project->title)

@section('content')
	<div class="card">
		<div class="card-header">
			{{ $project->title }}
	  	</div>
	  	<div class="card-body">
			<p class="card-text">{{ $project->description }}</p>
			<a href="/projects/{{ $project->id }}/edit" class="btn btn-primary">Edit</a>
	  	</div>
	</div>
@endsection
