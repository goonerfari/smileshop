<div class="shop_container container" >
    
    <div id="sidebar" class="col-md-4 affix">
        @include('includes.shopsidebar')
    </div>

    <div id="content" class="col-md-8 col-md-offset-4">
        <h2 class="text-center">All Products</h2>
        
            @foreach ($products as $product)
                <div class="product col-md-3">
                    <a href="{{ url('shop', [$product->slug]) }}"><img class="img-responsive" src="{{ $product->image }}" /></a>
                    <a href="{{ url('shop', [$product->slug]) }}"><h3>{{ $product->name }}</h3></a>

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

                    <form action="/cart" method="POST" class="side-by-side">
                        {!! csrf_field() !!}
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                        <span class="visible-xs">
                            <br>
                        </span>
                        <input type="submit" class="btn btn-success btn-md text-center" style="margin: 40px 0px 20px 80px;" value="Add to Cart">
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

    
</div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $(window).scroll(function() {    
            var scroll = $(document).scrollTop();

            
             if (scroll > 1350 && scroll < 1950) {
                $('#sidebar').css("margin-top", "-85px");
                $('#sidebar').addClass("affix");
                $('#content').addClass("col-md-offset-4");
            }
            
            else {
                $('#sidebar').removeClass("affix");
                $('#sidebar').css("margin-top", "0px");
                $('#content').removeClass("col-md-offset-4");
            }
            
        });
        });
        
    </script>

    
