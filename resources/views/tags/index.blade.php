@extends('master')

@section('title', '| All Tags')

@section('content')

	<div class="container" style="margin-top: 20px;">
		<div id="tags" class="col-md-8">
			<h1>Tags</h1>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($tags as $tag)
					<tr>
						<th>{{ $tag->id }}</th>
						<td>
							<a href="{{ route('tags.show', $tag->id) }}">{{ $tag->name }}</a>
							<a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-success pull-right btn-md" style="color: white;">Edit</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div> <!-- end of .col-md-8 -->

		<div class="col-md-3">
			<div class="well" style="margin-top: 30px;">
				{!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}
					<h2>New Tag</h2>
					{{ Form::label('name', 'Name:') }}
					{{ Form::text('name', null, ['class' => 'form-control', 'style' => 'margin-bottom: 20px;']) }}

					{{ Form::submit('Create New Tag', ['class' => 'btn btn-primary btn-block btn-h1-spacing', 'style' => 'margin-bottom: 10px;']) }}
				
				{!! Form::close() !!}
				
				
			</div>
		</div>
	</div>

@endsection