<!--FOOTER-->
<div id="footer" class="container-fluid">
    <div class="container">
        <div class="footer col-md-3 col-sm-6">
            <ul>
                <h2>About<i class="hidden-md hidden-sm hidden-lg fa fa-arrow-right" aria-hidden="true"></i></h2>
                <li>
                    <a href="{{ url('/contact') }}"><i class="fa fa-envira" aria-hidden="true"></i>About</a>
                </li>
                <li>
                    <a href="{{ url('/beginnings') }}"><i class="fa fa-envira" aria-hidden="true"></i>Our Beginnings</a>
                </li>
                <li>
                    <a href="{{ url('/mission') }}"><i class="fa fa-envira" aria-hidden="true"></i>Our Vision, Mission and Values</a>
                </li>
            </ul>
        </div>
        <div class="footer col-md-3 col-sm-6">
            <ul>
                <h2>Our Resources<i class="hidden-md hidden-sm hidden-lg fa fa-arrow-right" aria-hidden="true"></i></h2>
                <li>
                    <a href="{{ url('/blog') }}"><i class="fa fa-envira" aria-hidden="true"></i>Blog</a>
                </li>
                <li>
                    <a href="{{ url('/quality') }}"><i class="fa fa-envira" aria-hidden="true"></i>Quality Assurance</a>
                </li>
                <li>
                    <a href="{{ url('/cooking') }}"><i class="fa fa-envira" aria-hidden="true"></i>Cooking With Herbs</a>
                </li>
            </ul>
        </div>
        <div class="footer col-md-3 col-sm-6">
            <ul>
                <h2>Smile's Policy<i class="hidden-md hidden-sm hidden-lg fa fa-arrow-right" aria-hidden="true"></i></h2>
                <li>
                    <a href="{{ url('/returns') }}"><i class="fa fa-envira" aria-hidden="true"></i>Return Policy</a>
                </li>
                <li>
                    <a href="{{ url('/privacy') }}"><i class="fa fa-envira" aria-hidden="true"></i>Privacy Policy</a>
                </li>
                
                <li>
                    <a href="{{ url('/terms') }}"><i class="fa fa-envira" aria-hidden="true"></i>Terms of Use</a>
                </li>
            </ul>
        </div>
        <div class="footer col-md-3 col-sm-6">
            <ul>
                <h2>Contact Us<i class="hidden-md hidden-sm hidden-lg fa fa-arrow-right" aria-hidden="true"></i></h2>
                <li class="col-xs-12">
                    <a href="">
                        <div class="col-xs-2">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="col-xs-10">4908 Berwyn Road, College Park, MD 20740</div>
                    </a>
                </li>
                <li class="col-xs-12">
                    <a href="">
                        <div class="col-xs-2">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="col-xs-10">(301) 474-8791</div>
                    </a>
                </li>
                <li class="col-xs-12">
                    <a href="{{ url('/contact')}}">
                        <div class="col-xs-2">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="col-xs-10">smileherbalist@gmail.com</div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        if ($(window).width() < 767) {
            $('#footer .footer ul li').hide();
            $('#footer .footer ul').click(function () {
                $(this).find('h2 i').toggleClass('fa-arrow-right fa-arrow-down');
                $('li', this).toggle('fast');
            });
        }
        else (
            $('#footer .footer ul li').show()
        );
        
    });
</script>