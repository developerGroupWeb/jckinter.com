@extends('layouts.default', ['title' => 'dashboard'])

@section('content')

<div class="dashboard-bg-custom" style="height: 100vh;">
    <div class="container shadow-lg bg-light " style="border: 30px solid #E5E5E5; border-radius: 25px; height: 100vh;">
        <nav class="navbar navbar-expand-lg navbar-light bg-white row">
            <a class="navbar-brand" href="">Welcome, {{ session()->get('currency_user')['full_name'] }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>



            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav nav-pills ml-auto" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Overview</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Send details</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Help/Contact</a>
                    </li>-->
                </ul>

                <a href="{{ route('logout', ['language' => app()->getLocale()]) }}" class="btn-dark rounded py-2 px-3 ml-auto"><span class="bh"></span> <span>Log out</span></a>
                <a href="{{ route('home.index', ['language' => app()->getLocale()]) }}" class="btn-primary rounded py-2 px-3 ml-4"><span class="bh"></span> <span><i class="fas fa-home"></i> Go to home</span></a>
            </div>
        </nav>

        <div class="tab-content py-4 px-md-5 row" id="pills-tabContent">

            @if(session()->has('order_exist'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Remember!</strong> {{ session('order_exist') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

                <div id="tooltip" style=" margin: -22px 331px; position: absolute"></div>


            <div class="tab-pane fade show active col-12" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <h5>Overview</h5>
                <div class="p-4 bg-white rounded border" style="height: 500px; overflow: auto;">
                    <h5>Transition details</h5>

                    <div class="accordion" id="accordion">
                        <div class="accordion-item" id="accordion-item-tempo"><!-------->
                            <h5 class="collapsed {{ (($order) ? 'text-danger' : '') }}" data-toggle="collapse" id="transfer-in-process" data-target="#faq-1" aria-expanded="true">
                                Transfer in process
                            </h5>

                            @if($order)

                            <div id="faq-1" class="collapse show mt-4" data-parent="#accordion">
                                <div class="acr-body">
                                    <div class="currency-form-v2 px-0 pb-lg-4 border rounded">

                                        <h5 class="text-uppercase text-center col-lg-12 mb-4">Estimated Total Cost</h5>

                                        <div class="col-lg-3 mb-3">
                                            <div class="row">
                                                <h6 class="col-6 col-lg-12">Country receive</h6>
                                                <p class="col-6 col-lg-12 country-receive">{{ $order->country }}</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-3">
                                            <div class="row">
                                                <h6 class="col-6 col-lg-12">Amount send</h6>
                                                <p class="col-6 col-lg-12 amount-send">{{$order->amount_send.' '.$order->devise_send}}</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-3">
                                            <div class="row">
                                                <h6 class="col-6 col-lg-12">Amount receive</h6>
                                                <p class="col-6 col-lg-12 amount-receive">{{$order->amount_receive.' '.$order->devise_receive}}</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-3">
                                            <div class="row">
                                                <h6 class="col-6 col-lg-12 font-weight-bold">Total to pay</h6>
                                                <p class="col-6 col-lg-12 amount-total">{{$order->total.' '.$order->devise_send}}</p>
                                            </div>
                                            <p class="text-danger">Amount with fees*</p>
                                        </div>

                                        <div class="col-lg-6 bg-light py-2 mb-3 text-center">Exchange rate: 1.00 <span class="font-weight-bold">{{ $order->devise_send }}</span> = <span>{{ round($order->exchange, 3) }}</span> <span class="font-weight-bold">XOF</span></div>
                                        <div class="col-lg-6 bg-light py-2 mb-3 text-center"><span class="font-weight-bold">{{ $order->fees.' '.$order->devise_send}}</span> <span>transfer fees</span></div>

                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="mx-auto">
                                                    <button class="btn-primary rounded px-2" data-toggle="collapse" data-target="#faq-2" id="first-btn-continue" aria-expanded="false">Continue</button>

                                                    <form  method="post" action="{{ route('currencyconverter.destroy', ['language' => app()->getLocale(),'currency_id' => $order->id]) }}" style="display: inline-block" onsubmit="return confirm('DO YOU REALLY WANT TO DELETE ? ')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn-danger rounded px-2 ml-5">DELETE</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>

                        <div class="accordion-item">
                            <h5 class="collapsed" data-toggle="collapse"  id="receiver-details" data-target="#faq-2" aria-expanded="false">
                            Receiver details
                            </h5>

                            @if($order)

                            <div id="faq-2" class="collapse" data-parent="#accordion">
                                <div class="acr-body">

                                    <form method="post" action="{{ route('user.receiver.update', ['language' => app()->getLocale()]) }}" enctype="multipart/form-data" id="form-receive-details" class="" data-picture="{{route('photo.receiver', ['language' => app()->getLocale()])}}">
                                        @csrf
                                        <div class="card mb-3">
                                            <div class="row no-gutters">
                                                <div class="col-lg-4">
                                                    <div class="row my-3">
                                                        <div class="mx-auto">
                                                            <input type="file" name="file" id="file" class="inputfile" />
                                                            <label for="file">Choose receiver photo</label>
                                                        </div>
                                                    </div>

                                                    <div class="mx-3
                                                    " id="r-photo"><img src="{{ $order->photo ? asset($order->photo) : '' }}" alt="" class="img-fluid"></div>
                                                </div>


                                                <div class="col-lg-8">
                                                    <div class="card-body">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                            <label for="r-name">Name</label>
                                                            <input type="text" name="r-name" class="form-control" id="r-name" value="{{ (isset($order->name)? $order->name : '') }}">
                                                                <span class="invalid-feedback error-name"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                            <label for="r-surname">Surname</label>
                                                            <input type="text" name="r-surname" class="form-control" id="r-surname" value="{{(isset($order->surname) ? $order->surname : '')}}">
                                                                <span class="invalid-feedback error-surname"></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="r-address">Address</label>
                                                            <input type="text" name="r-address" class="form-control" id="r-address" value="{{ (isset($order->address) ? $order->address : '') }}">
                                                            <span class="invalid-feedback error-address"></span>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="r-phone">Phone number</label>
                                                                <input type="text" name="r-phone" class="form-control" id="r-phone" value="{{ (isset($order->phone) ? $order->phone : '') }}">
                                                                <span class="invalid-feedback error-phone"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                            <label for="r-year">Year of birth</label>
                                                            <input type="text" name="r-year" class="form-control" id="r-year" value="{{ (isset($order->year) ? $order->year : '') }}">
                                                                <span class="invalid-feedback error-year"></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="question">Secret question</label>
                                                                <select id="question" name="question" class="form-control">
                                                                    <option value="">Choose a question</option>
                                                                    <option value="1" {{ ((isset($order->question) && 1 == $order->question) ? "selected='selected'" : '') }}>1</option>
                                                                    <option value="2" {{ ((isset($order->question) && 2 == $order->question) ? "selected='selected'" : '') }}>2</option>
                                                                    <option value="3" {{ ((isset($order->question) &&  $order->question == 3) ? "selected='selected'" : '') }}>3</option>
                                                                </select>
                                                                <span class="invalid-feedback error-question"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                            <label for="q-answer">Your answer</label>
                                                            <input type="text" name="q-answer" class="form-control" id="q-answer" value="{{ (isset($order->answer) ? $order->answer : '') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    <button class="btn-primary px-3" id="second-btn-continue">Continue</button>
                                    </form>
                                </div>
                            </div>
                            @endif
                        </div>


                        <div class="accordion-item">
                            <h5 class="collapsed" data-toggle="collapse" id="payment-process" data-target="#faq-3" aria-expanded="false">
                            Payment process
                            </h5>

                            @if(($order))
                            <div id="faq-3" class="collapse" data-parent="#accordion">
                                <div class="acr-body">

                                    <form method="post" action="{{ route('checkout.update', ['language' => app()->getLocale()]) }}" id="payment-form" class="my-5">

                                        @csrf

                                        @method('PUT')

                                    <div id="card-element">
                                        <!-- Elements will create input elements here -->
                                    </div>

                                    <!-- We'll put the error messages in this element -->
                                    <div id="card-errors" class="text-danger font-italic" role="alert"></div>

                                    <button class="btn btn-primary mt-4" id="submit">Pay {{$order->total.' '.$order->devise_send}}</button>
                                    </form>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade col-12" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">


                <h5>Sending history</h5>



                <div class="p-4 bg-white rounded border" style="height: 550px; overflow: auto;">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Date</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Receiver</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($order_active as $order)
                            <tr>
                                <th scope="row">{{ $order->track_order }}</th>
                                <td>{{ $order->payment_created_at->format ('d/m/Y H:i:s') }}</td>
                                <td>{{$order->amount_send.' '.$order->devise_send}}</td>
                                <td>{{ strtoupper($order->name).' '.$order->surname }}</td>
                                <td>{!! $order->processing ? '<span class="text-success">Done</span>' : '<span class="text-danger">Pending</span>' !!} </td>
                                <td><button class="btn-primary px-2 rounded">Resend</button></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>



        </div>

    </div>
</div>

<script src="https://js.stripe.com/v3/"></script>
<script>
    //var key  = "'{{ $key }}'";

    var stripe = Stripe('pk_test_9imYEL8mumJEeTOnMQ6TWJ8C00tI1lkhDN');
    var elements = stripe.elements();

    var style = {
        base: {
            color: "#32325d",
            fontFamily: '"Raleway", Helvetica, sans-serif',
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

    var form = document.getElementById('payment-form');
    var submitButton = document.getElementById('submit');
    const displayError = document.getElementById('card-errors');

    var card = elements.create("card", { style: style });
    card.mount("#card-element");

    card.addEventListener('change', ({error}) => {

        if (error) {

            displayError.textContent = error.message;
            submitButton.setAttribute('disabled', 'disabled');

        } else {

            displayError.textContent = '';
            submitButton.removeAttribute('disabled');
        }
    });




    form.addEventListener('submit', function(ev) {
        ev.preventDefault();

        //submitButton.removeAttribute('disabled');

        stripe.confirmCardPayment("{{ $client_secret ?? '' }}", {
            payment_method: {
                card: card,
            }
        }).then(function(result) {
            if (result.error) {

                submitButton.setAttribute('disabled', 'disabled');
                // Show error to your customer (e.g., insufficient funds)
                displayError.textContent = (result.error.message);

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
                            method: "PUT",
                            body: JSON.stringify({
                                paymentIntent: paymentIntent
                            }),
                        }
                    ).then(data => data.json())
                        .then(data => {

                            //console.log(data);
                            window.location.href = redirect;

                    }).catch(error => {
                        console.log(error)
                    })
                }
            }
        });
    });


</script>

<script src="{{ asset('app/js/dashboard.js') }}"></script>

@include('css.style')

@stop
