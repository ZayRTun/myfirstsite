@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-header">
				{{ $project->title }}
			</div>
			<div class="card-body">
				<p class="card-text">{{ $project->description }}</p>
				<a href="/projects/{{ $project->id }}/edit" class="btn btn-primary">Edit</a>

				@if ($project->tasks->count())
					<div class="mt-3">
						<h4>Tasks</h4>
						@foreach($project->tasks as $task)
							<form method="POST" action="/tasks/{{ $task->id }}">
								@method('PATCH')
								@csrf

								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck{{ $task->id }}" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
									<label class="form-check-label {{ $task->completed ? 'is-complete' : '' }}" for="defaultCheck{{ $task->id }}">
									{{ $task->description }}
									</label>
								</div>
							</form>
						@endforeach
					</div>
				@endif
			</div>
		</div>

		<!-- Add new tasks -->
		<div class="card mt-3">
			<div class="card-body">
				<h5 class="card-title">Add new Tasks</h5>
				<form class="mb-3" action="/project/{{ $project->id }}/tasks" method="POST">
					@csrf

					<div class="form-group">
						<input type="text" class="form-control" name="description" placeholder="Task Description">
					</div>
					<button class="btn btn-primary">Add Task</button>
				</form>

			</div>
		</div>
	</div>

	@include('errors')
@endsection
