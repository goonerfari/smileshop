<div class="container">
    <div id="main-carousel" class="col-xs-12 col-md-8 carousel slide" data-ride="carousel">
    <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#main-carousel" data-slide-to="1"></li>
            <li data-target="#main-carousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="{{ asset('main-banner/img-1.png') }}">
            </div>
            <div class="item">
              <img src="{{ asset('main-banner/img-2.png') }}">
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        </a>
    </div>

    <!--BEST SELLERS-->
    <div id="best-seller" class="col-xs-12 col-md-4">
        <div class="col-md-12 col-xs-4 border bulk">
            <a href="#" role="button" aria-pressed="true">
                <div class="caption center-block">Bulk Spices</div>
            </a>
        </div>

        <div class="col-md-12 col-xs-4 border supplements">
            <a href="#" role="button" aria-pressed="true">
                <div class="caption center-block">Supplements</div>
            </a>
        </div>

        <div class="col-md-12 col-xs-4 border nutrition visible-xs">
            <a href="#" role="button" aria-pressed="true">
                <div class="caption center-block">Nutrition</div>
            </a>
        </div>
    </div>
</div>