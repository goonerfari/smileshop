@extends('master')

@section('content')
<div id="checkout" class="container" style="margin-top: 40px;">
    <div class="col-md-6 col-xs-12">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
        
        {{-- <form id="orderForm" data-parsley-validate action="{{ url('contact') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="firstname">First Name</label>
                <input required minlength="3" maxlenth="25" type="name" class="form-control" id="firstname" firstname="firstname" placeholder="Enter First Name">
            </div>

            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input required minlength="3" maxlenth="25" type="name" class="form-control" id="lastname" lastname="lastname" placeholder="Enter Last Name">
            </div>

            <div class="form-group">
                <label for="company">Company</label>
                <input minlength="3" maxlenth="25" type="name" class="form-control" id="company" company="company" placeholder="Company">
            </div>

            <div class="form-group">
                <label for="street_address">Street address</label>
                <input required type="text" class="form-control" id="street_address" name="street_address" placeholder="Enter street address">
            </div>

            <div class="form-group">
                <label for="city">City</label>
                <input required type="text" class="form-control" id="city" name="city" placeholder="Enter city">
            </div>

            <div class="form-group" style="width: 200px;">
                <label for="zip">Zip Code</label>
                <input minlength="5" maxlenth="5" required type="text" class="form-control" id="zip" name="zip" placeholder="Enter zip code">
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input minlength="10" maxlenth="15" required type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone number">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input required type="email" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>

            <button type="submit" class="btn btn-dark-green" style="margin-bottom: 40px;">Submit</button>
            
        </form> --}}

        <script src="{{ asset('js/parsley.min.js') }}"></script>
        <script type="text/javascript">
          $('#orderForm').parsley();
        </script>
        <script>
        Vue.http.options.emulateJSON = true; // send as 
            new Vue({
                el: '#vueApp',
                data: {
                    debug: true,
                    domain: '',
                    ajaxRequest: false,
                    postResults: []
                },
                methods: {
                  checkWebsite: function() {
                    this.ajaxRequest = true;
                    this.$http.post('api/products', {
                          domain: this.domain
                        }, function (data, status, request) {
                            this.postResults = data;

                            this.ajaxRequest = false;
                        });
                  }}
            });
        </script>
    </div>
</div>
@endsection