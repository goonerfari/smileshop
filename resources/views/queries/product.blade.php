@extends('master')

@section('content')

<div class="container shop_container">
    @include('partials._messages')


    
    @if(isset($details))

        <div id="sidebar" class="col-md-4" style="margin-top: 30px;">
            @include('includes.shopsidebar')
        </div>
        <div id="content" class="col-md-8">
        <h2 style="margin: 40px;"> The Search results for your query <b> {{ $query }} </b> are :</h2>
        
            @foreach($details as $product)
            
                <div class="product col-md-3">
                    <a href="{{ route('products.single', $product->slug) }}"><img class="img-responsive" src="{{ $product->image }}" /></a>
                    <a href="{{ route('products.single', $product->slug) }}"><h3 class="text-center">{{ $product->name }}</h3></a>

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
                    <div class="text-center" style="padding-top: 18px; padding-bottom: 18px;">
                        <a href="" class="btn btn-dark-green">Add to Cart</a>
                    </div>
                </div>

            @endforeach
        
        </div>
        <div class="col-md-8 col-md-offset-4">
    <div class="text-center">
        {!! $details->links() !!}
    </div>
</div>
    @endif

</div>
@endsection



