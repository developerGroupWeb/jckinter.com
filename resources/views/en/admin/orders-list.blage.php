@extends('layouts.default', ['title' => 'create user'])

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
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <!-- All Transactions  -->
                    <div class="profile-content">
                       
                        <!-- Admin Heading Title  -->
                        <div class="transaction-title bg-offwhite">
                                <div class="items">
                                    <div class="row">
                                        <div class="col"><span class="">Date</span></div>
                                        <div class="col">Description</div>
                                        <div class="col text-center">Status</div>
                                        <div class="col text-center">Fee</div>
                                        <div class="col">Amount</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Admin Heading Title End -->

                            <!-- Transaction List -->
                            <div class="transaction-area">
                                <div class="items">
                                    <a href="transactions-details.html">
                                        <div class="row">
                                            <div class="col pay-date">
                                                <span class="date">17</span>
                                                <span class="pay-month">Jan</span></div>
                                            <div class="col">
                                                <span class="name">Withdraw Via DBBL Bank</span></div>
                                            <div class="col text-center">
                                                <span class="payments-status text-warning" ><i class="fas fa-ellipsis-h" data-toggle="tooltip" data-original-title="In Progress"></i></span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">- $0.2</span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">- $342</span>
                                                <span class="currency">(USD)</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="items">
                                    <a href="transactions-details.html">
                                        <div class="row">
                                            <div class="col pay-date">
                                                <span class="date">15</span>
                                                <span class="pay-month">APR</span></div>
                                            <div class="col">
                                                <span class="name">Payment Received From Envato </span></div>
                                            <div class="col text-center">
                                                <span class="payments-status text-success" ><i data-toggle="tooltip" data-original-title="Completed" class="fas fa-check-circle"></i></span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">- $0.2</span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">+ $912</span>
                                                <span class="currency">(USD)</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="items">
                                    <a href="transactions-details.html">
                                        <div class="row">
                                            <div class="col pay-date">
                                                <span class="date">25</span>
                                                <span class="pay-month">MAR</span></div>
                                            <div class="col">
                                                <span class="name">Payment Received From Upwork </span></div>
                                            <div class="col text-center">
                                                <span class="payments-status text-danger" ><i data-toggle="tooltip" data-original-title="Cancelled" class="fas fa-times-circle"></i></span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">- $0.2</span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">+ $1231</span>
                                                <span class="currency">(USD)</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="items">
                                    <a href="transactions-details.html">
                                        <div class="row">
                                            <div class="col pay-date">
                                                <span class="date">15</span>
                                                <span class="pay-month">APR</span></div>
                                            <div class="col">
                                                <span class="name">Payment Received From Upwork </span></div>
                                            <div class="col text-center">
                                                <span class="payments-status text-warning" ><i data-toggle="tooltip" data-original-title="Completed" class="fas fa-exclamation-circle"></i></span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">- $0.2</span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">+ $562</span>
                                                <span class="currency">(USD)</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="items">
                                    <a href="transactions-details.html">
                                        <div class="row">
                                            <div class="col pay-date">
                                                <span class="date">15</span>
                                                <span class="pay-month">APR</span></div>
                                            <div class="col">
                                                <span class="name">Fiverr Pty Ltd</span></div>
                                            <div class="col text-center">
                                                <span class="payments-status" ><i class="fas fa-ellipsis-h" data-toggle="tooltip" data-original-title="In Progress"></i></span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">- $0.2</span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">+ $234</span>
                                                <span class="currency">(USD)</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="items">
                                    <a href="transactions-details.html">
                                        <div class="row">
                                            <div class="col pay-date">
                                                <span class="date">15</span>
                                                <span class="pay-month">APR</span></div>
                                            <div class="col">
                                                <span class="name">Withdraw to DBBL Bank </span></div>
                                            <div class="col text-center">
                                                <span class="payments-status" ><i class="fas fa-ellipsis-h" data-toggle="tooltip" data-original-title="In Progress"></i></span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">- $0.2</span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">- $2562</span>
                                                <span class="currency">(USD)</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="items">
                                    <a href="transactions-details.html">
                                        <div class="row">
                                            <div class="col pay-date">
                                                <span class="date">15</span>
                                                <span class="pay-month">APR</span></div>
                                            <div class="col">
                                                <span class="name">Payment Received From Envato</span></div>
                                            <div class="col text-center">
                                                <span class="payments-status text-success" ><i data-toggle="tooltip" data-original-title="Completed" class="fas fa-check-circle"></i></span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">- $0.2</span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">+ $562</span>
                                                <span class="currency">(USD)</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="items">
                                    <a href="transactions-details.html">
                                        <div class="row">
                                            <div class="col pay-date">
                                                <span class="date">15</span>
                                                <span class="pay-month">APR</span></div>
                                            <div class="col">
                                                <span class="name">Gas Bill Pay</span></div>
                                            <div class="col text-center">
                                                <span class="payments-status text-success" ><i data-toggle="tooltip" data-original-title="Completed" class="fas fa-check-circle"></i></span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">- $0.2</span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">- $562</span>
                                                <span class="currency">(USD)</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="items">
                                    <a href="transactions-details.html">
                                        <div class="row">
                                            <div class="col pay-date">
                                                <span class="date">15</span>
                                                <span class="pay-month">APR</span></div>
                                            <div class="col">
                                                <span class="name">Water Bill Payment</span></div>
                                            <div class="col text-center">
                                                <span class="payments-status" ><i class="fas fa-ellipsis-h" data-toggle="tooltip" data-original-title="In Progress"></i></span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">- $0.2</span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">- $562</span>
                                                <span class="currency">(USD)</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="items">
                                    <a href="transactions-details.html">
                                        <div class="row">
                                            <div class="col pay-date">
                                                <span class="date">15</span>
                                                <span class="pay-month">APR</span></div>
                                            <div class="col">
                                                <span class="name">landline Bill Pay</span></div>
                                            <div class="col text-center">
                                                <span class="payments-status text-danger" ><i data-toggle="tooltip" data-original-title="Cancelled" class="fas fa-times-circle"></i></span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">- $0.2</span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">- $562</span>
                                                <span class="currency">(USD)</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="trancstion-more">
                                    <div class="items">
                                            <a href="transactions-details.html">
                                                <div class="row">
                                                    <div class="col pay-date">
                                                        <span class="date">15</span>
                                                        <span class="pay-month">APR</span></div>
                                                    <div class="col">
                                                        <span class="name">Payment Received From Envato</span></div>
                                                    <div class="col text-center">
                                                        <span class="payments-status text-success" ><i data-toggle="tooltip" data-original-title="Completed" class="fas fa-check-circle"></i></span>
                                                    </div>
                                                    <div class="col">
                                                        <span class="payment-amaount">- $0.2</span>
                                                    </div>
                                                    <div class="col">
                                                        <span class="payment-amaount">+ $562</span>
                                                        <span class="currency">(USD)</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="items">
                                            <a href="transactions-details.html">
                                                <div class="row">
                                                    <div class="col pay-date">
                                                        <span class="date">15</span>
                                                        <span class="pay-month">APR</span></div>
                                                    <div class="col">
                                                        <span class="name">Gas Bill Pay</span></div>
                                                    <div class="col text-center">
                                                        <span class="payments-status text-success" ><i data-toggle="tooltip" data-original-title="Completed" class="fas fa-check-circle"></i></span>
                                                    </div>
                                                    <div class="col">
                                                        <span class="payment-amaount">- $0.2</span>
                                                    </div>
                                                    <div class="col">
                                                        <span class="payment-amaount">- $562</span>
                                                        <span class="currency">(USD)</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="items">
                                            <a href="transactions-details.html">
                                                <div class="row">
                                                    <div class="col pay-date">
                                                        <span class="date">15</span>
                                                        <span class="pay-month">APR</span></div>
                                                    <div class="col">
                                                        <span class="name">Water Bill Payment</span></div>
                                                    <div class="col text-center">
                                                        <span class="payments-status" ><i class="fas fa-ellipsis-h" data-toggle="tooltip" data-original-title="In Progress"></i></span>
                                                    </div>
                                                    <div class="col">
                                                        <span class="payment-amaount">- $0.2</span>
                                                    </div>
                                                    <div class="col">
                                                        <span class="payment-amaount">- $562</span>
                                                        <span class="currency">(USD)</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                      
                                </div>
                            </div>
                            <!-- Transaction List End -->

                            <!-- Transaction Details Modal  -->
                            <div id="transaction-detail" class="modal fade" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered details-area" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="modal_header">
                                                <span class="status bg-success">Paid</span>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="content-area">
                                                            <i class="fas fa-building"></i>
                                                            Desco Govt Water Ltd.
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="content-area text-right">
                                                            <div class="price">
                                                                $559
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-content-area">
                                                <h5 class="transcation-heading">Transaction Details</h5>
                                                <div class="transaction-area">
                                                    <div class="items">
                                                        <div class="row">
                                                            <div class="col">
                                                                <span class="name">Gas Bill Paid By:</span>
                                                            </div>
                                                            <div class="col">
                                                                <span class="decs">Jhon Due</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="items">
                                                        <div class="row">
                                                            <div class="col">
                                                                <span class="name">Transaction ID:</span>
                                                            </div>
                                                            <div class="col">
                                                                <span class="decs">8974HSDB32056KSDS</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="items">
                                                        <div class="row">
                                                            <div class="col">
                                                                <span class="name">Transaction ID:</span>
                                                            </div>
                                                            <div class="col">
                                                                <span class="decs">8974HSDB32056KSDS</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="items">
                                                        <div class="row">
                                                            <div class="col">
                                                                <span class="name">Description:</span>
                                                            </div>
                                                            <div class="col">
                                                                <span class="decs">This bill pay via Credit Card</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Transaction Modal End -->

                        <!-- Pagination -->
                        <ul class="pagination justify-content-left mt-4 pt-4 pl-0">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2 <span class="sr-only">(current)</span></a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item d-flex align-content-center text-muted mr-2">...</li>
                            <li class="page-item"><a class="page-link" href="#">19</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                            </li>
                        </ul>
                        <!-- Paginations end -->

                    </div>
                    <!-- All Transactions End -->




                    
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Create User</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="users.html" class="btn btn-sm btn-primary">Back to list</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="post" action="" autocomplete="off" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="jWuL0JHlytWb7KEd4iCZXfiH5FS1Rd3TQfLqjY7k">
                            <h6 class="heading-small text-muted mb-4">User information</h6>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">Name</label>
                                    <input type="text" name="name" id="input-name" class="form-control" placeholder="Name" value="" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Email</label>
                                    <input type="email" name="email" id="input-email" class="form-control" placeholder="Email" value="" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-role">Role</label>
                                    <select name="role_id" id="input-role" class="form-control" placeholder="Role" required>
                                        <option value="">Select</option>
                                        <option value="63" >Admin</option>
                                        <option value="1" >Manager</option>
                                        <option value="106" >Member</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">Profile photo</label>
                                    <div class="custom-file">
                                        <input type="file" name="photo" class="custom-file-input" id="input-picture" accept="image/*">
                                        <label class="custom-file-label" for="input-picture">Select profile photo</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password">Password</label>
                                    <input type="password" name="password" id="input-password" class="form-control" placeholder="Password" value="" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password-confirmation">Confirm Password</label>
                                    <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control" placeholder="Confirm Password" value="" required>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
