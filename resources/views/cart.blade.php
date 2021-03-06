@extends('master')

@section('content')

    <div class="container" id="cart_container">
        <h4 class="product-path"><a href="{{ url('shop') }}">Home</a> / Cart </h4>

        <hr>

        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if (session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
        @endif

        @if (sizeof(Cart::content()) > 0)
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="table-image"></th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach (Cart::content() as $item)
                    <tr>
                        <td class="table-image">
                            <a href="{{ url('shop', [$item->product->slug]) }}"><img src="{{ $item->product->image }}" alt="product" class="cart-image"></a>
                        </td>
                        <td class="product-name">
                            <a href="{{ url('shop', [$item->product->slug]) }}">{{ $item->name }}</a></td>
                        <td>
                            <select class="quantity" data-id="{{ $item->rowid }}">
                                <option {{ $item->qty == 1 ? 'selected' : '' }}>1</option>
                                <option {{ $item->qty == 2 ? 'selected' : '' }}>2</option>
                                <option {{ $item->qty == 3 ? 'selected' : '' }}>3</option>
                                <option {{ $item->qty == 4 ? 'selected' : '' }}>4</option>
                                <option {{ $item->qty == 5 ? 'selected' : '' }}>5</option>
                            </select>
                        </td>
                        <td>${{ $item->subtotal }}</td>
                        <td>
                            <form action="{{ url('cart', [$item->rowid]) }}" method="POST" class="side-by-side">
                                {!! csrf_field() !!}
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger btn-delete" style="border-radius: 50%;"><i class="fa fa-times" style="font-size: 15px;" aria-hidden="true"></i></button>
                            </form>

                        </td>
                    </tr>
                    @endforeach

                    <tr class="border-bottom">
                        <td class="table-image"></td>
                        <td style="padding: 40px;"></td>
                        <td class="small-caps table-bg" style="text-align: right">Your Total</td>
                        <td class="table-bg">${{ Cart::total() }}</td>
                        <td></td>
                    </tr>

                </tbody>
            </table>
        </div>
            <a id="continue" style="float:left; margin-right: 10px;" href="/shop" class="btn btn-primary btn-md">Continue <i class="fa fa-shopping-cart" aria-hidden="true"></i></a> &nbsp;
            <div style="float:left">
                <form action="/emptyCart" method="POST">
                    {!! csrf_field() !!}
                    <input type="hidden" name="_method" value="DELETE">
                    <input style="margin-right: 10px;" type="submit" class="btn btn-danger btn-md" value="Empty Cart">
                </form>
            </div>
            <a href="/checkout" class="btn btn-success btn-md" style="float: right; margin-right: 10px;" >Checkout</a>

            

        @else

            <h3>You have no items in your shopping cart</h3>
            <a href="/shop" class="btn btn-primary btn-md">Continue <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>

        @endif

        <div class="spacer"></div>

    </div> <!-- end container -->

@endsection

@section('extra-js')
    <script>
        (function(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.quantity').on('change', function() {
                var id = $(this).attr('data-id')
                $.ajax({
                  type: "PATCH",
                  url: '/cart/' + id,
                  data: {
                    'quantity': this.value,
                  },
                  success: function(data) {
                    window.location.href = '/cart';
                  }
                });

            });

        })();

    </script>
@endsection