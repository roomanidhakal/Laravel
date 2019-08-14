@extends('layout')

@section('content')
		
	<h1>Create a new Project</h1>

	<form method="POST" action="/projects">

		{{ csrf_field() }}
		
		<div>
			<input type="text" name="title" placeholder="Project Title" value="{{ old('title') }}" required>
		</div><br/>

		<div>
			<textarea name="description" placeholder="Project Description" required>{{ old('description') }}</textarea>
		</div><br/>

		<div>
			<button type="submit">Create Project</button>
		</div><br/>

		@include('errors')

	</form>

@endsection