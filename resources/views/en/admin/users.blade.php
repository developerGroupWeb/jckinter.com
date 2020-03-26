@extends('layouts.default', ['title' => 'users'])

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
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">

                            {!! flash_message('delete', 'alert-warning') !!}
                            {!! flash_message('update', 'alert-success') !!}

                            <div class="col-8">
                                <h3 class="mb-0">Users</h3>
                                <p class="text-sm mb-0">
                                        This is the user management.
                                    </p>
                            </div>

                                <div class="col-4 text-right">
                                    <a href="{{ route('users.create', ['language' => app()->getLocale()]) }}" class="btn btn-sm btn-primary">Add user</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-2">
                        </div>

                    <div class="table-responsive py-4">
                        <table class="table align-items-center table-flush"  id="datatable-basic">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Creation Date</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($users as $user)

                                <tr>
                                    <td>
                                        <span class="avatar avatar-sm rounded-circle">
                                            <img src="{{asset($user->photo)}}" alt="" style="max-width: 100px; border-radius: 25px">
                                        </span>
                                    </td>
                                    <td>{{$user->name}}</td>
                                    <td>
                                        <a href=""><span class="__cf_email__" data-cfemail="6e0d1c0b0f1a011c2e0f1c090100400d0103">{{$user->email}}</span></a>
                                    </td>
                                    <td>{{$user->role}}</td>
                                    <td>{{$user->created_at->format('d/m/Y H:i')}}</td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="{{route('users.edit', ['language' => app()->getLocale(), 'user' => $user->id])}}">Edit</a>
                                                <form method="post" action="{{route('users.destroy', ['language' => app()->getLocale(), 'user' => $user->id])}}" onsubmit="return confirm('DO YOU REALLY WANT TO DELETE {{ strtoupper($user->name) }}? ')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button  class="dropdown-item" >
                                                        Delete
                                                    </button>
                                                </form>
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
