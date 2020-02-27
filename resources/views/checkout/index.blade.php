@extends('layouts.default', ['title' => 'Checkout'])

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


                    @if(session()->has('order_exist'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Remember!</strong> {{ session('order_exist') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                @endif
                    <!-----------------second step--------------------->

                    <div class="currency-form-v2">

                        <h4 align="center" class="text-uppercase text-info">Total recapitulatif</h4>

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
