@extends('layouts.default', ['title' => 'Current Converter'])

@section('content')

<!-- Banner section start -->
<section class="banner v3">
    <div class="container">
    <div class="row">
        <div class="col-md-12 m-auto">
            <div class="ban-content text-center">
                <h1>Money Transfer Service <br> World Wide</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspe ultrices gravida. <br> Risus commodo viverra maecenas .</p>
            </div>

            <form class="currency-form-v2" action="#">
                <!----------------firt step---------------------->
                <div class="">
                    <h4>Send Money</h4>
                    <div class="col-lg-4 mb-3">
                        <label for="wheresend">Send to</label>
                        <select class="custom-select custom-select-lg" id="wheresend">
                            <option selected>Where?</option>
                            <option value="coo">Cotonou, BENIN</option>
                            <option value="cav">Calavi, BENIN</option>
                            <option value="lom">Lome, TOGO</option>
                        </select>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label for="amountsend">First name</label>
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg" id="amountsend" aria-describedby="currencysend" placeholder="$1,000.00">
                            <div class="input-group-append">
                                <select class="custom-select custom-select-lg" id="currencysend">
                                    <option value="coo">USD</option>
                                    <option value="cav">EUR</option>
                                    <option value="lom">CAD</option>
                                    <option value="lom">AUD</option>
                                    <option value="lom">GBP</option>
                                    <option value="lom">INR</option>
                                    <option value="lom">CNY</option>
                                </select>
                            </div>
                            <small class="error text-danger text-center d-none">Send amount must be between 1 and 1000</small>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label for="amountreceive">They get</label>
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg" id="amountreceive" aria-describedby="currencyget">
                            <div class="input-group-append">
                            <span class="input-group-text" id="currencyget">XOF</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-field col-lg-4 offset-lg-4">
                        <button class="btn btn-block btn-filled form-btn">
                            <span class="bh"></span> <span >Continue <i class="fas fa-arrow-right"></i></span>
                        </button>
                    </div>
                </div>

                 <!-----------------second step--------------------->

                <div class="d-none">
                    <h4>Total recapitulatif</h4>
                    <div class="col-lg-4 mb-3">
                        <label for="wheresend">Country receive</label>
                        <h4>data</h4>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label for="amountsend">First name</label>
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg" id="amountsend" aria-describedby="currencysend" placeholder="$1,000.00">
                            <div class="input-group-append">
                                <select class="custom-select custom-select-lg" id="currencysend">
                                    <option value="coo">USD</option>
                                    <option value="cav">EUR</option>
                                    <option value="lom">CAD</option>
                                    <option value="lom">AUD</option>
                                    <option value="lom">GBP</option>
                                    <option value="lom">INR</option>
                                    <option value="lom">CNY</option>
                                </select>
                            </div>
                            <small class="error text-danger text-center d-none">Send amount must be between 1 and 1000</small>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label for="amountreceive">They get</label>
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg" id="amountreceive" aria-describedby="currencyget">
                            <div class="input-group-append">
                            <span class="input-group-text" id="currencyget">XOF</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-field col-lg-4 offset-lg-4">
                        <button class="btn btn-block btn-filled form-btn">
                            <span class="bh"></span> <span >Continue  <i class="fas fa-arrow-right"></i></span>
                        </button>
                    </div>
                </div>
                <!-------------------------------------->
            </form>
        </div>
    </div>
    </div>
</section>
<!--<section class="banner v7">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12">
                <div class="ban-content">
                    <h1>Send Money Anytime, Anywhere for Free</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>Quis ipsum suspe ultrices gravida. Risus commodo viverra maecenas .</p>
                    <a href="https://vimeo.com/191947042" class="btn btn-outline btn-round icon-left" data-fancybox>
                        <span class="bh"></span> <span><i class="fas fa-play"></i> Learn more</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="form-tab">
                    <ul class="nav nav-tabs">
                        <li><a>Send Money</a></li>
                        <!--<li><a data-toggle="tab" href="#receive-money">Receive Money</a></li>--
                    </ul>
                    <div class="tab-content currency-form">
                        <div id="send-money" class="tab-pane fade in active show">

                            <form class="" action="" method="post" id="form-currency">
                                <div class="form-field" id="form-field-send">
                                    <label>send amount</label>
                                    <div class="join-field">

                                        <input type="text" name="send_amount" id="send_amount" placeholder="$1,000.00"/>
                                        {{--<select>
                                            <option value="USD"><img src="{{ asset('app/images/flags/usa.png') }}" alt="">USD &nbsp;<i class="fas fa-caret-down"></i></option>
                                            <option value="AUD"><img src="{{ asset('app/images/flags/australia.png') }}" alt="">AUD</option>
                                            <option value="CAD"><img src="{{ asset('app/images/flags/canada.png') }}" alt="">CAD </option>
                                        </select>
                                        --}}
                                        <div class="curr-select">
                                            <span class="selected"><img src="{{ asset('app/images/flags/usa.png') }}" alt="">usd &nbsp;<i class="fas fa-caret-down"></i></span>
                                            <ul>
                                                <li><a href="#"><img src="{{ asset('app/images/flags/australia.png') }}" alt="">aud</a></li>
                                                <li><a href="#"><img src="{{ asset('app/images/flags/canada.png') }}" alt="">cad</a></li>
                                            </ul>
                                        </div>


                                    </div>
                                </div>
                                <div class="currency-text">
                                    <span><strong>75.5</strong> Exchange Rate</span>
                                    <span><strong>$4.50</strong> Transition Fees</span>
                                </div>
                                <div class="form-field">
                                    <label>Receive amount</label>
                                    <div class="join-field">

                                        <input type="text" name="receive_amount" id="receive_amount"  placeholder="XOF1,000.00" disabled>

                                        <div class="curr-select">
                                            <span class="selected" id="selected-receive"><img src="{{ asset('app/images/flags/benin.png') }}" alt="">xof &nbsp;<i class="fas fa-caret-down"></i></span>
                                            <ul>
                                                <li><a href="#"><img src="{{ asset('app/images/flags/togo.jpg') }}" alt="">xof</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-block btn-filled form-btn">
                                    <span class="bh"></span> <span>Continue Transition <i class="fas fa-arrow-right"></i></span>
                                </button>
                                <span class="accept-terms">By clicking continue, i am agree with <a href="#">Terms &amp; Policy</a></span>
                            </form>
                        </div>

                        <!--<div id="receive-money" class="tab-pane fade">
                          <form class="" action="#">
                            <div class="form-field">
                              <label>send amount</label>
                              <div class="join-field">
                                <input type="text" name="send_amount" placeholder="$1,000.00">
                                <div class="curr-select">
                                  <span class="selected"><img src="images/flags/usa.png" alt="">usd &nbsp;<i class="fas fa-caret-down"></i></span>
                                  <ul>
                                    <li><a href="#"><img src="images/flags/australia.png" alt="">aud</a></li>
                                    <li><a href="#"><img src="images/flags/canada.png" alt="">cad</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="form-field">
                              <label for="rcv_country">Receiver Country</label>
                              <select id="rcv_country" name="rcv_country">
                                <option>Select Country</option>
                                <option value="usa">USA</option>
                                <option value="canada">Canada</option>
                                <option value="australia">Australia</option>
                              </select>
                            </div>
                            <div class="form-field">
                              <label for="del_type">Delivery Type</label>
                              <select id="del_type" name="del_type">
                                <option>Choose Delivery Type</option>
                                <option value="imt">Immediate Transfer</option>
                                <option value="rtt">Real Time Transfer</option>
                                <option value="eft">Electronic Transfer</option>
                              </select>
                            </div>
                            <button class="btn btn-block btn-filled form-btn">
                              <span class="bh"></span> <span>Continue Transition <i class="fas fa-arrow-right"></i></span>
                            </button>
                            <span class="accept-terms">By clicking continue, i am agree with <a href="#">Terms &amp; Policy</a></span>
                          </form>
                        </div>--
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->
<!-- Banner section end -->

@include('layouts.footer')

@stop
