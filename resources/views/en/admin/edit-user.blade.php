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
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Update User</h3>
                                </div>

                                {!! flash_message('success', 'alert-success') !!}

                                <div class="col-4 text-right">
                                    <a href="{{ route('users.index', app()->getLocale()) }}" class="btn btn-sm btn-primary">Back to list</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">

                            <form method="post" action="{{ route('users.update', ['language' => app()->getLocale(), 'user' => $user->id]) }}" autocomplete="off" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <h6 class="heading-small text-muted mb-4">User information</h6>
                                <div class="pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Name</label>
                                        <input type="text" name="name" id="input-name" class="form-control" placeholder="Name" value="{{$user->name}}">
                                        <span style="font-style: italic; color: red; font-size: small">{{$errors->first('name')}}</span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Email</label>
                                        <input type="email" name="email" id="input-email" class="form-control" placeholder="Email" value="{{$user->email}}" >
                                        <span style="font-style: italic; color: red; font-size: small">{{$errors->first('email')}}</span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-role">Role</label>
                                        <select name="role" id="input-role" class="form-control" placeholder="Role" >
                                            <option value="">Select</option>
                                            @foreach($roles as $role)
                                                <option value="{{$role->name}}" {{ old('role') ? 'selected' : '' }}>{{ucfirst($role->name)}}</option>
                                            @endforeach

                                        </select>
                                        <span style="font-style: italic; color: red; font-size: small">{{$errors->first('role')}}</span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Profile photo</label>
                                        <div class="custom-file">
                                            <input type="file" name="photo" class="custom-file-input" id="input-picture" accept="image/*">
                                            <label class="custom-file-label" for="input-picture">Select profile photo</label>
                                            <span style="font-style: italic; color: red; font-size: small">{{$errors->first('photo')}}</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-password">Password</label>
                                        <input type="password" name="password" id="input-password" class="form-control" placeholder="Password" value="">
                                        <span style="font-style: italic; color: red; font-size: small">{{$errors->first('password')}}</span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-password-confirmation">Confirm Password</label>
                                        <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control" placeholder="Confirm Password" value="">
                                        <span style="font-style: italic; color: red; font-size: small">{{$errors->first('password_confirmation')}}</span>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success mt-4">Update</button>
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
