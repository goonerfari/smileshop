<nav id="nav" class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand visible-xs" href="{{ url('/') }}">Smiles' Herb Shop</a>
            <div id="cart-div" class="visible-xs">
                <a href="/cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> ({{ Cart::instance('main')->count(false) }})</a>
            </div>
        </div>
        
        <div id="navbar" class="collapse navbar-collapse">

            <a class="hidden-xs" href="{{ url('/') }}"><img src="{{ asset('about/logo.jpg') }}"></a>
            <ul id="login-div-mobile" class="nav navbar-nav navbar-right visible-xs">
                @if (Auth::guest())
                    <li id="account-link-mobile"><a href="{{ url('/login') }}">My Account</a></li>
                    <li id="register-link-mobile"><a href="{{ url('/register') }}">Register</a></li>
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

            <ul id="nav-nav" class="nav navbar-nav navbar-right">
                <li id="home-link" class="{{ Request::is('/') ? "active" : "" }}"><a href="{{ url('/') }}">Home</a></li>
                <li class="{{ Request::is('shop') ? "active" : "" }}"><a href="{{ url('/shop') }}">Shop</a></li>
                <li class="{{ Request::is('blog') ? "active" : "" }}"><a href="/blog">Blog</a></li>
                <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">About + Contact</a></li>
                <li class="ul-dropdown">
                    <ul id="category-nav" class="visible-xs nav nav-navbar navbar-right"><span>Shop by Category<i class="fa fa-caret-down" aria-hidden="true" style="padding-left: 10px;"></i></span>
                        <div class="list" style="overflow-y: scroll; height: 200px;">
                            <li style="margin-top: 6px;">
                                
                                <a href="{{ url('blogcats/allergies') }}">Allergies
                                    <i class="fa fa-envira" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                
                                <a href="{{ url('blogcats/cardio') }}">Cardiovascular Health
                                    <i class="fa fa-envira" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                
                                <a href="{{ url('blogcats/childhealth') }}">Children's Health
                                    <i class="fa fa-envira" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                
                                <a href="{{ url('blogcats/digestive') }}">Digestive Wellness
                                    <i class="fa fa-envira" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                
                                <a href="{{ url('blogcats/general') }}">General Wellness
                                    <i class="fa fa-envira" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                
                                <a href="{{ url('blogcats/immune') }}">Immunity
                                    <i class="fa fa-envira" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                
                                <a href="{{ url('blogcats/mens') }}">Men's Health
                                    <i class="fa fa-envira" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                
                                <a href="{{ url('blogcats/musculoskeletal') }}">Musculoskeletal Health
                                    <i class="fa fa-envira" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                
                                <a href="{{ url('blogcats/nervous') }}">Nervous System Health
                                    <i class="fa fa-envira" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                
                                <a href="{{ url('blogcats/reproductive') }}">Reproductive Health
                                    <i class="fa fa-envira" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                
                                <a href="{{ url('blogcats/respiratory') }}">Respiratory Health
                                    <i class="fa fa-envira" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                
                                <a href="{{ url('blogcats/urinary') }}">Urinary Health
                                    <i class="fa fa-envira" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                
                                <a href="{{ url('blogcats/womens') }}">Women's Health
                                    <i class="fa fa-envira" aria-hidden="true"></i>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
                <li class="ul-dropdown">
                    <ul id="brand-nav" class="visible-xs nav nav-navbar navbar-right"><span>Shop by Brand<i class="fa fa-caret-down" aria-hidden="true" style="padding-left: 10px;"></i></span>
                        <div class="list" style="overflow-y: scroll;height: 200px;">
                            <li style="margin-top: 15px;">
                            
                                <a href="{{ url('blogcats/allergies') }}">Allergies
                                    <i class="fa fa-envira" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                
                                <a href="{{ url('blogcats/cardio') }}">Cardiovascular Health
                                    <i class="fa fa-envira" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                
                                <a href="{{ url('blogcats/childhealth') }}">Children's Health
                                    <i class="fa fa-envira" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                
                                <a href="{{ url('blogcats/digestive') }}">Digestive Wellness
                                    <i class="fa fa-envira" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                
                                <a href="{{ url('blogcats/general') }}">General Wellness
                                    <i class="fa fa-envira" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                
                                <a href="{{ url('blogcats/immune') }}">Immunity
                                    <i class="fa fa-envira" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                
                                <a href="{{ url('blogcats/mens') }}">Men's Health
                                    <i class="fa fa-envira" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                
                                <a href="{{ url('blogcats/musculoskeletal') }}">Musculoskeletal Health
                                    <i class="fa fa-envira" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                
                                <a href="{{ url('blogcats/nervous') }}">Nervous System Health
                                    <i class="fa fa-envira" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                
                                <a href="{{ url('blogcats/reproductive') }}">Reproductive Health
                                    <i class="fa fa-envira" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                
                                <a href="{{ url('blogcats/respiratory') }}">Respiratory Health
                                    <i class="fa fa-envira" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                
                                <a href="{{ url('blogcats/urinary') }}">Urinary Health
                                    <i class="fa fa-envira" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                
                                <a href="{{ url('blogcats/womens') }}">Women's Health
                                    <i class="fa fa-envira" aria-hidden="true"></i>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>    
            </ul>
            
            
        </div><!--/.nav-collapse -->


    </div>
</nav>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script>
    /*---blog page bug fix---*/
    $(document).ready(function() {
        $('#nav button').click(function () {
            $('#navbar').toggle();
        });

        $('.list').hide();
        $('#category-nav').click(function () {
            $('#brand-nav .list').hide('fast');
            $(".list", this).toggle('fast');
        });

        $('#brand-nav').click(function () {
            $('#category-nav .list').hide('fast');
            $(".list", this).toggle('fast');
        });
    });

</script>        

<script>
    $(document).ready(function() {
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