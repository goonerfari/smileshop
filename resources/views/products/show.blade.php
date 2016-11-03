@extends('master')

@section('title', '| View Product')

@section('content')

	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1>{{ $product->name }}</h1>

			<div class="col-md-8 col-md-offset-2">
				<img class="img-responsive" src="{{asset('/images/' . $product->image)}}" > 
			
				<p class="lead">{!! $product->description !!}</p>
				<div class="categories">
					@foreach ($product->categories as $category)
						<span class="label label-default">{{ $category->name }}</span>
					@endforeach
				</div>
			</div>

			<hr>
			
			

			
		</div>

		{{-- <div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<label>Url:</label>
					<p><a href="{{ route('blog.single', $post->slug) }}">{{ route('blog.single', $post->slug) }}</a></p>
				</dl>

				<dl class="dl-horizontal">
					<label>Category:</label>
					<p>{{ $post->category->name }}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Created At:</label>
					<p>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					<p>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</p>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}

						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

						{!! Form::close() !!}
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						{{ Html::linkRoute('posts.index', '<< See All Posts', array(), ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
					</div>
				</div>

			</div>
		</div> --}}
	</div>

@endsection