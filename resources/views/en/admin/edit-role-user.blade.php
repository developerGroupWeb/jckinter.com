@extends('layouts.default', ['title' => 'edit role user'])

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
                                    <h3 class="mb-0">Update Role</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{route('admin.role.index', app()->getLocale())}}" class="btn btn-sm btn-primary">Back to list</a>
                                </div>
                            </div>
                        </div>


                        <div class="card-body">
                            <form method="post" action="{{route('admin.user.edit', ['language' => app()->getLocale(), 'id' => $role->id])}}" autocomplete="off">
                                @method('PUT')
                                @csrf


                                <h6 class="heading-small text-muted mb-4">Role information</h6>

                                {!! flash_message('success', 'alert-success') !!}

                                <div class="pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Name</label>
                                        <input type="text" name="name" id="input-name" class="form-control" placeholder="Name" value="{{ucfirst($role->name)}}" >
                                        <span style="font-style: italic; color: red; font-size: small">{{$errors->first('name')}}</span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-description">Description</label>
                                        <textarea name="description" id="input-description" cols="30" rows="10" class="form-control" placeholder="Description">{{$role->description}}</textarea>
                                        <span style="font-style: italic; color: red; font-size: small">{{$errors->first('description')}}</span>
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
