@extends('master')

@section('title', '| Contact')

@section('content')
    
    <div class="container">
        <div id="about_container" class="col-xs-12">
            <h1 class="text-center">About Our Shop</h1>

            <div class="col-sm-12">
                <h3></b>Smile Herb Shop</b> - Your emporium for healthful living!</h3>

                <p>Welcome to Smile Herb Shop, your neighborhood store gone digital! Our holistic health products are chosen by Professional Herbalists with expertise in Western, Ayurveda, and Traditional Chinese healing systems. Shop with confidence knowing that these are the products we Herbalists are using for ourselves, our families and our clients.</p>
                <p>We have vitamins, herbal supplements, skin and hair care, teas, bulk herbs and spices to support your healthy holistic lifestyle. Get to know our herbalists and teachers, and browse our site for helpful articles, videos, class schedules, and more. We’re glad to have you here!</p>
            </div>

        </div>
              

        <div id="contact_container" class="col-xs-12 col-md-6" >
            <div class="row">
                <div id="address-section" class="col-xs-12">
                    <h1 class="text-center">Contact Us</h1>
                    

                    <div class="col-xs-12 col-md-7 contact-info">
                        <h3>Store Address</h3>  
                        <p>4908 Berwyn Road</p>
                        <p>College Park, MD 20740</p>
                        <a class="contact-links" href="tel:1-301-555-5555"><i class="fa fa-phone" aria-hidden="true"></i>(301) 474-8791</a><br>
                        <a class="contact-links" href="mailto:#goonerfari@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i>info@mrsmilesherbshop.com</a>
                    </div>
                    <div class="col-xs-12 col-md-5 socials">    
                        <div class="social">
                            <h3>Follow-us on:</h3>
                            <a href="https://twitter.com/lilmatev"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="https://www.pinterest.com/lilit0361/"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="https://www.facebook.com/groups/54712171830/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="https://www.instagram.com/lmatevosyan/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <div class="co-xs-12 col-md-12 map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24807.0061970686!2d-76.94450959420412!3d38.9953314415447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDU5JzQzLjIiTiA3NsKwNTUnMzcuMiJX!5e0!3m2!1sen!2sus!4v1475159964782"allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div id="messageus_container" class="col-xs-12 col-md-6">
            <h1 class="text-center">Send Us a Message</h1>

            <!--MESSAGE STATUS ALERT-->
            <div class="hidden-xs">
                @if (Session::has('success'))
                    <div class="alert alert-success" style="margin-bottom: 0px;" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
            </div>

            <div class="col-xs-12">

                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                
                
                <form id="contactUsForm" data-parsley-validate action="{{ url('contact') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input required minlength="3" maxlenth="25" type="name" class="form-control" id="name" name="name" placeholder="Enter name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input required type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input required minlength="10" type="subject" class="form-control" id="subject" name="subject" placeholder="Enter subject">
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea required type="text" minlength="10" maxlength="1000" rows="10" class="form-control" id="message" name="message" placeholder="Enter message"></textarea>
                    </div>

                    <button type="submit" class="btn btn-dark-green">Submit</button>
                    
                </form>

                <script src="{{ asset('js/parsley.min.js') }}"></script>
                <script type="text/javascript">
                  $('#contactUsForm').parsley();
                </script>
            </div>
        </div>

    </div>
@endsection