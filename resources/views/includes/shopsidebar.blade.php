<div class="hidden-xs" id="sidebar_container">
    <h3>Browse by Category</h3>
    <ul>
        @foreach($categories as $category)
            <li style="padding: 6px 0px;"><a href="">{{ $category->name }}</a></li>
        @endforeach
    </ul>
</div>