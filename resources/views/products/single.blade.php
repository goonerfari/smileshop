@extends('master')

<?php $nameTag = htmlspecialchars($product->name); ?>
@section('title', "| $nameTag")

@section('content')

	<div id="single-product" class="container">
        <div id="path-div" class="col-md-12">
            <h4 class="product-path"><a href="/shop">Shop</a> / {{ $product->name }}</h4>
        </div>
        
        <hr>

        <div class="container single-product">

            <div class="col-md-6 col-xs-12" style="margin-top: 40px;">
                <img class="img-responsive" src="{{ $product->image }}" > 
                <div class="col-md-12 socials">
                    <h3>Share +</h3>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-google"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-reddit"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </div>            
            </div>

            <div class="col-md-6 col-xs-12">
                <h1 class="text-center">{{ $product->name }}</h1>
                <h3 class="price"><span style="font-size: 27px; margin-right: 5px;">$</span>{{ $product->price }} <span class="cents">99</span></h3>
                <form action="/cart" method="POST" class="side-by-side" style="display: inline;">
                    {!! csrf_field() !!}
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="hidden" name="name" value="{{ $product->name }}">
                    <input type="hidden" name="price" value="{{ $product->price }}">
                    <input type="submit" class="btn btn-success btn-md" value="Add to Cart">
                </form>

                {{-- <form action="/wishlist" method="POST" class="side-by-side">
                    {!! csrf_field() !!}
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="hidden" name="name" value="{{ $product->name }}">
                    <input type="hidden" name="price" value="{{ $product->price }}">
                    <input type="submit" class="btn btn-primary btn-lg" value="Add to Wishlist">
                </form> --}}


                <br><br>
                
                <ul class="product-attr">
                    
                    <li>
                        <i class="fa fa-envira" aria-hidden="true"></i>
                        <label for="">Description </label><br>
                        <span>{{ $product->description }}</span>
                    </li>
                    
                    <li>
                        <i class="fa fa-envira" aria-hidden="true"></i>
                        <label for="">Benefit </label><br>
                        <span>{{ $product->benefit }}</span>
                    </li>
                    
                    <li>
                        <i class="fa fa-envira" aria-hidden="true"></i>
                        <label for="">Manufacturer </label><br>
                        <span>{{ $product->manufacturer }}</span>
                    </li>
                    
                    <li>
                        <i class="fa fa-envira" aria-hidden="true"></i>
                        <label for="">Sku </label><br>
                         <span> #{{ $product->sku }}</span>
                    </li>
                </ul>
                
            </div> <!-- end col-md-8 -->
        </div> <!-- end row -->

        <div class="spacer col-md-12">
            <p><b>Warnings & Disclaimers: * </b> These statements have not been evaluated by the FDA. Do not use if you have a mushroom allergy. Caution: As with any dietary or herbal supplement, you should advise your health care practitioner of the use of this product. If you are nursing, pregnant, or considering pregnancy, you should consult your health care practitioner prior to using this product. This product is not intended to diagnose, treat, cure or prevent any disease; the law applicable to dietary supplements, the Dietary Supplement Health and Education Act of 1994, commonly referred to as DSHEA, does not permit us to do so and it is not our intention to do so. The Contraindications and Potential Drug Interactions information provided on this website is not intended to be all-inclusive. Keep your healthcare provider informed about any herbal and other dietary supplement products that you are taking. </p>
        </div>

        <div class="col-md-12" id="product-interested">
            <h3>You may also like...</h3>

           @foreach ($interested as $product)
                <div class="col-md-3">
                    <div class="thumbnail">
                        <div class="caption text-center">
                            <a href="{{ url('shop', [$product->slug]) }}"><img src="{{ $product->image }}" alt="product" class="img-responsive"></a>
                            <h4><a href="{{ url('shop', [$product->slug]) }}">{{ $product->name }}</a></h4>
                            <label for="">Price: </label>
                            <span class="price">${{ $product->price }} <span class="cents">99</span></span><br>
                            <p style="height: 65px;">
                                <label for="">Benefit: </label>
                                <span>{{ $product->benefit }}</span>
                            </p>
                        </div> <!-- end caption -->

                    </div> <!-- end thumbnail -->
                </div> <!-- end col-md-3 -->
            @endforeach

        </div> <!-- end row -->

        <div class="spacer"></div>


    </div>



@endsection
