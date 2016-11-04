@extends('master')


@section('title', '| {{ $post->category-id->name }}')

@section('content')

<div class="container">
    <div class="col-md-12">
        <h1 class="text-center">Mr Smiles' Health Blog</h1>
    </div>

    <div class="container">
        <div class="col-md-6 col-md-offset-1" id="blog_posts">
            @foreach ($posts as $post)

                <h2>{{ $post->title }}</h2>
                <img src="{{ $post->image }}" class="img-responsive" />
                <h5>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h5>

                <p>{{ substr(strip_tags($post->body), 0, 250) }}{{ strlen(strip_tags($post->body)) > 250 ? '...' : "" }}</p>

                <a href="{{ route('blog.single', $post->slug) }}" class="btn btn-orange btn-md">Read More</a>
                <hr>
            @endforeach
        </div>
        <div id="blog_sidebar" class="col-md-3">
            <div class="affix col-md-3 col-md-offset-1">
                <!-- Blog Search Well -->
                    <h4 class="text-left">Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->

                <!-- Blog Categories Well -->
                    <h4 class="text-left">Blog Categories</h4>
                    <div class="sidebar_category" class="col-lg-12">
                        @include('includes.blogsidebar')
                    </div>
            </div>
        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
        $(window).scroll(function() {
            if($(this).scrollTop() > 201) {
                $(".affix").css('margin-top', '-230px');
            }
            else {
                $(".affix").css('margin-top', '40px');
            }   
        });
    </script>

    <div class="col-md-7">
        <div class="text-center">
            {!! $posts->links() !!}
        </div>
    </div>

</div>
@endsection