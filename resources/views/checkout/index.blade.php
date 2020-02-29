@extends('layouts.defaultNav', ['title' => 'Checkout'])

@section('content')

    <div class="signup-login">
        <div class="sl-slider-caro owl-carousel">
            <div class="single-sl-slide">
            <img src="{{ asset('app/images/mac.png') }}" alt="">
            <div class="content-box">
                <h2>All In One Transfer Solutions</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sedo eiusmod tempor incididunt dolore.</p>
            </div>
            </div>
            <div class="single-sl-slide">
            <img src="{{ asset('app/images/mac.png') }}" alt="">
            <div class="content-box">
                <h2>All In One Transfer Solutions</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sedo eiusmod tempor incididunt dolore.</p>
            </div>
            </div>
            <div class="single-sl-slide">
            <img src="{{ asset('app/images/mac.png') }}" alt="">
            <div class="content-box">
                <h2>All In One Transfer Solutions</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sedo eiusmod tempor incididunt dolore.</p>
            </div>
            </div>
        </div>


        <div class="sl-form-wrap bg-light p-3">
            <header>
            <a href="#" class="logo">
                <img src="{{ asset('app/images/logo-2.png') }}" alt="">
            </a>
            <a href="#" class="mbl-menu-toggler">
                <i class="fas fa-align-left"></i>
            </a>
            </header>
            
            <div class="content-box">
            <h3 class="text-dark">Overview</h3>
            </div>


            <div class="p-1 p-lg-3 bg-white border">
                <div class="row faq-tab">
                    <div class="col-md-12 m-auto">
                        <ul class="row nav nav-tabs">
                            <li class="col-md-6">
                                <a class="active p-2" data-toggle="tab" href="#general-qs">
                                    Transition details
                                </a>
                            </li>
                            <li class="col-md-6">
                                <a class="p-2" data-toggle="tab" href="#trasn-money">
                                    Send details
                                </a>
                            </li>
                        </ul>

                        <hr class="row">

                        <div class="tab-content">
                            <div id="general-qs" class="tab-pane fade in active show">

                                @if(session()->has('order_exist'))
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Remember!</strong> {{ session('order_exist') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                <div class="accordion" id="accordion">
                                    <div class="accordion-item">
                                        <h5 class="collapsed text-danger" data-toggle="collapse" data-target="#faq-1" aria-expanded="true">
                                            Tranfert in process
                                        </h5>
                                        <div id="faq-1" class="collapse show mt-4" data-parent="#accordion">
                                            <div class="acr-body">
                                                <div class="currency-form-v2">

                                                    <h5 class="text-uppercase text-info col-lg-12 mb-4">Estimated Total Cost</h5>

                                                    <div class="col-lg-6 mb-3">
                                                        <h6>Country receive</h6>
                                                        <p class="country-receive">{{$order->country}}</p>
                                                    </div>

                                                    <div class="col-lg-6 mb-3">
                                                        <h6>Amount send</h6>
                                                        <p class="amount-send">{{$order->amount_send.' '.$order->devise_send}}</p>
                                                    </div>

                                                    <div class="col-lg-6 mb-3">
                                                        <h6>Amount receive</h6>
                                                        <p class="amount-receive">{{$order->amount_receive.' '.$order->devise_receive}}</p>
                                                    </div>

                                                    <div class="col-lg-6 mb-3">
                                                        <h6 class="font-weight-bold">Total to pay</h6>
                                                        <p class="amount-total">{{$order->total.' '.$order->devise_send}}</p>

                                                        <p class="text-danger">Amount with fees*</p>
                                                    </div>

                                                    <form method="post" action="{{ route('currencyconverter.destroy', ['currency_id' => $order->id]) }}" style="display: inline-block" onsubmit="return confirm('DO YOU REALLY WANT TO DELETE ? ')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger">DELETE</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="collapsed" data-toggle="collapse" data-target="#faq-2" aria-expanded="false">
                                            Input Wallet Informations
                                        </h5>

                                        <div id="faq-2" class="collapse" data-parent="#accordion">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Banner section start -->
    <section class="banner v3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-auto">
                    <div class="ban-content text-center">
                        <h1>Money Transfer Service <br> World Wide</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspe ultrices gravida. <br> Risus commodo viverra maecenas .</p>
                    </div>


                    @if(session()->has('order_exist'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Remember!</strong> {{ session('order_exist') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="currency-form-v2">

                        <h4 class="text-uppercase text-info">Total recapitulatif</h4>

                        <div class="col-lg-3 mb-3">
                            <p>Country receive</p>
                            <h4 class="country-receive">{{$order->country}}</h4>
                        </div>

                        <div class="col-lg-3 mb-3">
                            <p>Amount send</p>
                            <h4 class="amount-send">{{$order->amount_send.' '.$order->devise_send}}</h4>
                        </div>

                        <div class="col-lg-3 mb-3">
                            <p>Amount receive</p>
                            <h4 class="amount-receive">{{$order->amount_receive.' '.$order->devise_receive}}</h4>
                        </div>

                        <div class="col-lg-3 mb-3">
                            <p class="font-weight-bold">Total to pay</p>
                            <h4 class="amount-total">{{$order->total.' '.$order->devise_send}}</h4>

                            <p>Amount with fees*</p>
                        </div>

                        <form method="post" action="{{ route('currencyconverter.destroy', ['currency_id' => $order->id]) }}" style="display: inline-block" onsubmit="return confirm('DO YOU REALLY WANT TO DELETE ? ')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">DELETE</button>
                        </form>
                    </div>


                    <!-------------------------------------->
                </div>

            </div>

            <h3 class="mt-4 text-dark">The payment process</h3>

            <div class="row">
                <div class="col-md-6">

                    <form method="post" action="{{ route('checkout.store') }}" id="payment-form" class="my-5">

                        @csrf

                        <div id="card-element">
                            <!-- Elements will create input elements here -->
                        </div>

                        <!-- We'll put the error messages in this element -->
                        <div id="card-errors" role="alert"></div>

                        <button class="btn btn-success mt-4" id="submit">Proceed to payment ( {{$order->total.' '.$order->devise_send}} )</button>
                    </form>

                </div>
            </div>


        </div>
    </section>


@stop
