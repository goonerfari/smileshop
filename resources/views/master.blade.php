<!DOCTYPE html>
<html lang="en">
    @include('partials._head')
    <!-- JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<body>
    
    @include('includes.top')

    @include('includes.nav')
    
    <div class="container">
      @include('partials._messages')
    </div> 
    
    {{-- @include('partials._nav') --}}

      @yield('content')

    <!--FOOTER-->
    @include('includes.footer')



@yield('extra-js')

</body>
</html>