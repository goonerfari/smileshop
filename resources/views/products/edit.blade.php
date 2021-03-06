@extends('master')

@section('title', '| Edit Product')

@section('stylesheets')

	{!! Html::style('css/select2.min.css') !!}

	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

	<script>
		tinymce.init({
			selector: 'textarea',
			plugins: 'link code',
			menubar: false
		});
	</script>

@endsection

@section('content')

	<div class="container" style="margin: 20px 0px;">
		{!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT']) !!}
		<div class="col-md-8">
			{{ Form::label('name', 'Name:') }}
			{{ Form::text('name', null, ["class" => 'form-control']) }}

			{{ Form::label('slug', 'Slug:', ['class' => 'form-spacing-top']) }}
			{{ Form::text('slug', null, ['class' => 'form-control']) }}

			
			{{ Form::label('benefit', "Benefit:", ['class' => 'form-spacing-top']) }}
			{{ Form::text('benefit', null, ['class' => 'form-control']) }}

			{{ Form::label('price', "Price:", ['class' => 'form-spacing-top']) }}
			{{ Form::text('price', null, ['class' => 'form-control']) }}

			{{ Form::label('sku', "SKU#:", ['class' => 'form-spacing-top']) }}
			{{ Form::text('sku', null, ['class' => 'form-control']) }}

			{{ Form::label('manufacturer', "Manufacturer:", ['class' => 'form-spacing-top']) }}
			{{ Form::text('manufacturer', null, ['class' => 'form-control']) }}
		</div>

		<div class="col-md-4" style="padding-top: 20px;">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($product->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($product->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('products.show', 'Cancel', array($product->id), array('class' => 'btn btn-danger btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
					</div>
				</div>

			</div>
		</div>
		{!! Form::close() !!}
	</div>	<!-- end of .row (form) -->

@stop

@section('scripts')

	{!! Html::script('js/select2.min.js') !!}

	<script type="text/javascript">

		$('.select2-multi').select2();
		$('.select2-multi').select2().val({!! json_encode($product->categories()->getRelatedIds()) !!}).trigger('change');

	</script>

@endsection