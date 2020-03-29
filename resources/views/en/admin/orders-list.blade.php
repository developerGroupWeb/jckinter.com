@extends('layouts.default', ['title' => 'orders lists'])

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

                            <!-- All Transactions  -->
                            <div class="list-content">

                            <!-- Admin Heading Title  -->
                            <div class="transaction-title bg-offwhite">
                                <div class="items">
                                    <div class="row">
                                        <div class="col">ID Order</div>
                                        <div class="col"><span class="">Customer name</span></div>
                                        <div class="col">Shipping</div>
                                        <div class="col text-right">Amount</div>
                                    </div>
                                </div>

                                <!-- Admin Heading Title End -->

                                <!-- Transaction List -->
                                @foreach($orders as $order)
                                <div class="transaction-area">
                                    <div class="items">
                                        <a href="{{route('admin.translation.detail.index', ['language' => app()->getLocale(), 'track_order' => $order->track_order])}}">
                                            <div class="row">
                                                <div class="col pay-date">
                                                    <span class="order-id">{{$order->track_order}}</span>
                                                </div>
                                                <div class="col">
                                                    <span class="name">{{$order->name. ' '.$order->surname}}</span>
                                                </div>
                                                <div class="col">
                                                    <span class="location">shipping location</span>
                                                </div>
                                                <div class="col text-right">
                                                    <span class="payment-amaount">{{ $order->amount_receive }}</span>
                                                    <span class="currency">(XOF)</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                                <!-- Transaction List End -->
                            </div>

                            <!-- Pagination -->
                            <ul class="pagination justify-content-center mt-4 pt-4 pl-0">
                                {{ $orders->links() }}
                            </ul>
                            <!-- Paginations end -->

                            </div>
                            <!-- All Transactions End -->

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
   /* Cards & Bank Accounts*/
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

</style>

@stop
