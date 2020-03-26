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
                                <h3 class="mb-0">Role Management</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="" class="btn btn-sm btn-primary">Back to list</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="" autocomplete="off">
                            <input type="hidden" name="_token" value="aOWJPfiH7deaNrI7u5m1Ok7QdhudCxMViWzbghDr">                          <input type="hidden" name="_method" value="put">
                            <h6 class="heading-small text-muted mb-4">Role information</h6>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">Name</label>
                                    <input type="text" name="name" id="input-name" class="form-control" placeholder="Name" value="Cooldh" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-description">Description</label>
                                    <textarea name="description" id="input-description" cols="30" rows="10" class="form-control" placeholder="Description">Shshdhdh333</textarea>
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
