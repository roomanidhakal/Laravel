@extends('layout')

@section('content')

	<h1>{{ $project->title }}</h1>

	<div class="content">
		{{ $project->description }}

		<p>
			<a href="/projects/{{ $project->id }}/edit">
				Edit
			</a>
		</p>
	</div>

	@if ( $project->tasks->count() )
		<div>
			
			@foreach ($project->tasks as $task)

				<div>
					<form method="POST" action="/completed-tasks/{{ $task->id }}">

						@if ( $task->completed )
							@method('DELETE')
						@endif

						@csrf
						<label class="checkbox {{ $task->completed ? 'is-complete' : '' }}" for="completed">
							<input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
							{{ $task->description }}
						</label>
					</form>
				</div>

			@endforeach

		</div>
	@endif

	<br/>
	<!-- Add new Task Form -->
	<form method="POST" action="/projects/{{ $project->id }}/tasks">
		
		@csrf

		<fieldset>

			<legend>Add New Task</legend>

			<br/>
			<input type="text" name="description" placeholder="Task Description" required>
			<br/><br/>
			<button type="submit">Add Task</button>

			@include('errors')

		</fieldset>

	</form>

@endsection