@extends('layouts.default', ['title' => 'contact us'])

@section('content')

    <!-- Banner section start -->
    <section class="banner nopadd-btm">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-md-12 m-auto">
            <div class="ban-content text-center">
              <h1>First And Easy Money Transfer Solution Across World</h1>
            </div>
          </div>     
        </div>
      </div>
      <img class="card-scrn-img" src="{{ asset('app/images/cards.png') }}" alt="image-banner">
    </section>
    <!-- Banner section end -->

    
    <!-- About overview section start -->
    <section class="about-overview">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 m-auto">
            <div class="sec-heading">
              <h2 class="sec-title">What Service We Provide</h2>
              <p class="sec-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="iconBox boxed-shadow text-center">
              <!-- <img src="images/icons/1.png" alt="" class="img-icon"> -->

              <!-- Roysha icon 
              <span class="roysha-icon roysha-fast-transfer"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span></span>-->

              <h5><a href="#">Send Money</a></h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipis elited deiusmod tempor incidqn tutirial labor magna aliqua.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="iconBox boxed-shadow text-center">
              <!-- <img src="images/icons/2.png" alt="" class="img-icon"> -->

              <!-- Roysha icon 
              <span class="roysha-icon roysha-mobile-app"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span></span>-->

              <h5><a href="#">Receive Money</a></h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipis elited deiusmod tempor incidqn tutirial labor magna aliqua.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="iconBox boxed-shadow text-center">
              <!-- <img src="images/icons/3.png" alt="" class="img-icon"> -->

              <!-- Roysha icon 
              <span class="roysha-icon roysha-online-pay"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span></span>-->

              <h5><a href="#">Pay Online</a></h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipis elited deiusmod tempor incidqn tutirial labor magna aliqua.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About overview section end -->

    <!-- System works start -->
    <section class="system-works bg-offwhite">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 m-auto">
            <div class="sec-heading">
              <h2 class="sec-title">What We Do For You</h2>
              <p class="sec-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <ul class="nav nav-tabs cmn-tab-nav">
              <li><a class="active" data-toggle="tab" href="#money-transition">Money Transition</a></li>
              <li><a data-toggle="tab" href="#tracking-activity">Tracking Activity</a></li>
              <li><a data-toggle="tab" href="#secure-payment">Secure Payment</a></li>
            </ul>
            
            <div class="tab-content">
              <div id="money-transition" class="tab-pane fade in active show">
                <div class="row align-items-center">
                  <div class="col-md-6">
                    <figure class="imgBox">
                      <img src="{{ asset('app/images/payment-service.png') }}" alt="">
                    </figure>
                  </div>
                  <div class="col-md-6">
                    <div class="content-box">
                      <h2>We Made The Easiest Possible Way To Transfer Money</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                      <p>ccumsanamet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div id="tracking-activity" class="tab-pane fade">
                <div class="row align-items-center">
                  <div class="col-md-6">
                    <div class="content-box">
                      <h2>Give Your Information to Sender</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                      
                    </div>
                  </div>
                  <div class="col-md-6">
                    <figure class="imgBox">
                      <img src="{{ asset('app/images/app-img.png') }}" alt="">
                    </figure>
                  </div>
                </div>
              </div>
              <div id="secure-payment" class="tab-pane fade">
                <div class="row align-items-center">
                  <div class="col-md-6">
                    <div class="content-box">
                      <h2>Give Your Information to Sender</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                      
                    </div>
                  </div>
                  <div class="col-md-6">
                    <figure class="imgBox">
                      <img src="{{ asset('app/images/internet-bill.png') }}" alt="">
                    </figure>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- System works end -->

    <!-- Overview section start -->
    <section class="overview">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 m-auto">
            <div class="sec-heading">
              <h2 class="sec-title">Why Choose us</h2>
              <p class="sec-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>
          </div>          
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="iconBox listBox">
              <!-- <img src="images/icons/1.png" alt="" class="img-icon"> -->

              <!-- Roysha icon 
              <span class="roysha-icon roysha-bank-diposite"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span></span>-->

              <h5><a href="#">Fast Transfer</a></h5>
              <p>Lorem ipsum dolor sitame coctetur adipiscing elised do eiusmte</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="iconBox listBox">
              <!-- <img src="images/icons/2.png" alt="" class="img-icon"> -->

              <!-- Roysha icon 
              <span class="roysha-icon roysha-low-cost"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span><span class="path29"></span><span class="path30"></span></span>-->
              
              <h5><a href="#">Low cost</a></h5>
              <p>Lorem ipsum dolor sitame coctetur adipiscing elised do eiusmte</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="iconBox listBox">
              <!-- <img src="images/icons/3.png" alt="" class="img-icon"> -->

              <!-- Roysha icon 
              <span class="roysha-icon roysha-secured"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span></span>-->
              
              <h5><a href="#">Trusted and secure</a></h5>
              <p>Lorem ipsum dolor sitame coctetur adipiscing elised do eiusmte</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="iconBox listBox">
              <!-- <img src="images/icons/1.png" alt="" class="img-icon"> -->

              <!-- Roysha icon 
              <span class="roysha-icon roysha-form"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span></span>-->
              
              <h5><a href="#">Complete Solution</a></h5>
              <p>Lorem ipsum dolor sitame coctetur adipiscing elised do eiusmte</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Overview section end -->

@include('layouts.footer')

@stop
