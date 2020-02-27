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

                    @if(session()->has('thanks'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Thanks!</strong> {{session('thanks')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <!-----------------second step--------------------->

                    <div class="currency-form-v2">


                        <h4 style="text-align:center" class="text-uppercase text-info">Thanks !</h4>

                        <p> Your order has been successfully processed.</p>

                        <hr/>

                        <button class="btn btn-outline-primary"><a href="{{ route('currencyconverter.index') }}">Continuer vers la boutique</a> </button>
                    </div>


                    <!-------------------------------------->
                </div>

            </div>




        </div>
    </section>


    <script>

@stop
