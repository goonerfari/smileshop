<!DOCTYPE html>
<html lang="en">
    @include('partials._head')
    <!-- JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
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
<script src="{{ asset('js/main.js')}}"></script>
</body>
</html>