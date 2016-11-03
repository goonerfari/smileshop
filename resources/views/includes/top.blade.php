<!--NAV-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<nav id="top" class="navbar navbar-default navbar-static-top hidden-xs">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul id="login-div" class="nav navbar-nav">

            @if (Auth::guest())
                <li id="account-link"><a href="{{ url('/login') }}">My Account</a></li>
                <li id="span-link"><p>|</p></li>
                <li id="register-link"><a href="{{ url('/register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a id="user-menu" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        @if(Auth::user()->is_admin == 1 )
                            <li><a href="{{ url('categories') }}"></i>Categories</a></li>
                            <li><a href="{{ url('posts') }}">Posts</a></li>
                            <li><a href="{{ url('products') }}">Products</a></li>
                            <li><a href="{{ url('tags') }}">Tags</a></li>
                        @endif 
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                    </ul>
                </li>
            @endif


        </ul>

        <ul id="cart-div" class="nav navbar-nav navbar-right">
            <li class="{{ set_active('cart') }} text-right"><a href="/cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> ({{ Cart::instance('main')->count(false) }})</a></li>

        </ul>
    </div>
  </div>
</nav>


<script>
    $(document).ready(function() {
    $('.dropdown-toggle').click(function() {
        $('.dropdown-menu').toggle();
    });
    
    $('#account-link').mouseover(function (){
        $('#login-div').css('border-color', 'rgba(0, 239, 141, 0.8)');
    });
    $('#account-link').mouseleave(function (){
        $('#login-div').css('border-color', 'white');
    });  
     

    $('#register-link').mouseover(function (){
        $('#login-div').css('border-color', 'rgba(250, 80, 0, 1)');
    });
    $('#register-link').mouseleave(function (){
        $('#login-div').css('border-color', 'white');
    });  
     
});



</script>