@extends('layouts.default', ['title' => 'Checkout'])

@section('content')

    <div class="signup-login w-100">
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
                                                <div class="currency-form-v2 pb-lg-4">

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

                                                    <div class="col-lg-12 bg-light py-2 mb-3 text-center">Exchange rate: 1.00 <span class="font-weight-bold">USD</span> = <span>{{ round($order->exchange, 3) }}</span> <span class="font-weight-bold">XOF</span></div>

                                                    <div class="col-lg-12">
                                                        <div class="mx-auto">
                                                            <button class="btn btn-group btn-primary btn-round py-3" data-toggle="collapse" data-target="#faq-2" aria-expanded="false">Complete Payment</button>

                                                            <form  method="post" action="{{ route('currencyconverter.destroy', ['currency_id' => $order->id]) }}" style="display: inline-block" onsubmit="return confirm('DO YOU REALLY WANT TO DELETE ? ')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-group btn-danger btn-round py-3">DELETE</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="accordion-item">
                                        <h5 class="collapsed" data-toggle="collapse" data-target="#faq-2" aria-expanded="false">
                                        The payment process
                                        </h5>

                                        <div id="faq-2" class="collapse" data-parent="#accordion">
                                            <div class="acr-body">
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



    <script src="https://js.stripe.com/v3/"></script>

    <script>



        var stripe = Stripe('pk_test_s36fs1t0WNrrilrEn8crHSQw00xMg9I8mk');
        var elements = stripe.elements();

        var style = {
            base: {
                color: "#32325d",
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: "antialiased",
                fontSize: "16px",
                "::placeholder": {
                    color: "#aab7c4"
                }
            },
            invalid: {
                color: "#fa755a",
                iconColor: "#fa755a"
            }

        };

        var card = elements.create("card", { style: style });
        card.mount("#card-element");

        card.addEventListener('change', ({error}) => {
            const displayError = document.getElementById('card-errors');
            if (error) {

                displayError.classList.add('alert', 'alert-warning');
                displayError.textContent = error.message;

            } else {

                displayError.classList.remove('alert', 'alert-warning');
                displayError.textContent = '';
            }
        });


        var form = document.getElementById('payment-form');
        var submitButton = document.getElementById('submit');

        form.addEventListener('submit', function(ev) {
            ev.preventDefault();

            submitButton.removeAttribute('disabled');

            stripe.confirmCardPayment("{{ $client_secret }}", {
                payment_method: {
                    card: card,
                }
            }).then(function(result) {
                if (result.error) {

                    submitButton.setAttribute('disabled', 'disabled');
                    // Show error to your customer (e.g., insufficient funds)
                    console.log(result.error.message);
                } else {

                    submitButton.setAttribute('disabled', 'disabled');

                    // The payment has been processed!
                    if (result.paymentIntent.status === 'succeeded') {

                        var paymentIntent = result.paymentIntent;
                        var url           = form.action;
                        var token         = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                        var redirect = "thanks";

                        fetch(
                            url,
                            {
                                headers: {
                                    "Content-Type":"application/json",
                                    "Accept":"application/json, text-plain, */*",
                                    "X-Requested-With":"XMLHttpRequest",
                                    "X-CSRF-TOKEN": token
                                },
                                method: "POST",
                                body: JSON.stringify({
                                    paymentIntent: paymentIntent
                                }),
                            }
                        ).then(data => {

                            window.location.href = redirect;

                        }).catch(error => {
                            alert('ok')
                        })
                    }
                }
            });
        });

    </script>


@stop
