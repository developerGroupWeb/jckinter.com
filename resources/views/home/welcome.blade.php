@extends('layouts.default', ['title' => 'Current Converter'])

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


            <form class="currency-form-v2" action="#">
                <!----------------firt step---------------------->
                <div class="">

            <div id="content-ajax-loader"></div>

            @if(session()->has('delete'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Thanks!</strong> {{session('delete')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <form action="{{ route('currencyconverter.store') }}" method="post" id="currency-form-v2">

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
                        <button class="btn btn-block btn-filled form-btn" id="continue" disabled>
                            <span class="bh"></span> <span >Continue <i class="fas fa-arrow-right"></i></span>
                        </button>
                    </div>
                </div>

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




@include('layouts.footer')


@stop
