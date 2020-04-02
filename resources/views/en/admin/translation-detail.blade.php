@extends('layouts.default', ['title' => 'translation detail'])

@section('content')



<div class="main-content">

    @include('layouts.admin-topbar')


    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body py-5">

            </div>
        </div>
    </div>

    <div class="container-fluid mt--6">
        <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <!-- Card header -->
                                <div class="card-header border-0">
                                    <h3 class="mb-0">Order list</h3>
                                </div>

                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="list-content px-md-5">
                                            <h3 class="admin-heading bg-offwhite">
                                                <p>Transaction details</p>
                                            </h3>

                                            <div class="row px-3">
                                                <div class="col-12 col-sm">
                                                    <div class="content-area">
                                                        <b>Receiver Data</b>
                                                        <p class="name">{{$order->name}}</p>
                                                        <p class="surname">{{$order->surname}}</p>
                                                        <p class="">{{$order->address}}</p>
                                                        <p>{{$order->phone}}</p>
                                                        <p>{{$order->year}}</p>
                                                        <p><span>{{$order->question}}</span> : <span>{{$order->answer}}</span></p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm">
                                                    <div class="content-area text-right">
                                                        <div class="price mt-sm-5">
                                                            <b>Amount</b>
                                                            <p class="order-amount"><span>XOF</span>{{$order->amount_receive}}</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 offset-md-3 offset-lg-0">
                                        <div class="p-3">
                                            <img class="img-fluid" src="{{ asset($order->photo) }}" alt="photo">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="list-content px-md-5">
                                            <h3 class="admin-heading bg-offwhite">
                                                <p>Transaction details</p>
                                            </h3>

                                            <div class="row px-3">
                                                <div class="col-12 col-sm">
                                                    <div class="content-area">
                                                        <b>Sender Data</b>
                                                        <p class="name">{{$order->name}}</p>
                                                        <p class="surname">{{$order->surname}}</p>
                                                        <p class="country">{{$order->address}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm">
                                                    <div class="content-area text-right">
                                                        <div class="price mt-sm-5">
                                                            <b>Amount</b>
                                                            <p class="order-amount"><span>USD ou autres</span>{{$order->amount_receive}}</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-footer mt-3 bg-offwhite p-3 card-footer">
                                    <div class="row">
                                        <div class="col">
                                            <div class="invoice-option  btn-refund text-center my-4">
                                                <a href="#" class="invoice-btn btn"><i class="far fa-file-pdf"></i> Save as PDF</a>
                                                <a href="#" class="invoice-btn btn"><i class="fas fa-print"></i> Print Receipt</a>
                                                <a href="#" class="invoice-btn btn"><i class="far fa-envelope"></i> Email Receipt</a>
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
</div>


<style>
.admin-heading {
   display: block;
   margin-bottom: 15px;
   padding: 10px 15px;
   border-left: 10px solid #154abd;
   font-size: 20px;
   -webkit-box-shadow: 0 5px 10px rgba(24, 33, 99, 0.1);
           box-shadow: 0 5px 10px rgba(24, 33, 99, 0.1);
   background: #f7faff;
   position: relative;
   font-weight: 300;
 }

 .admin-heading:before {
   position: absolute;
   content: '';
   width: 100%;
   height: 100%;
   display: block;
   top: 0;
   left: 0;
   border: 1px solid #edebeb;
 }

 .admin-heading p {
   margin: 0;
   padding: 0;
   font-weight: 700;
 }

 .admin-heading span {
   font-size: 12px;
   color: #6c6c6f;
 }

 .admin-heading a {
   font-size: 14px;
   float: right;
   margin-top: 5px;
   position: relative;
 }

    .list-content {
   padding: 0;
   display: block;
   position: relative;
 }

 .transaction-title {
   display: block;
   font-weight: 700;
 }

 .transaction-title .items {
   margin-bottom: 5px;
   padding: 10px;
   -webkit-transition: all 300ms ease-in-out;
   transition: all 300ms ease-in-out;
   border-radius: 5px;
   -webkit-box-shadow: 0 5px 10px rgba(24, 33, 99, 0.1);
           box-shadow: 0 5px 10px rgba(24, 33, 99, 0.1);
   border: 1px solid #edebeb;
 }

 .transaction-area .items {
   border: 1px solid #edebeb;
   -webkit-box-shadow: 0 5px 10px rgba(24, 33, 99, 0.1);
           box-shadow: 0 5px 10px rgba(24, 33, 99, 0.1);
   margin-bottom: 15px;
   padding: 10px;
   -webkit-transition: all 300ms ease-in-out;
   transition: all 300ms ease-in-out;
   border-radius: 5px;
 }

 .transaction-area .items a {
   color: #888888;
 }

 .transaction-area .items:first-child {
   border-radius: 0 0 5px 5px;
 }

 .transaction-area .items:hover {
   background: linear-gradient(89deg, #154abd 0.1%, #1a8ad3 51.5%, #48b1ea 100.2%);
   color: #fff;
 }

 .transaction-area .items:hover a {
   color: #fff;
 }

 .price p {
   font-size: 34px;
   margin-top: 5px;
 }

</style>
@stop
