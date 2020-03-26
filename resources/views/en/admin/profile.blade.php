@extends('layouts.default', ['title' => 'profile user'])

@section('content')



<div class="main-content">

    @include('layouts.admin-topbar')


    <div class="header pb-6 pt-5 pt-lg-6 d-flex align-items-center" style="background-image: url(../argon/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->

    </div>

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-8 order-xl-1 offset-xl-2">

                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Edit Profile</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="" autocomplete="off" enctype="multipart/form-data">

                            <h6 class="heading-small text-muted mb-4">User information</h6>


                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">Name</label>
                                    <input type="text" name="name" id="input-name" class="form-control" placeholder="Name" value="Admin" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Email</label>
                                    <input type="email" name="email" id="input-email" class="form-control" placeholder="Email" value="admin@argon.com" required>
                                </div>
				                <div class="form-group">
                                    <label class="form-control-label" for="input-name">Profile photo</label>
                                    <div class="custom-file">
                                        <input type="file" name="photo" class="custom-file-input" id="input-picture" accept="image/*">
                                        <label class="custom-file-label" for="input-picture">Select profile photo</label>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">Save</button>
                                </div>
                            </div>
                        </form>

                        <hr class="my-4" />

                        <form method="post" action="" autocomplete="off">

                            <h6 class="heading-small text-muted mb-4">Password</h6>


                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-current-password">Current Password</label>
                                    <input type="password" name="old_password" id="input-current-password" class="form-control" placeholder="Current Password" value="" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password">New Password</label>
                                    <input type="password" name="password" id="input-password" class="form-control" placeholder="New Password" value="" required>
                                 </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password-confirmation">Confirm New Password</label>
                                    <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control" placeholder="Confirm New Password" value="" required>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">Change password</button>
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
