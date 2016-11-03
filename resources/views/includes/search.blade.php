<div id="search-product-form-mobile" class="col-xs-12 visible-xs">
    <form action="{{ url('search-product') }}" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="q"
                placeholder="Search products"> <span class="input-group-btn">
                <button type="submit" class="btn btn-green">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div>
    </form>
</div>

