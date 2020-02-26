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

            <div id="content-ajax-loader"></div>

            <form class="" action="{{ route('currencyconverter.store') }}" method="post" id="currency-form-v2">

                @csrf
                <!-------------------------------------->
                <div class="currency-form-v2">
                    <h4>Send Money</h4>
                    <div class="col-lg-4 mb-3">
                        <label for="country">Send to</label>
                        <select name="country" class="custom-select custom-select-lg" id="country">
                            <option value="" selected>Where?</option>
                            <option value="cotonou">Cotonou, BENIN</option>
                            <option value="calavi">Calavi, BENIN</option>
                            <option value="lome">Lome, TOGO</option>
                        </select>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label for="amount-send">Send Amount</label>
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg" id="amount-send" aria-describedby="currencysend" placeholder="$500.00" disabled>
                            <div class="input-group-append">
                                <select class="custom-select custom-select-lg" id="devise-send" disabled="disabled">
                                    @foreach($default_currency as $key => $currency)
                                        <option value="{{ $key }}">{{ $currency }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <small class="error text-danger text-center d-none">Send amount must be between 1 and 500</small>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label for="amount-receive">Receive Amount</label>
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg" id="amount-receive" aria-describedby="currencyget" disabled>
                            <div class="input-group-append">
                            <span class="input-group-text" id="device-receive">XOF</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-field col-lg-4 offset-lg-4 mt-5">
                        <button class="btn btn-block btn-filled form-btn" disabled>
                            <span class="bh"></span> <span >Continue <i class="fas fa-arrow-right"></i></span>
                        </button>
                    </div>
                </div>
                
                 <!-----------------second step--------------------->

                 <div class="currency-form-v2">
                    <h4>Total recapitulatif</h4>
                    <div class="col-lg-3 mb-3">
                        <p>Country receive</p>
                        <h4>data</h4>
                    </div>
                    
                    <div class="col-lg-3 mb-3">
                        <p>Amount send</p>
                        <h4>amount+currency</h4>
                    </div>

                    <div class="col-lg-3 mb-3">
                        <p>Amount receive</p>
                        <h4>amount+currency</h4>
                    </div>

                    <div class="col-lg-3 mb-3">
                        <p class="font-weight-bold">Total to pay</p>
                        <h4>amount+currency</h4>
                        <p>Amount with fees*
                    </div>

                    <div class="form-field col-lg-6 offset-lg-3">
                        <div class="row">
                            <button class="btn btn-group col-4 mr-5  btn-filled form-btn">
                                <span class="bh"></span> <span><i class="fas fa-arrow-left"></i> Back</span>
                            </button>

                            <button class="btn btn-group col-6  btn-filled form-btn">
                                <span class="bh"></span> <span >Continue transfert <i class="fas fa-arrow-right"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-------------------------------------->
            </form>

        </div>
    </div>
    </div>
</section>


<script src="{{ asset('app/js/currency.js') }}"></script>

@stop
