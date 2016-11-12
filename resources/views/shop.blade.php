@extends('master')

@section('content')

    <div class="shop_container container" style="margin-top: 60px;">

        <div id="sidebar" class="col-md-4 affix hidden-sm">
            @include('includes.shopsidebar')
        </div>

        <div id="content" class="col-md-8 col-md-offset-4">
            <h2 class="text-center">All Products</h2>
            
                @foreach ($products as $product)
                    <div class="product col-md-3">
                        <a href="{{ route('products.single', $product->slug) }}"><img class="img-responsive" src="{{ $product->image }}" /></a>
                        
                        <a href="{{ route('products.single', $product->slug) }}"><h3>{{ $product->name }}</h3></a>

                                       

                        <p class="product_label">Description:</p>
                        <p class="text-left product_description" style="height: 55px;">{{ $product->description }}</p>

                        <p class="product_label">Benefit:</p>
                        <p class="text-left product_benefit" style="height: 55px;">
                            {{ $product->benefit }}
                        </p> 

                        <span class="price_label">Price:</span>
                        <span class="product_price text-right">
                            ${{ $product->price }}.99
                        </span>

                        <br>

                        <form action="/cart" method="POST" class="side-by-side">
                            {!! csrf_field() !!}
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="name" value="{{ $product->name }}">
                            <input type="hidden" name="price" value="{{ $product->price }}">
                            <span class="visible-xs">
                                <br>
                            </span>
                            <div class="col-md-12 text-center">
                                <input type="submit" class="btn btn-success btn-md text-center" style="margin: 15px;" value="Add to Cart">
                            </div>
                        </form>
                    </div>
                @endforeach
            </div>
            
        </div>
        <div class="container">
            <div class="col-md-8 col-md-offset-4">
                <div class="text-center">
                    {!! $products->links() !!}
                </div>
            </div>
        </div>

            

    </div> <!-- end container -->
    

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $(window).scroll(function() {    
                var scroll = $(document).scrollTop();

                
                 if (scroll > 140 && scroll < 1050) {
                    $('#sidebar').css("margin-top", "-85px");
                    $('#sidebar').addClass("affix");
                    $('#content').addClass("col-md-offset-4");
                }
                else if (scroll < 700) {
                    $('#sidebar').css("margin-top", "0px");
                    $('#sidebar').removeClass("affix");
                    $('#content').removeClass("col-md-offset-4");
                }
                else {
                    $('#sidebar').removeClass("affix");
                    $('#sidebar').css("margin-top", "0px");
                    $('#content').removeClass("col-md-offset-4");
                }
                
            });
        });
        
    </script>
@endsection