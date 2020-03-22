@extends('layouts.default', ['title' => 'maintenance'])

@section('content')
    
    <!-- Coming section start --><!--Page sans header ni footer-->
    <section class="coming-sec">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 m-auto">
            <div class="sec-heading">
              <h2 class="sec-title">We Are Coming Soon</h2>
              <p class="sec-subtitle">Our exciting new website is coming soon, Stay connected...</p>
            </div>
            <div class="text-center" id="clock"></div>
            <form class="bill-form v2 text-center" action="#">
              <h3>Stay connected</h3>
              <div class="form-field">
                <div class="join-field">
                  <input type="text" placeholder="Type a question...">
                  <button class="btn btn-block btn-filled form-btn"><span class="bh"></span> <span>Search</span></button>
                </div>
              </div>
            </form>
          </div>        
        </div>
      </div>
    </section>
    <!-- Coming section end -->

    @stop