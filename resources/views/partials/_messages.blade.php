@if (Session::has('success'))
	
	<div class="alert alert-success" role="alert" style="margin-bottom: 0px; margin-top: 50px;">
		<strong>Success:</strong> {{ Session::get('success') }}
	</div>

@endif

@if (count($errors) > 0)

	<div class="alert alert-danger" role="alert" style="margin-bottom: 0px; margin-top: 50px;">
		<strong>Errors:</strong>
		<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach  
		</ul>
	</div>

@endif