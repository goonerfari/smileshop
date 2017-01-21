@extends('master')

<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', "| $titleTag")

@section('content')
<section id="app">
    <div class="container visible-xs">
        <div class="row">
            <img src="{{ $post->image }}" class="img-responsive" style="margin-top: 90px;" />
        </div>
    </div>
	<div id="single-blade-blog" class="container">
		<div class="col-xs-12 col-md-7" id="single-post">
			<div class="col-xs-12">
				<img src="{{ $post->image }}" class="img-responsive hidden-xs" />
			    <h2>{{ $post->title }}</h2>
                <p>{{ $post->body }}</p>
                <hr>
                <div class="text-left">
                    <p>Posted In: <br>
                        <b style="text-transform: capitalize; font-family: 'Baloo Tamma', cursive;">{{ $post->category->name }}</b>
                    </p>
                    
                    <button @click="countUp" class="btn btn-green">
                        <span style="font-family: 'Baloo Tamma', cursive;">@{{ good }}</span>
                        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                    </button>
                    <button @click="countDown" class="btn btn-red">
                        <span style="font-family: 'Baloo Tamma', cursive;">@{{ bad }}</span>
                        <i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
                    </button>
                </div>
                
            </div>
		</div>

		<div id="blog_sidebar" class="col-md-3 hidden-xs hidden-sm">
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
		
		
        
	    <div class="col-xs-12 col-md-7">
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

		<div id="comment-form" class="col-xs-12 col-md-7" style="margin: 50px 0px;">

            <form id="contactUsForm" data-parsley-validate action="{{ url('comments.store', '$post->id') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input required minlength="3" maxlenth="25" type="name" class="form-control" id="name" name="name" placeholder="Enter name">
                </div>

                <div class="form-group col-md-6">
                    <label for="email">Email address</label>
                    <input required type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                </div>

                
                <div class="form-group col-md-12">
                    <label for="comment">Message</label>
                    <textarea required type="text" minlength="10" maxlength="1000" rows="10" class="form-control" id="comment" name="comment" placeholder="Enter comment"></textarea>
                </div>

                <button type="submit" class="btn btn-dark-green" style="margin-bottom: 40px;">Submit</button>
                
            </form>

            <script src="{{ asset('js/parsley.min.js') }}"></script>
            <script type="text/javascript">
              $('#contactUsForm').parsley();
            </script>
    
{{-- 
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
                 --}}
		</div>
	</div>
</section>
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
    
    <script src="https://unpkg.com/vue@2.0.3/dist/vue.js"></script>

    <script>
        var app = new Vue({
          el: '#single-blade-blog',
          data: {
            good: 0,
            bad: 0,
          },
          methods: {
            countUp: function() {
              this.good += 1
            },
            countDown: function() {
              this.bad -= 1
            }
          }
        })
    </script>


@endsection
