@extends('master')

<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', "| $titleTag")

@section('content')

	<div id="single-blade-blog" class="container">
		<div class="col-md-7" id="single-post">
			<div class="col-md-12">
				<img src="{{ $post->image }}" class="img-responsive" />
			</div>
			<h2>{{ $post->title }}</h2>
			<p>{{ $post->body }}</p>
			<hr>
			<p>Posted In: {{ $post->category->name }}</p>
		</div>

		<div id="blog_sidebar" class="col-md-3 hidden-xs">
	        <div class="affix col-md-3 col-md-offset-1">
	            <!-- Blog Search Well -->
	                <h4 class="text-left">Blog Search</h4>
	                <ul id="search-blog-form"  style="margin-bottom: 10px;" class="nav navbar-nav navbar-right">
                        <form action="{{ url('search-blog') }}" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type="text" class="form-control" name="q"
                                    placeholder="Search blog"> <span class="input-group-btn">
                                    <button type="submit" class="btn btn-green" style="height: 36px">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </ul>
	                <!-- /.input-group -->

	            <!-- Blog Categories Well -->
	                <h4 class="text-left">Blog Categories</h4>
                    @include('includes.blogsidebar')
	        </div>
	    </div>
		
		
        
	    <div class="col-md-7">
			<h3 class="comments-title"><span class="glyphicon glyphicon-comment"></span>  {{ $post->comments()->count() }} Comments</h3>
			@foreach($post->comments as $comment)
				<div class="comment">
					<div class="author-info">

						<img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=monsterid" }}" class="author-image">
						<div class="author-name">
							<h4>{{ $comment->name }}</h4>
							<p class="author-time">{{ date('F nS, Y - g:iA' ,strtotime($comment->created_at)) }}</p>
						</div>

					</div>

					<div class="comment-content">
						{{ $comment->comment }}
					</div>

				</div>
			@endforeach
		</div>

		<div id="comment-form" class="col-md-7" style="margin-top: 50px;">
			{{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}

				<div class="row">
					<div class="col-md-6">
						{{ Form::label('name', "Name:") }}
						{{ Form::text('name', null, ['class' => 'form-control']) }}
					</div>

					<div class="col-md-6">
						{{ Form::label('email', 'Email:') }}
						{{ Form::text('email', null, ['class' => 'form-control']) }}
					</div>

					<div class="col-md-12">
						{{ Form::label('comment', "Comment:") }}
						{{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) }}

						{{ Form::submit('Add Comment', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;']) }}
					</div>
				</div>

			{{ Form::close() }}
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script>
            $(window).scroll(function() {
                if($(this).scrollTop() > 141) {
                    $(".affix").css('margin-top', '-125px');
                }
                else {
                    $(".affix").css('margin-top', '40px');
                }   
            });
        </script>



@endsection
