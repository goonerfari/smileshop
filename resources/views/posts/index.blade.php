@extends('master')

@section('title', '| All Posts')

@section('content')

	<div class="container">
		<div class="col-md-10">
			<h1>All Posts</h1>
		</div>

		<div class="col-md-2">
			{{-- <a href="{{ url('admin.posts.create') }}" class="btn btn-md btn-block btn-primary btn-h1-spacing" style="margin-top: 20px;">Create New Post</a> --}}
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div> <!-- end of .row -->

	<div class="container">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Body</th>
					<th>Created At</th>
					<th></th>
				</thead>

				<tbody>
					
					@foreach ($posts as $post)
						
						<tr>
							<th>{{ $post->id }}</th>
							<th><img src="{{ $post->image }}" style="height: 80px; width: 80px;"/></th>
							<td>{{ $post->title }}</td>
							<td>{{ substr(strip_tags($post->body), 0, 50) }}{{ strlen(strip_tags($post->body)) > 50 ? "..." : "" }}</td>
							<td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
							<td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm">View</a> <a href="{{ url('posts/edit', $post->id) }}" class="btn btn-success btn-sm">Edit</a></td>
						</tr>

					@endforeach

				</tbody>
			</table>

			<div class="text-center">
				{!! $posts->links(); !!}
			</div>
		</div>
	</div>

@stop