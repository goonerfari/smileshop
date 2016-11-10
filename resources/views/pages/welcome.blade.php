@extends('master')

@section('title', '| Homepage')

@section('content')
     

    <div id="header" class="container">

      @include('includes.header')

    </div> 
    
    <section id="main-banner">

      @include('includes.carousels')

    </section>
    

        
    <div class="container">
            
        @include('includes.main')
        
    </div>

    
@stop