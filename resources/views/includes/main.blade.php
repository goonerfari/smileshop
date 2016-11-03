
<div id="sidebar" class="col-md-4">
    @include('includes.sidebar')
</div>

<div id="content" class="col-md-8">
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
                    <input type="submit" class="btn btn-success btn-md" style="margin-top: 20px;" value="Add to Cart">
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

    
