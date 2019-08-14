<div class="notification is-danger" style="background:red;color:white">
	<ul>
		@foreach ( $errors->all() as $error )
			<li>
				{{ $error }}
			</li>
		@endforeach
	</ul>	
</div>