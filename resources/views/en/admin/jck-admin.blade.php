@extends('layouts.default', ['title' => 'jck-admin'])

@section('content')


<div class="main-content">

@include('layouts.admin-topbar')

<div class="header py-6" style="background-color: #d10936;">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Total traffic</h5>
                                    <span class="h2 font-weight-bold mb-0">350,897</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                        <i class="ni ni-active-40"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Total users</h5>
                                    <span class="h2 font-weight-bold mb-0">2,356</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                        <i class="ni ni-chart-pie-35"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Total Orders</h5>
                                    <span class="h2 font-weight-bold mb-0">924</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                        <i class="ni ni-money-coins"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
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
                        <div class="table-responsive">



                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="name">Order ID</th>
                                        <th scope="col" class="sort" data-sort="budget">Amount</th>
                                        <th scope="col" class="sort" data-sort="status">Status</th>
                                        <th scope="col">customer name</th>
                                        <th scope="col" class="sort" data-sort="completion">Completion</th>
                                        <th scope="col">Change Status</th>
                                    </tr>
                                </thead>
                                <tbody class="list">

                                @if(count($orders) > 0)

                                    @foreach($orders as $order)
                                        <tr id="{{$order->track_order}}">
                                            <th scope="row">
                                                <div class="align-items-center font-weight-bold">
                                                    ID <span class="name mb-0 text-sm">{{$order->track_order}}</span>
                                                </div>
                                            </th>
                                            <td class="budget">
                                                {{$order->amount_send.' '.$order->devise_send}}
                                            </td>
                                            <td>
                                                <span class="badge badge-dot mr-4" id="status-order">
                                                    {!! check_status($order->track_order) !!}
                                                </span>
                                            </td>
                                            <td>
                                                <div class="align-items-center">
                                                    <span class="name mb-0 text-sm">{{ strtoupper($order->name).' '.$order->surname }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="completion mr-2">0%</span>
                                                    <div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a class="btn btn-sm btn-icon-only text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v "></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" data-action="{{route('status.order.update', ['language' => app()->getLocale()])}}">
                                                        <a class="dropdown-item" href="#" id="prepared-{{$order->track_order}}">prepared</a>
                                                        <a class="dropdown-item" href="#" id="on the way-{{$order->track_order}}">On the way</a>
                                                        <a class="dropdown-item" href="#" id="completed-{{$order->track_order}}">Completed</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif

                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!-- Pagination -->
                    <ul class="pagination justify-content-center mt-4 pt-4 pl-0">
                        {{ $orders->links() }}
                    </ul>
                    <!-- Paginations end -->
                </div>

            </div>
        </div>
    </div>
</div>

    <script src="{{asset('app/js/jck-admin.js')}}"></script>
@stop
