@extends('master')

<?php $nameTag = htmlspecialchars($product->name); ?>
@section('title', "| $nameTag")

@section('content')

	<div id="single-product" class="container">
        <h4 class="product-path"><a href="/shop">Shop</a> / {{ $product->name }}</h4>

        <h1>{{ $product->name }}</h1>

        <hr>

        <div class="row .single-product">
            <div class="col-md-6">
                <img src="{{ $product->image }}" alt="product" class="img-responsive">

                <div class="col-md-12 socials">
                    <h3>Share +</h3>
                    <a href="http://scripteden.com/download/eden-ui/" target="_blank" class="btn-social btn-facebook"><i class="fa fa-facebook"></i></a>
                    <a href="http://scripteden.com/download/eden-ui/" target="_blank" class="btn-social btn-google-plus"><i class="fa fa-google-plus"></i></a>
                    <a href="http://scripteden.com/download/eden-ui/" target="_blank" class="btn-social btn-instagram"><i class="fa fa-instagram"></i></a>
                    <a href="http://scripteden.com/download/eden-ui/" target="_blank" class="btn-social btn-pinterest"><i class="fa fa-pinterest"></i></a>
                    <a href="http://scripteden.com/download/eden-ui/" target="_blank" class="btn-social btn-reddit"><i class="fa fa-reddit"></i></a>
                    <a href="http://scripteden.com/download/eden-ui/" target="_blank" class="btn-social btn-twitter"><i class="fa fa-twitter"></i></a>
                </div>            
            </div>

            <div class="col-md-6">
                <h3>${{ $product->price }}.99</h3>
                <form action="/cart" method="POST" class="side-by-side">
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

        <div class="spacer">
            <p>Warnings & Disclaimers: * These statements have not been evaluated by the FDA. Do not use if you have a mushroom allergy. Caution: As with any dietary or herbal supplement, you should advise your health care practitioner of the use of this product. If you are nursing, pregnant, or considering pregnancy, you should consult your health care practitioner prior to using this product. This product is not intended to diagnose, treat, cure or prevent any disease; the law applicable to dietary supplements, the Dietary Supplement Health and Education Act of 1994, commonly referred to as DSHEA, does not permit us to do so and it is not our intention to do so. The Contraindications and Potential Drug Interactions information provided on this website is not intended to be all-inclusive. Keep your healthcare provider informed about any herbal and other dietary supplement products that you are taking. </p>
        </div>

        <div class="row" id="product-interested">
            <h3>You may also like...</h3>

           @foreach ($interested as $product)
                <div class="col-md-3">
                    <div class="thumbnail">
                        <div class="caption text-center">
                            <a href="{{ url('shop', [$product->slug]) }}"><img src="{{ $product->image }}" alt="product" class="img-responsive"></a>
                            <h4><a href="{{ url('shop', [$product->slug]) }}">{{ $product->name }}</a></h4>
                            <label for="">Price: </label>
                            <span>${{ $product->price }}.99</span><br>
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
