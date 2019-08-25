<!DOCTYPE html>
<html>

	<head>
		<title>Create a Projects</title>
	</head>

	<body>
		<form method="POST" action="\projects">
			@csrf
			<div>
				<input type="text" name="title" placeholder="Project Title">
				<br/>
				<br/>
			</div>
			<div>
				<textarea name="description" placeholder="Describe your project"></textarea>
				<br/>
				<br/>
			</div>
			<div>
				<button type="submit"> Create Project </button>
			</div>
		</form>
	</body>

</html>