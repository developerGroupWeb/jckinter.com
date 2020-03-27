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

        {!! flash_message('success', 'alert-success') !!}

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">

                            <div class="col-8">
                                <h3 class="mb-0">Roles</h3>
                                <p class="text-sm mb-0">
                                    This is the roles management.
                                </p>
                            </div>

                            <div class="col-4 text-right">
                                <a href="{{route('admin.user.create.role.index', ['language' => app()->getLocale()])}}" class="btn btn-sm btn-primary">Add role</a>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 mt-2">
                    </div>

                    <div class="table-responsive py-4">
                        <table class="table table-flush"  id="datatable-basic">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Creation date</th>
                                    <th scope="col"></th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td>{{ucfirst($role->name)}}</td>
                                    <td>{{$role->description}}</td>
                                    <td>{{$role->created_at->format('d/m/Y H:i')}}</td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="{{route('admin.role.edit.index', ['language' => app()->getLocale(), 'id' => $role->id])}}">Edit</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
