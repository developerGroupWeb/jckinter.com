@extends('layouts.default', ['title' => 'dashboard'])

@section('content')

<div class="dashboard-bg-custom" style="height: 100vh;">
    <div class="container shadow-lg bg-light" style="border: 30px solid #E5E5E5; border-radius: 25px; height: 100vh;">
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
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Help/Contact</a>
                    </li>
                </ul>

                <a href="{{ route('logout') }}" class="btn-dark rounded py-2 px-3 ml-auto"><span class="bh"></span> <span>Log out</span></a>
                <a href="{{ route('home.index') }}" class="btn-primary rounded py-2 px-3 ml-4"><span class="bh"></span> <span><i class="fas fa-home"></i> Go to home</span></a>
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


            <div class="tab-pane fade show active col-12" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <h5>Overview</h5>
                <div class="p-4 bg-white rounded border" style="height: 550px; overflow: auto;">
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
                                        <div class="col-lg-6 bg-light py-2 mb-3 text-center"><span class="font-weight-bold">{{ $order->fees }} $</span> <span>transfer fees</span></div>

                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="mx-auto">
                                                    <button class="btn-primary rounded py-2 px-3" data-toggle="collapse" data-target="#faq-2" id="first-btn-continue" aria-expanded="false">Continue</button>

                                                    <form  method="post" action="{{ route('currencyconverter.destroy', ['currency_id' => $order->id]) }}" style="display: inline-block" onsubmit="return confirm('DO YOU REALLY WANT TO DELETE ? ')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn-danger rounded py-2 px-3 ml-5">DELETE</button>
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

                                    <form method="post" action="{{ route('user.receiver') }}" enctype="multipart/form-data" id="form-receive-details" class="" data-picture="{{route('photo.receiver')}}">
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

                                                    <div class="mx-3 border rounded" style="height: 300px;" id="r-photo"><img src="{{ 'http://127.0.0.1/jckinter.com/storage/app/photo_receivers/'.(isset($photo_receiver->name) ? $photo_receiver->name : '')}}" alt=""></div>
                                                </div>


                                                <div class="col-lg-8">
                                                    <div class="card-body">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                            <label for="r-name">Name</label>
                                                            <input type="text" name="r-name" class="form-control" id="r-name">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                            <label for="r-surname">Surname</label>
                                                            <input type="text" name="r-surname" class="form-control" id="r-surname">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="r-address">Address</label>
                                                            <input type="text" name="r-address" class="form-control" id="r-address">
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="r-phone">Phone number</label>
                                                                <input type="text" name="r-phone" class="form-control" id="r-phone">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                            <label for="r-year">Year of birth</label>
                                                            <input type="text" name="r-year" class="form-control" id="r-year">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="question">Secret question</label>
                                                                <select id="question" name="question" class="form-control">
                                                                    <option value="">Choose a question</option>
                                                                    <option value="1">...</option>
                                                                    <option value="2">...</option>
                                                                    <option value="3">...</option>
                                                                    <option value="4">...</option>
                                                                    <option value="5">...</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                            <label for="q-answer">Your answer</label>
                                                            <input type="text" name="q-answer" class="form-control" id="q-answer">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    <button class="btn btn-primary" id="second-btn-continue">Continue</button>
                                    </form>
                                </div>
                            </div>
                            @endif
                        </div>


                        <div class="accordion-item">
                            <h5 class="collapsed" data-toggle="collapse" id="payment-process" data-target="#faq-3" aria-expanded="false">
                            Payment process
                            </h5>

                            @if($order)
                            <div id="faq-3" class="collapse" data-parent="#accordion">
                                <div class="acr-body">
                                    <form method="post" action="" id="payment-form" class="my-5">
                                        @csrf
                                    <div id="card-element">
                                        <!-- Elements will create input elements here -->
                                    </div>

                                    <!-- We'll put the error messages in this element -->
                                    <div id="card-errors" role="alert"></div>

                                    <button class="btn btn-primary mt-4" id="last-btn-continue"></button>
                                    </form>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-pane fade col-12" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <h5>Send details</h5>
                <div class="p-4 bg-white rounded border" style="height: 550px; overflow: auto;">
                <div class="accordion" id="accordion">
                        <div class="accordion-item" id="accordion-item-tempo"><!-------->
                            <h5 class="collapsed text-danger" data-toggle="collapse" data-target="#faq-1" aria-expanded="true">
                                Tranfert in process
                            </h5>
                            <div id="faq-1" class="collapse mt-4" data-parent="#accordion">
                                <div class="acr-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque non nesciunt delectus labore repellat? Asperiores error voluptatibus libero quidem dolorum ipsum qui molestias quam. Porro numquam perferendis provident veniam iure?
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-pane fade col-12" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <h5>Need help? Contact us!</h5>
                <div class="p-4 bg-white rounded border" style="height: 550px; overflow: auto;">
                    <form method="post" action="" id="user-contact-form" class="">
                        @csrf
                        <div class="form-group">
                            <label for="message">Send us message</label>
                            <textarea class="form-control" id="message" rows="5"></textarea>
                        </div>

                        <button class="btn btn-primary mt-4" id="submit">Send</button>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<script>


</script>

@stop
