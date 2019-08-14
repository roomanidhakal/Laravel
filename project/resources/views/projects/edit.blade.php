@extends('layout')

@section('content')

	<h1>Edit Project</h1>

	<form method="POST" action="/projects/{{ $project->id }}">

		@csrf
		@method('PATCH')
		
		<div>
			<input type="text" name="title" placeholder="Project Title" value="{{ $project->title }}">
		</div><br/>

		<div>
			<textarea name="description" placeholder="Project Description">{{ $project->description }}</textarea>
		</div><br/>

		<div>
			<button type="submit">Update Project</button>
		</div><br/>

	</form>

	<form method="POST" action="/projects/{{ $project->id }}">

		@csrf
		@method('DELETE')

		<div>
			<button type="submit">Delete Project</button>
		</div><br/>

	</form>
	
	@include('errors')

@endsection