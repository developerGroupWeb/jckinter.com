@extends('layouts.default', ['title' => 'edit user'])
@extends('layouts.default', ['title' => 'role'])

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
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">User Management</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="users.html" class="btn btn-sm btn-primary">Back to list</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="" autocomplete="off" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="jWuL0JHlytWb7KEd4iCZXfiH5FS1Rd3TQfLqjY7k">                          <input type="hidden" name="_method" value="put">
                            <h6 class="heading-small text-muted mb-4">User information</h6>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">Name</label>
                                    <input type="text" name="name" id="input-name" class="form-control" placeholder="Name" value="Lenin Fernando Rugeles"  required autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Email</label>
                                    <input type="email" name="email" id="input-email" class="form-control" placeholder="Email" value="email@gmail.com" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-role">Role</label>
                                    <select name="role_id" id="input-role" class="form-control" placeholder="Role" required>
                                        <option value="">Select</option>
                                        <option value="1" >Admin</option>
                                        <option value="106" >Manager</option>
                                        <option value="25" >Membre</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="" for="input-name">Profile photo</label>
                                    <div class="custom-file">
                                        <input type="file" name="photo" class="custom-file-input" id="input-picture" accept="image/*">
                                        <label class="custom-file-label" for="input-picture">Select profile photo</label>
                                </div>

                                </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-password">Password</label>
                                        <input type="password" name="password" id="input-password" class="form-control" placeholder="Password" value="">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-password-confirmation">Confirm Password</label>
                                        <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control" placeholder="Confirm Password" value="">
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
