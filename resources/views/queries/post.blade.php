@extends('master')

@section('content')

    <div class="container blog">

        @include('partials._messages')


        
        @if(isset($details))

            <div class="col-md-12">
            <h1 class="text-center">Mr Smiles' Health Blog</h1>
        </div>

        <div class="col-xs-12">
            <div class="col-md-7 col-xs-12" id="blog_posts">
                @foreach ($details as $post)

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
            <div class="col-xs-12 col-md-8 col-md-offset-4">
        <div class="text-center">
            {!! $details->links() !!}
        </div>
    </div>
        @endif

    </div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

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

