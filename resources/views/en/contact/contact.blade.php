@extends('layouts.default', ['title' => 'contact us'])

@section('content')

    <!-- Banner section start -->
    <section class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-8 m-auto">
            <div class="ban-content text-center">
              <h1>Contact Us</h1>
              <p>Need help or would like to know some details about our service? We are always online.</p>
              <a href="https://wa.me/13196546076" class="video-btn"><i class="fab fa-whatsapp"></i></a>
              <span class="simple-txt">Chat with us in whatsapp</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Banner section end -->

    <div id="tooltip" style=" margin: -22px 331px; position: absolute"></div>


    <!-- Contact section start -->
    <section class="contact">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-7 nopadd-rth">
            <div class="contact-from-wrap">
              <div class="sec-heading">
                <h2 class="sec-title">Get In Touch</h2>
                <p class="sec-subtitle">Send us a message now.</p>
              </div>
              <form method='post' action="{{route('contact.store', app()->getLocale())}}" id="form-contact" class="contact-form clearfix">

              @csrf


                <div class="form-group row align-items-end">
                  <div class="col-sm-6 mb-4 mb-sm-0">
                    <label>Your name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" placeholder="Name">
                    <span class="invalid-feedback error-name">{{ $errors->first('name') }}</span>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" id="last-name" placeholder="Last name">
                      <span class="invalid-feedback error-last-name">{{ $errors->first('last_name') }}</span>
                  </div>
                </div>
                <div class="form-group">
                  <label>Email address</label>
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"  value="{{ old('email') }}" placeholder="Email">
                    <span class="invalid-feedback error-email">{{ $errors->first('email') }}</span>
                </div>
                <div class="form-group">
                  <label>Write message</label>
                  <textarea class="form-control @error('message') is-invalid @enderror" name="message" id="message" placeholder="Type here ...">{{ old('message') }}</textarea>
                    <span class="invalid-feedback error-message">{{ $errors->first('message') }}</span>
                </div>
                <button type="submit" class="btn btn-filled btn-round"><span class="bh"></span> <span>Send</span></button>
              </form>
            </div>
          </div>
          <div class="col-md-5 nopadd-ltf">
            <div class="contact-info-wrap">
              <address>
                <i class="fas fa-envelope"></i>
                <span>Email Address</span>
                <a href="malto:jckinter1@gmail.com">jckinter1@gmail.com</a>
                <a href="malto:help@jckinter.com">help@jckinter.com</a>
              </address>
              <address>
                <i class="fas fa-phone-alt"></i>
                <span>Phone Number</span>
                <a href="tel:+13196546076">+1 (319) 654 6076</a>
              </address>
              <address>
                <i class="fas fa-map-marker-alt"></i>
                <span>Our Head Office</span>
                147 Mango Drive,<br>
                Hiawatha IA 52233 <br>
                United State
              </address>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact section end -->

    <!-- Contact Media start -->
    <section class="contact-media bg-offwhite">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 m-auto text-center">
            <div class="sec-heading">
              <h2 class="sec-title">Connect With Our Social Medias</h2>
              <p class="sec-subtitle">Visite our social media pages</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-sm-3 col-6">
            <a href="#" class="cm-box">
              <i class="fab fa-facebook-f"></i>
              Facebook
            </a>
          </div>
          <div class="col-lg-3 col-sm-3 col-6">
            <a href="#" class="cm-box">
              <i class="fab fa-twitter"></i>
              Twitter
            </a>
          </div>
          <div class="col-lg-3 col-sm-3 col-6">
            <a href="#" class="cm-box">
              <i class="fab fa-instagram"></i>
              Instagram
            </a>
          </div>
          <div class="col-lg-3 col-sm-3 col-6">
            <a href="#" class="cm-box">
              <i class="fab fa-linkedin"></i>
              Linkedin
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Media end -->

    <!-- Contact Map start --
    <section class="contact-map">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 m-auto text-center">
            <div class="sec-heading">
              <h2 class="sec-title">We Are Available All Over The World</h2>
              <p class="sec-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div id="map">
              <img src="{{ asset('app/images/blogging-concept.jpg') }}" alt="image">
            </div>
          </div>
        </div>
      </div>
    </section>
    !-- Contact Map end -->



<script src="{{ asset('app/js/contact.js') }}"></script>

    @include('layouts.footer')

@stop
