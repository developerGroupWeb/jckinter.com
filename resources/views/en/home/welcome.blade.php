@extends('layouts.default', ['title' => 'Home'])

@section('content')

    <!-- Banner section start -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-auto">
                    <div class="ban-content">
                        <h1>Send money home without code. <br>Simple and Fast.<br> Easy to use!</h1>
                        <p></p>
                    </div>

                    <div id="content-ajax-loader"></div>

                    @if(session()->has('delete'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Thanks!</strong> {{session('delete')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Thanks!</strong> {{session('success')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if(session()->has('replay'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Sorry!</strong> {{session('replay')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form action="{{ route('currencyconverter.store', app()->getLocale()) }}" method="post" id="currency-form-v2">

                        @csrf

                        <div class="currency-form-v2" id="currency-transfer">
                            <h4>Send Money</h4>
                            <div class="col-lg-4 mb-3">
                                <label for="country">Send to</label>
                                <select  class="custom-select custom-select-lg" id="country">
                                    <option>Where?</option>
                                    <option value="Cotonou, BENIN">Cotonou, BENIN</option>
                                    <option value="Calavi, BENIN">Calavi, BENIN</option>
                                    <option value="Lome, TOGO">Lome, TOGO</option>
                                </select>
                            </div>

                            <div class="col-lg-4 mb-3">
                                <label for="amount-send">Send Amount</label>
                                <div class="input-group">
                                    <input type="text"  class="form-control form-control-lg" id="amount-send" aria-describedby="currencysend" placeholder="$500.00" disabled>
                                    <div class="input-group-append">
                                        <!--<span class="input-group-text" id="device-receive"></span>-->
                                        <select class="custom-select custom-select-lg" name="devise_send" id="devise-send" disabled="disabled">
                                            @foreach($default_currency ?? '' as $key => $currency)
                                                <option value="{{ $key }}">{{ $currency }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <small class="error text-danger text-center d-none">Send amount must be between 1 and 500
                                        @foreach($errors->all() as $error)
                                            {{ $error }}
                                        @endforeach
                                    </small>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-3">
                                <label for="amount-receive">Receive Amount</label>
                                <div class="input-group">
                                    <input type="text"  class="form-control form-control-lg" id="amount-receive" aria-describedby="currencyget" disabled>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="device-receive">XOF</span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-field col-lg-4 offset-lg-4 mt-5">
                                <span class="btn btn-block btn-filled form-btn" id="continue" disabled>
                                    <span class="bh"></span> <span >Continue <i class="fas fa-arrow-right"></i></span>
                                </span>
                            </div>
                        </div>


                        <!-----------------second step--------------------->

                        <div class="currency-form-v2 d-none" id="summary-transfer">

                            <h4>Total recapitulatif</h4>

                            <div class="col-lg-3 mb-3">
                                <p>Country receive</p>
                                <h4 class="country-receive">data</h4>
                                <input name="country" type="hidden" value="">
                            </div>

                            <div class="col-lg-3 mb-3">
                                <p>Amount send</p>
                                <h4 class="amount-send">amount+currency</h4>
                                <input name="amount_send" type="hidden" value="">
                                <input name="devise_send" type="hidden" value="">
                            </div>

                            <div class="col-lg-3 mb-3">
                                <p>Amount receive</p>
                                <h4 class="amount-receive">amount+currency</h4>
                                <input name="amount_receive" type="hidden" value="">
                            </div>


                            <div class="col-lg-3 mb-3">
                                <p class="font-weight-bold">Total to pay</p>
                                <h4 class="amount-total">amount+currency</h4>
                                <input name="total" type="hidden" value="">
                                <p>Amount with fees*</p>
                                <input type="hidden" name="exchange" id="exchange" value="">
                                <input name="fees" type="hidden" id="fees" value="">

                            </div>

                            <div class="form-field col-lg-6 offset-lg-3">
                                <div class="row">
                                <span class="btn btn-group col-4 mr-5  btn-filled form-btn" id="back">
                                    <span class="bh"></span> <span><i class="fas fa-arrow-left"></i> Back</span>
                                </span>

                                    <button type="submit"  class="btn btn-group col-6  btn-filled form-btn">
                                        <span class="bh"></span> <span >Continue transfer <i class="fas fa-arrow-right"></i></span>
                                    </button>
                                </div>
                            </div>
                        </div>


                        <! -------------------------------------->
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Easy steps section start -->
    <section class="easy-steps">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 m-auto">
                    <div class="sec-heading">
                        <h2 class="sec-title">Easy and Fast Way to Send Money</h2>
                        <p class="sec-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-md-12 m-auto">
                    <ul class="steps">
                        <li><span>1</span> Select Country</li>
                        <li><span>2</span> Choose Service</li>
                        <li><span>3</span> Input Information</li>
                        <li><span>4</span> Confirm and Send</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Easy steps section end -->


    <!-- Overview section start -->
    <section class="overview bg-offwhite">
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
                    <div class="iconBox listBox-shadow">
                        <!-- <img src="images/icons/1.png" alt="" class="img-icon"> -->

                        <!-- Roysha icon
                        <span class="jck-icon roysha-fast-transfer"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span></span>-->

                        <h5><a href="#">Fast transfer</a></h5>
                        <p>Lorem ipsum dolor sitame coctetur adipiscing elised do eiusmte</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="iconBox listBox-shadow">
                        <!-- <img src="images/icons/2.png" alt="" class="img-icon"> -->

                        <!-- Roysha icon
                        <span class="jck-icon roysha-low-cost"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span><span class="path29"></span><span class="path30"></span></span>-->

                        <h5><a href="#">Low cost</a></h5>
                        <p>Lorem ipsum dolor sitame coctetur adipiscing elised do eiusmte</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="iconBox listBox-shadow">
                        <!-- <img src="images/icons/3.png" alt="" class="img-icon"> -->

                        <!-- Roysha icon
                        <span class="jck-icon roysha-cash-pin"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span></span>-->

                        <h5><a href="#">Trusted service</a></h5>
                        <p>Lorem ipsum dolor sitame coctetur adipiscing elised do eiusmte</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="iconBox listBox-shadow">
                        <!-- <img src="images/icons/1.png" alt="" class="img-icon"> -->

                        <!-- Roysha icon
                        <span class="jck-icon roysha-support"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></span>-->

                        <h5><a href="#">24/7 Active services</a></h5>
                        <p>Lorem ipsum dolor sitame coctetur adipiscing elised do eiusmte</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Overview section end -->


    <!-- Services section start -->
    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 m-auto">
                    <div class="sec-heading">
                        <h2 class="sec-title">Secure Payment With Low Transfer Fees</h2>
                        <p class="sec-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="iconBox boxed text-center">
                        <!-- <img src="images/icons/1.png" alt="" class="img-icon"> -->

                        <!-- Roysha icon
                        <span class="roysha-icon roysha-secured"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span></span>-->

                        <h5><a href="#">Secure Payment Service</a></h5>
                        <p>Lorem ipsum qitame coctetr of asipm scing elise eiusm temor incidid ue. Ruispm suspen disse intert ultrices gravida.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="iconBox boxed text-center">
                        <!-- <img src="images/icons/2.png" alt="" class="img-icon"> -->

                        <!-- Roysha icon
                        <span class="roysha-icon roysha-amount"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span></span>-->

                        <h5><a href="#">Low Cost and Fast transfer</a></h5>
                        <p>Lorem ipsum qitame coctetr of asipm scing elise eiusm temor incidid ue. Ruispm suspen disse intert ultrices gravida. </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="iconBox boxed text-center">
                        <!-- <img src="images/icons/3.png" alt="" class="img-icon"> -->

                        <!-- Roysha icon
                        <span class="roysha-icon roysha-wallet"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span></span>-->

                        <h5><a href="#">Real Time Money Tracking</a></h5>
                        <p>Lorem ipsum qitame coctetr of asipm scing elise eiusm temor incidid ue. Ruispm suspen disse intert ultrices gravida. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services section end -->


    <!-- Testimonial section start -->
    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 m-auto">
                    <div class="sec-heading">
                        <span class="tagline">Clients Opinion</span>
                        <h2 class="sec-title">What Users Say About US</h2>
                        <p class="sec-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    </div>
                </div>
            </div>
            <div class="test-caro owl-carousel">
                <div class="single-testimonial">
                    <div class="tst-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elitsed do eiusmod pempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspen risse ultrices gravida.
                    </div>
                    <div class="tst-head">
                        <img src="{{ asset('app/images/avatar.png') }}" class="avatar" alt="">
                        <h6>Jhon Doe</h6>
                        <span>Business analist</span>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="tst-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elitsed do eiusmod pempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspen risse ultrices gravida.
                    </div>
                    <div class="tst-head">
                        <img src="{{ asset('app/images/avatar.png') }}" class="avatar" alt="">
                        <h6>Jhon Doe</h6>
                        <span>Business analist</span>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="tst-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elitsed do eiusmod pempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspen risse ultrices gravida.
                    </div>
                    <div class="tst-head">
                        <img src="{{ asset('app/images/avatar.png') }}" class="avatar" alt="">
                        <h6>Jhon Doe</h6>
                        <span>Business analist</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial section end -->

    <!-- Faq section start -->
    <section class="faq-tab bg-offwhite">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 m-auto text-center">
                    <div class="sec-heading">
                        <h2 class="sec-title">Frequently Asked Questions</h2>
                        <p class="sec-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 col-md-12 m-auto">
                    <ul class="row nav nav-tabs">
                        <li class="col-md-3">
                            <a class="active" data-toggle="tab" href="#general-qs">
                                <!-- <img src="images/icons/9.png" alt=""> -->

                                <!-- Roysha icon
                                <span class="roysha-icon roysha-ask"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></span>-->

                                General Questions
                            </a>
                        </li>
                        <li class="col-md-3">
                            <a data-toggle="tab" href="#trasn-money">
                                <!-- <img src="images/icons/10.png" alt=""> -->

                                <!-- Roysha icon
                                <span class="roysha-icon roysha-hand-cash"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></span>-->

                                Money Transfer
                            </a>
                        </li>
                        <li class="col-md-3">
                            <a data-toggle="tab" href="#mbl-banking">
                                <!-- <img src="images/icons/11.png" alt=""> -->

                                <!-- Roysha icon
                                <span class="roysha-icon roysha-fast-transfer"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span></span>-->

                                Mobile Banking
                            </a>
                        </li>
                        <li class="col-md-3">
                            <a data-toggle="tab" href="#fee-charges">
                                <!-- <img src="images/icons/12.png" alt=""> -->

                                <!-- Roysha icon
                                <span class="roysha-icon roysha-bank-diposite"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span></span>-->

                                Fees and Charges
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="general-qs" class="tab-pane fade in active show">
                            <div class="accordion" id="accordion">
                                <div class="accordion-item">
                                    <h5 class="collapsed" data-toggle="collapse" data-target="#faq-1" aria-expanded="true">
                                        Lorem ipsum dolor sit amet
                                    </h5>
                                    <div id="faq-1" class="collapse" data-parent="#accordion">
                                        <div class="acr-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscied do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspen disse ultrices gravida.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="collapsed" data-toggle="collapse" data-target="#faq-2" aria-expanded="false">
                                        Input Wallet Informations
                                    </h5>

                                    <div id="faq-2" class="collapse show" data-parent="#accordion">
                                        <div class="acr-body">
                                            <p>Molestie eu blandit eu sodales, nulla vitae nulla tempor et porta, ante nec commodo. Nulla non fringilla urna dolor vivamus, vulputate eu neque vivamus lacus in, imperdiet id sed malesuada per.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="collapsed" data-toggle="collapse" data-target="#faq-3" aria-expanded="false">
                                        Confirm information and payover
                                    </h5>

                                    <div id="faq-3" class="collapse" data-parent="#accordion">
                                        <div class="acr-body">
                                            <p>Blandit eu sodales, nulla vitae nulla tempor et porta, ante nec commodo. Nulla non fringilla urna dolor vivamus, vulputate eu neque vivamus lacus in, imperdiet id sed malesuada per.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="collapsed" data-toggle="collapse" data-target="#faq-4" aria-expanded="false">
                                        Access Your Mobile Wallet
                                    </h5>

                                    <div id="faq-4" class="collapse" data-parent="#accordion">
                                        <div class="acr-body">
                                            <p>Molestie eu blandit eu sodales, nulla vitae nulla tempor et porta, ante nec commodo. Nulla non fringilla urna dolor vivamus, vulputate eu neque vivamus lacus in, imperdiet id sed malesuada per.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="collapsed" data-toggle="collapse" data-target="#faq-5" aria-expanded="false">
                                        Input Wallet Informations
                                    </h5>

                                    <div id="faq-5" class="collapse" data-parent="#accordion">
                                        <div class="acr-body">
                                            <p>Blandit eu sodales, nulla vitae nulla tempor et porta, ante nec commodo. Nulla non fringilla urna dolor vivamus, vulputate eu neque vivamus lacus in, imperdiet id sed malesuada per.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="trasn-money" class="tab-pane fade">
                            <div class="accordion" id="accordion1">
                                <div class="accordion-item">
                                    <h5 class="collapsed" data-toggle="collapse" data-target="#tm-1" aria-expanded="true">
                                        Access Your Mobile Wallet
                                    </h5>
                                    <div id="tm-1" class="collapse" data-parent="#accordion">
                                        <div class="acr-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscied do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspen disse ultrices gravida.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="collapsed" data-toggle="collapse" data-target="#tm-2" aria-expanded="false">
                                        Input Wallet Informations
                                    </h5>

                                    <div id="tm-2" class="collapse show" data-parent="#accordion">
                                        <div class="acr-body">
                                            <p>Molestie eu blandit eu sodales, nulla vitae nulla tempor et porta, ante nec commodo. Nulla non fringilla urna dolor vivamus, vulputate eu neque vivamus lacus in, imperdiet id sed malesuada per.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="collapsed" data-toggle="collapse" data-target="#tm-3" aria-expanded="false">
                                        Confirm information and payover
                                    </h5>

                                    <div id="tm-3" class="collapse" data-parent="#accordion">
                                        <div class="acr-body">
                                            <p>Blandit eu sodales, nulla vitae nulla tempor et porta, ante nec commodo. Nulla non fringilla urna dolor vivamus, vulputate eu neque vivamus lacus in, imperdiet id sed malesuada per.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="mbl-banking" class="tab-pane fade">
                            <div class="accordion" id="accordion2">
                                <div class="accordion-item">
                                    <h5 class="collapsed" data-toggle="collapse" data-target="#mblb-1" aria-expanded="true">
                                        Input Wallet Informations
                                    </h5>
                                    <div id="mblb-1" class="collapse" data-parent="#accordion">
                                        <div class="acr-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscied do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspen disse ultrices gravida.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="collapsed" data-toggle="collapse" data-target="#mblb-2" aria-expanded="false">
                                        Access Your Mobile Wallet
                                    </h5>

                                    <div id="mblb-2" class="collapse show" data-parent="#accordion">
                                        <div class="acr-body">
                                            <p>Molestie eu blandit eu sodales, nulla vitae nulla tempor et porta, ante nec commodo. Nulla non fringilla urna dolor vivamus, vulputate eu neque vivamus lacus in, imperdiet id sed malesuada per.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="collapsed" data-toggle="collapse" data-target="#mblb-3" aria-expanded="false">
                                        Confirm information payover
                                    </h5>

                                    <div id="mblb-3" class="collapse" data-parent="#accordion">
                                        <div class="acr-body">
                                            <p>Blandit eu sodales, nulla vitae nulla tempor et porta, ante nec commodo. Nulla non fringilla urna dolor vivamus, vulputate eu neque vivamus lacus in, imperdiet id sed malesuada per.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="fee-charges" class="tab-pane fade">
                            <div class="accordion" id="accordion3">
                                <div class="accordion-item">
                                    <h5 class="collapsed" data-toggle="collapse" data-target="#fc-1" aria-expanded="true">
                                        Your Mobile Wallet
                                    </h5>
                                    <div id="fc-1" class="collapse" data-parent="#accordion">
                                        <div class="acr-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscied do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspen disse ultrices gravida.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="collapsed" data-toggle="collapse" data-target="#fc-2" aria-expanded="false">
                                        Input Wallet Informations
                                    </h5>

                                    <div id="fc-2" class="collapse show" data-parent="#accordion">
                                        <div class="acr-body">
                                            <p>Molestie eu blandit eu sodales, nulla vitae nulla tempor et porta, ante nec commodo. Nulla non fringilla urna dolor vivamus, vulputate eu neque vivamus lacus in, imperdiet id sed malesuada per.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="collapsed" data-toggle="collapse" data-target="#fc-3" aria-expanded="false">
                                        Confirm information and payover
                                    </h5>

                                    <div id="fc-3" class="collapse" data-parent="#accordion">
                                        <div class="acr-body">
                                            <p>Blandit eu sodales, nulla vitae nulla tempor et porta, ante nec commodo. Nulla non fringilla urna dolor vivamus, vulputate eu neque vivamus lacus in, imperdiet id sed malesuada per.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq section end -->

    <!-- App section start -->
    <section class="app">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="content-box">
                        <h2>Download Our Mobile Apps</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas</p>
                        <ul class="list">
                            <li><i class="fas fa-check-circle"></i> Lorem ipsum dolor sit amet, consectetur adipiscing. </li>
                            <li><i class="fas fa-check-circle"></i> Rabore ettoram dolore magna aliquis ipsum.</li>
                            <li><i class="fas fa-check-circle"></i> Pouis ipsum suspendisse ultrices gravida.</li>
                        </ul>
                        <a href="#" class="btn btn-default icon-left"><span class="bh"></span> <span><i class="fab fa-android"></i> Google play</span></a>
                        <a href="#" class="btn btn-default icon-left"> <span class="bh"></span> <span><i class="fab fa-apple"></i>App store</span></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <figure class="imgBox">
                        <!-- <img src="images/app-img.png" alt=""> -->
                        <img src="{{ asset('app/images/ani5/1.png') }}" alt="" class="ani5 ani5img1">
                        <img src="{{ asset('app/images/ani5/2.png') }}" alt="" class="ani5 ani5img2">
                        <img src="{{ asset('app/images/ani5/3.png') }}" alt="" class="ani5 ani5img3">
                        <img src="{{ asset('app/images/ani5/4.png') }}" alt="" class="ani5 ani5img4">
                        <img src="{{ asset('app/images/ani5/5.png') }}" alt="" class="ani5 ani5img5">
                        <img src="{{ asset('app/images/ani5/6.png') }}" alt="" class="ani5 ani5img6">

                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- App section end -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('app/js/currency.js') }}"></script>


    @include('layouts.footer')


@stop
