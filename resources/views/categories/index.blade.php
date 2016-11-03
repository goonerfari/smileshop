@extends('master')

@section('title', '| All Categories')

@section('content')

	<div class="container">
		<div class="col-md-8">
			<h1>Categories</h1>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($categories as $category)
					<tr>
						<th>{{ $category->id }}</th>
						<td>{{ $category->name }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div> <!-- end of .col-md-8 -->

		<div class="col-md-3">
			<div class="well" style="margin-top: 30px;">
                {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
                    <h2>New Category</h2>
                    {{ Form::label('name', 'Name:') }}
                    {{ Form::text('name', null, ['class' => 'form-control', 'style' => 'margin-bottom: 20px;']) }}

                    {{ Form::submit('Create New Category', ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}
                
                {!! Form::close() !!}
            </div>
        </div>

			
		</div>
	</div>

@endsection