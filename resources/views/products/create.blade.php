@extends('master')

@section('title', '| Create New Product')

@section('stylesheets')

	{!! Html::style('css/parsley.css') !!}
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	<link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
	<script>
		tinymce.init({
			selector: 'textarea',
			plugins: 'link code',
			menubar: false
		});
	</script>

@endsection

@section('content')
	<div class="container">
		<div id="tags" class="col-md-8 col-md-offset-2">
			<h1>Create New Product</h1>
			<hr>
			{!! Form::open(array('route' => 'products.store', 'data-parsley-validate' => '', 'files' => true)) !!}
				{{ Form::label('name', 'Name:') }}
				{{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
				
				{{ Form::label('description', 'Description:') }}
				{{ Form::text('description', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255') ) }}

				{{ Form::label('benefit', 'Benefits:') }}
				{{ Form::text('benefit', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
				
				{{ Form::label('slug', 'Slug:') }}
				{{ Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255') ) }}

				{{ Form::label('price', 'Price:') }}
				{{ Form::text('price', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '6')) }}

				{{ Form::label('manufacturer', 'Manufacturer:') }}
				{{ Form::text('manufacturer', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '30')) }}
				
				{{ Form::label('sku', 'Sku:') }}
				{{ Form::text('sku', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255') ) }}

				{{ Form::label('categories', 'Categories:') }}
				<select class="form-control select2-multi" name="categories[]" multiple="multiple">
					@foreach($categories as $category)
						<option value='{{ $category->id }}'>{{ $category->name }}</option>
					@endforeach

				</select>

				{{ Form::label('featured_img', 'Upload a Featured Image') }}
				{{ Form::file('featured_img') }}

				

				{{ Form::submit('Create Product', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
			{!! Form::close() !!}
		</div>
	</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	        
		{!! Html::script('js/parsley.min.js') !!}
		{!! Html::script('js/select2.min.js') !!}

		<script type="text/javascript">
			$('.select2-multi').select2();
		</script>
@endsection


	

