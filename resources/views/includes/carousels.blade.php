<section>
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
                  <img src="{{ asset('main-banner/img-1.jpg') }}">
                </div>
                <div class="item">
                  <img src="{{ asset('main-banner/img-2.jpg') }}">
                </div>
                <div class="item">
                  <img src="{{ asset('main-banner/img-3.jpg') }}">
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
        <div id="best-seller" class="hidden-xs hidden-sm col-md-4">
            <hr class="visible-xs visible-sm" style="width: 80%; border-color: green; border-top-width: 2px;" style="height: 20px;">

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

            <div class="col-md-12 col-xs-4 border nutrition">
                <a href="#" role="button" aria-pressed="true">
                    <div class="caption center-block">Nutrition</div>
                </a>
            </div>
        </div>
    </div>    
</section>
    <!--BEST SELLERS-->
<div class="container">
    <div id="best-seller" class="col-xs-12 visible-sm visible-xs" style="padding-top: 20px;">
        <hr class="visible-xs visible-sm" style="width: 80%; border-color: green; border-top-width: 2px; height: 20px;">

        <div class="col-md-12 col-sm-4 col-xs-4 border bulk">
            <a href="#" role="button" aria-pressed="true">
                <div class="caption center-block">Bulk Spices</div>
            </a>
        </div>

        <div class="col-md-12 col-sm-4 col-xs-4 border supplements">
            <a href="#" role="button" aria-pressed="true">
                <div class="caption center-block">Supplements</div>
            </a>
        </div>

        <div class="col-md-12 col-sm-4 col-xs-4 border nutrition">
            <a href="#" role="button" aria-pressed="true">
                <div class="caption center-block">Nutrition</div>
            </a>
        </div>
    </div>
</div>