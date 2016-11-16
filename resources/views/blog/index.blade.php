@extends('master')

@section('title', '| Blog')

@section('content')

<div id="blog_container" class="container blog">
	
    <div class="container visible-xs visible-sm">
        <div class="col-xs-12">
            <div id="search-blog-form-mobile" style="margin-top: 60px; margin-bottom: 20px;" class="nav navbar-nav navbar-right">
                <form action="{{ url('search-blog') }}" method="POST" role="search">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="text" class="form-control" name="q"
                            placeholder="Search blog"> <span class="input-group-btn">
                            <button type="submit" class="btn btn-green">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
		<h1 class="text-center">Mr Smiles' Health Blog</h1>
	</div>

    
	<div class="col-xs-12">
		<div class="col-xs-12 col-md-7" id="blog_posts">
			@foreach ($posts as $post)

				<h2>{{ $post->title }}</h2>
				<a href="{{ route('blog.single', $post->slug) }}"><img src="{{ $post->image }}" class="img-responsive" /></a>
				<h5>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h5>

				<p>{{ substr(strip_tags($post->body), 0, 250) }}{{ strlen(strip_tags($post->body)) > 250 ? '...' : "" }}</p>

				<a href="{{ route('blog.single', $post->slug) }}" class="btn btn-orange btn-md">Read More</a>
				<hr>
			@endforeach
		</div>
		<div id="blog_sidebar" class="col-md-3 hidden-sm hidden-xs">
	        <div class="affix col-md-3 col-md-offset-1">
	            <!-- Blog Search Well -->
	                <h4 class="text-left">Blog Search</h4>
	                <ul id="search-blog-form" style="margin-bottom: 10px;" class="nav navbar-nav navbar-right">
                        <form action="{{ url('search-blog') }}" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type="text" class="form-control" name="q"
                                    placeholder="Search blog"> <span class="input-group-btn">
                                    <button type="submit" class="btn btn-green">
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
	</div>
    <div class="col-md-7 col-xs-12">
        <div class="text-center">
            {!! $posts->links() !!}
        </div>
    </div>

	
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
        $(window).scroll(function() {
            if($(this).scrollTop() > 221) {
                $(".affix").css('margin-top', '-220px');
            }
            else {
                $(".affix").css('margin-top', '40px');
            }   
        });
    </script>

	

</div>
@endsection